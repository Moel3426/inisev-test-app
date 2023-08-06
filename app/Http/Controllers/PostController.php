<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use Illuminate\Support\Facades\Artisan;
use App\Services\PostService;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    // create a new post
    public function create(CreatePostRequest $request)
    {
        // validate the request
        $data = $request->validated();

        // create the post
        $latestPost = PostService::createPost($data);


        // give api response
        return response()->json([
            'message' => 'Post created successfully.',
            'post' => $latestPost,
        ], Response::HTTP_CREATED );
    }
}
