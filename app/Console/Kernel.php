<?php

namespace App\Console;

use App\Jobs\LogJob;
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
        $schedule->job(new NewsJob('kernel'))->everyFiveSeconds();
        $schedule->command('set:section1')->cron('0 1 * * *');
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
