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
    /**
     * Create a new job instance.
     */
    public function __construct($callSource)
    {
        // if ($callSource == "contoller")
        //     Log::debug("From Contoller");
        // if ($callSource == "kernel") {
        //     Log::debug("From Kernel");
        //     self::handle();
        // }
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        
    }
}
