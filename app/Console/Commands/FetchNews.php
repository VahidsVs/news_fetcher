<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\Post;
use Exception;
use GuzzleHttp\Client;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use SimpleXMLElement;

class FetchNews extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch:news';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch news from sources';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $categories = Category::where('status', 1)->whereIn('source', ['api', 'rss'])->get();
        print_r("Begin Command Fetch News");
        // dd($categories);
        foreach ($categories as $items) {
            try {
                if ($items->parent_name == 'news-gnews.io')
                    $apiKey = env('API_KEY_Gnews');
                if ($items->parent_name == 'photos-unsplash.com')
                    $apiKey = env('API_KEY_Unsplash');
                if ($items->parent_name == 'news-krone.at')
                    $apiKey = null;
                #region get json/xml data from sources
                $client = new Client();
                Log::debug("api_url: $items->api_url$apiKey");
                $srcURL = $items->api_url . $apiKey;
                $res = $client->get($srcURL);
                $content = (string)$res->getBody();

                if ($items->source_data_type == 'xml') {
                    $content = Str::of($content)->replace('dc:', '');
                    $content = Str::of($content)->replace(':encoded', '');
                    $content = Str::of($content)->replace(':content', '');
                    $xmlItem = new SimpleXMLElement($content, LIBXML_NOCDATA);
                }
                #endregion
                #region fetch news based on parent_names of categories
                switch ($items->parent_name) {
                        // get json data
                    case 'news-gnews.io':
                        $jsonItems = json_decode($content)->articles;
                        foreach ($jsonItems as $item) {
                            // $item->publishedAt=str_replace('T',' ',$item->publishedAt);
                            // $item->publishedAt=str_replace('Z','',$item->publishedAt);
                            $item->publishedAt = Str::of($item->publishedAt)->replace('T', ' ');
                            $item->publishedAt = Str::of($item->publishedAt)->replace('Z', '');
                            $item->publishedAt = Str::of($item->publishedAt)->trim();
                            Post::updateOrCreate(
                                ['slug' => $item->url, 'category_id' => $items->id],
                                [
                                    'title' => $item->title, 'body' => $item->content, 'summary' => $item->description,
                                    'thumbnail_path' => $item->image, 'author_id' => 1, 'source' => $item->source->name . '_' . $item->source->url, 'published_at' => $item->publishedAt
                                ]
                            );
                        }
                        break;
                        // get xml data
                    case 'news-krone.at':
                        Log::debug("news-krone.at");
                        $jsonItems = json_decode(json_encode($xmlItem))->channel->item;
                        $jsonItems = json_decode(Str::of(json_encode($jsonItems))->replace('@attributes', 'attributes'));
                        foreach ($jsonItems as $item) {
                            $imagePath = $item->media->attributes->url;
                            $item->pubDate = Str::of($item->pubDate)->replace('+0000', '');
                            $item->pubDate = Str::of($item->pubDate)->trim();
                            $item->pubDate = date_create($item->pubDate);
                            $item->pubDate = date_format($item->pubDate, "Y/m/d H:i:s");
                            Post::updateOrCreate(
                                ['slug' => $item->guid, 'category_id' => $items->id],
                                [
                                    'title' => $item->title, 'body' => strip_tags($item->content), 'summary' => strip_tags($item->description),
                                    'thumbnail_path' => $imagePath, 'author_id' => 1, 'source' => 'Kronen Zeitung', 'published_at' => $item->pubDate
                                ]
                            );
                            // Log::info("message is: {$item->title}");
                        }
                        break;
                    case 'photos-unsplash.com':
             
                        Log::debug("photos-unsplash.com");
                        $jsonItems = json_decode($content);
                      
                        foreach ($jsonItems as $item) {
                            $item->publishedAt = Str::of($item->updated_at)->replace('T', ' ');
                            $item->publishedAt = Str::of($item->updated_at)->replace('Z', '');
                            Post::updateOrCreate(
                                ['slug' => $item->urls->full, 'category_id' => $items->id],
                                [
                                    'title' => $item->alt_description, 'body' => $item->alt_description, 'summary' => $item->alt_description,
                                    'thumbnail_path' => $item->urls->small, 'author_id' => 1, 'source' => $item->user->username . '_' . $item->user->links->self, 'published_at' => $item->publishedAt
                                ]
                            );
                        }
                        break;
                }
                #endregion
            } catch (Exception $e) {
                echo "Error: {$e->getMessage()}";
            }
        }
    }
}
