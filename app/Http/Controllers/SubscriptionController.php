<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Website;
use App\Models\Subscription;

class SubscriptionController extends Controller
{

    public function subscribe(Request $request)
    {
        $data = $request->validate([
            'website_id' => 'required|exists:websites,id',
            'email' => 'required|email|unique:subscriptions,email,NULL,id,website_id,' . $request->input('website_id'),
        ]);

        Subscription::create($data);

        // give api response
        return response()->json([
            'message' => 'Subscription created successfully.',
        ], 201);
    }
}
