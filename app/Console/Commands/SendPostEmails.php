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
    protected $description = 'Send post emails to subscribers';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $websites = Website::with('subscriptions')->get();

        foreach ($websites as $website) {
            $latestPost = $website->posts()->hasNotNotify()->latest()->first();

            if(!$latestPost) {
                return;
            }

            $latestPost->update(['notify' => 1]);
            foreach ($website->subscriptions as $subscription) {
                SendPostEmailJob::dispatch($subscription->email, $latestPost);
            }
        }
    }
}
