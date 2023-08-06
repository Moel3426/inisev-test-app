<?php

namespace Database\Seeders;

use App\Models\Subscription;
use Illuminate\Database\Seeder;

class SubscriptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subscriptions = [
            [
                'website_id' => 1,
                'email' => 'subscriber1@gmail.com',
            ],
            [
                'website_id' => 1,
                'email' => 'subscriber2@gmail.com',
            ],
        ];

        foreach ($subscriptions as $subscriptionData) {
            Subscription::create($subscriptionData);
        }
    }
}
