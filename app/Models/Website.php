<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Subscription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Website extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'url',
    ];

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
