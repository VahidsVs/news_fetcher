<?php

namespace App\Jobs;

use App\Models\ApiResource;
use App\Models\Category;
use App\Models\Post;
use Carbon\Carbon;
use DateTime;
use Exception;
use GuzzleHttp\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use SimpleXMLElement;

class NewsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $sourceURL;
    private $dataType;
    private $categoryParentName;
    private $categoryId;
    /**
     * Create a new job instance.
     */
    public function __construct($sourceURL, $dataType, $categoryParentName, $categoryId, $callSource)
    {
        $this->sourceURL = $sourceURL;
        $this->categoryId = $categoryId;
        $this->dataType = $dataType;
        $this->categoryParentName = $categoryParentName;
        if ($callSource == "contoller")
            Log::debug("From Contoller");
        if ($callSource == "kernel") {
            Log::debug("From Kernel");
            self::handle();
        }
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        try {
            #region get json/xml data from sources
            $client = new Client();
            Log::debug("api_url: $this->sourceURL");
            $res = $client->get($this->sourceURL);
            $content = (string)$res->getBody();
            if ($this->dataType == 'xml') {
                $content = Str::of($content)->replace('dc:', '');
                $content = Str::of($content)->replace(':encoded', '');
                $content = Str::of($content)->replace(':content', '');
                $xmlItem = new SimpleXMLElement($content, LIBXML_NOCDATA);
            }
            #endregion
            #region fetch news based on parent_names of categories
            switch ($this->categoryParentName) {
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
                            ['slug' => $item->url, 'category_id' => $this->categoryId],
                            [
                                'title' => $item->title, 'body' => $item->content, 'summary' => $item->description,
                                'thumbnail_path' => $item->image, 'author_id' => 1, 'source' => $item->source->name . '_' . $item->source->url, 'published_at' => $item->publishedAt
                            ]
                        );
                    }
                    break;
                    // get xml data
                case 'news-krone.at':
                    $jsonItems = json_decode(json_encode($xmlItem))->channel->item;
                    $jsonItems = json_decode(Str::of(json_encode($jsonItems))->replace('@attributes', 'attributes'));
                    foreach ($jsonItems as $item) {
                        $imagePath = $item->media->attributes->url;
                        $item->pubDate = Str::of($item->pubDate)->replace('+0000', '');
                        $item->pubDate = Str::of($item->pubDate)->trim();
                        $item->pubDate = date_create($item->pubDate);
                        $item->pubDate = date_format($item->pubDate, "Y/m/d H:i:s");
                        Post::updateOrCreate(
                            ['slug' => $item->guid, 'category_id' => $this->categoryId],
                            [
                                'title' => $item->title, 'body' => strip_tags($item->content), 'summary' => strip_tags($item->description),
                                'thumbnail_path' => $imagePath, 'author_id' => 1, 'source' => 'Kronen Zeitung', 'published_at' => $item->pubDate
                            ]
                        );
                        // Log::info("message is: {$item->title}");
                    }
                    break;
            }
            #endregion
        } catch (Exception $e) {
            echo "Error: {$e->getMessage()}";
        }
    }
}
