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
            $res = $client->get($this->sourceURL);
            $content = (string)$res->getBody();
            $jsonData = json_decode($content)->articles;

            foreach ($jsonData as $value) {
                Post::updateOrCreate(
                    ['title' => $value->title, 'body' => $value->content, 'summary' => $value->description, 'thumbnail_path' => $value->urlToImage, 'author_id' => 1],
                    ['slug' => $value->url, 'category_id' => $this->categoryId]
                );
            }
        } catch (Exception $e) {
            echo "Error: {$e->getMessage()}";
        }
    }
}
