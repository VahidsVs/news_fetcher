<?php

namespace App\Console\Commands;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class SetSection1 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'set:section1';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Set featured posts, In section 1';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        Post::where('created_at', '>', Carbon::now()->subDays(2))->inRandomOrder()->limit(10)->update(['display' => 'section1']);
        Post::where('created_at', '<', Carbon::now()->subDays(2))->update(['display' => null]);
        Log::debug("Set featured posts, In section 1");
    }
}
