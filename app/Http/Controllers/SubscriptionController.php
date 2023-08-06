<?php
namespace App\Http\Controllers;

use App\Http\Requests\SubscribeRequest;
use App\Services\SubscriptionService;
use Symfony\Component\HttpFoundation\Response;

class SubscriptionController extends Controller
{

    public function subscribe(SubscribeRequest $request)
    {
        // validate the request
        $data = $request->validated();

        // subscribe the user
        SubscriptionService::subscribe($data);

        // give api response
        return response()->json([
            'message' => 'Subscription created successfully.',
        ], Response::HTTP_CREATED);
    }
}
