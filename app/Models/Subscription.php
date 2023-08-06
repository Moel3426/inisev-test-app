<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    // This is the only field that can be mass-assigned.
    protected $fillable = [
        'email',
    ];

    // A subscription belongs to a website.
    public function website()
    {
        return $this->belongsTo(Website::class);
    }

    // A subscription has many posts.
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    // Check if a subscription has received a post.
    public function hasReceivedPost(Post $post)
    {
        return $this->posts->contains($post);
    }

}
