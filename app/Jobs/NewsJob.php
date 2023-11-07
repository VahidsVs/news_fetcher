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
    private $apiId;
    public $jsonData;
    /**
     * Create a new job instance.
     */
    public function __construct($apiId,$callSource)
    {
        $this->apiId = $apiId;
        // if ($callSource=="kernel") {
        //     self::handle();
        // }
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $client = new Client();
        $res = $client->get($this->apiId);
        $content = (string)$res->getBody();
        $content = str_replace('&', 'and', $content);
        $content = str_replace('dc:', '', $content);
        $content = str_replace('orfon:', '', $content);
        $xmlData = simplexml_load_string($content);
        $jsonData = json_decode(json_encode($xmlData))->item;
        try {
            foreach ($jsonData as $value) {
                $category = Category::where('name', $value->subject)->first();
                Post::updateOrCreate(
                    ['title' => $value->title, 'body' => $value->title, 'summary' => $value->title, 'author_id' => 1],
                    ['slug' => $value->link, 'category_id' => $category->id, 'api_id' => ApiResource::API_ID_ORF_AT]
                );
                echo 'done';
            }
        } catch (Exception $e) {
            echo "Error Message Is: {$e->getMessage()}";
        }
    }
}
