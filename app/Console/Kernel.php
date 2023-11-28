<?php

namespace App\Console;

use App\Jobs\NewsJob;
use App\Models\ApiResource;
use App\Models\Category;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        //$schedule->command('inspire')->everyFifteenSeconds();
        $categories = Category::where('status',2)->whereIn('source',['api','rss'])->get();
        foreach ($categories as $category) 
        {
        $apiKey=$category->parent_name=='news-gnews.io'?env('API_KEY_Gnews'):null;
        $schedule->job(new NewsJob($category->api_url.$apiKey,$category->id,$category->source_data_type,"kernel"))->everyThirtyMinutes();
        }
    }   

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
