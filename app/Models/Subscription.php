<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'website_id',
        'email',
    ];

    public function website()
    {
        return $this->belongsTo(Website::class);
    }
}
