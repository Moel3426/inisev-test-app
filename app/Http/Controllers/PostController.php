<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Website;
use Illuminate\Http\Request;
use App\Jobs\SendPostEmailJob;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use App\Console\Commands\SendPostEmails;

class PostController extends Controller
{
    // create a new post
    public function create(Request $request)
    {
        // validate the request
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'website_id' => 'required|integer',
        ]);

        // create the post
        $latestPost = Post::create($data);

        // use the SendPostEmails command to send the emails use call
        Artisan::call('app:send-post-emails');


        // return a response
        return response()->json([
            'message' => 'Post created successfully.',
            'post' => $latestPost,
        ], 201);
    }
}
