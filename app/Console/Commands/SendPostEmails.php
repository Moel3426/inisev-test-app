<?php

namespace App\Console\Commands;

use App\Models\Website;
use App\Jobs\SendPostEmailJob;
use Illuminate\Console\Command;

class SendPostEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-post-emails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $websites = Website::with('subscriptions')->get();

        foreach ($websites as $website) {
            $latestPost = $website->posts()->latest()->first();
            
            foreach ($website->subscriptions as $subscription) {
                if (!$subscription->hasReceivedPost($latestPost)) {
                    // Queue the email job for sending.
                    SendPostEmailJob::dispatch($subscription->email, $latestPost);
                    
                    $subscription->markPostAsSent($latestPost);
                }
            }
        }
    }
}
