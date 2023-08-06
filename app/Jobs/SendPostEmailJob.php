<?php

namespace App\Jobs;

use App\Mail\PostPublished;
use App\Models\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendPostEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $email;
    protected $post;

    public function __construct($email, Post $post)
    {
        $this->email = $email;
        $this->post = $post;
    }

    public function handle()
    {
        // Construct the email content using the PostPublished mail class.
        $emailContent = new PostPublished($this->post);

        // Use the Mail facade to send the email.
        Mail::to($this->email)->send($emailContent);
    }
}
