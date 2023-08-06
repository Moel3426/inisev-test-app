<?php
namespace App\Services;


use App\Models\Post;
use Illuminate\Support\Facades\Http;

class PostService
{
    public static function createPost($data)
    {
        return Post::create($data);
    }
}
