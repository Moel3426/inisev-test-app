<?php
namespace App\Services;


use App\Models\Subscription;

class SubscriptionService
{
    public static function subscribe($data)
    {
        return Subscription::create($data);
    }
}
