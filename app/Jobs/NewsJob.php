<?php

namespace App\Jobs;

use App\Models\ApiResource;
use App\Models\Category;
use App\Models\Post;
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


class NewsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $sourceURL, $categoryId;
    /**
     * Create a new job instance.
     */
    public function __construct($sourceURL, $categoryId, $callSource)
    {
        $this->sourceURL = $sourceURL;
        $this->categoryId = $categoryId;
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
            $client = new Client();
            Log::debug("api_url: $this->sourceURL");
            $res = $client->get($this->sourceURL);
            $content = (string)$res->getBody();
            $jsonItems = json_decode($content)->articles;
            // Log::debug("jsonData: $jsonItems");

            foreach ($jsonItems as $item) {
                // $item->publishedAt=str_replace('T',' ',$item->publishedAt);
                // $item->publishedAt=str_replace('Z','',$item->publishedAt);
                $item->publishedAt = Str::of($item->publishedAt)->replace('T', ' ');
                $item->publishedAt = Str::of($item->publishedAt)->replace('Z', '');
                Post::updateOrCreate(
                    [
                        'title' => $item->title, 'body' => $item->content, 'summary' => $item->description,
                        'thumbnail_path' => $item->image, 'author_id' => 1, 'source' => $item->source->name . '_' . $item->source->url, 'published_at' => $item->publishedAt
                    ],
                    ['slug' => $item->url, 'category_id' => $this->categoryId]
                );
            }
        } catch (Exception $e) {
            echo "Error: {$e->getMessage()}";
        }
    }
}
