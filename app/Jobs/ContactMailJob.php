<?php

namespace App\Jobs;

use App\Mail\ContactMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class ContactMailJob implements ShouldQueue
{
    use Queueable;

    public $data;
    /**
     * Create a new job instance.
     */
    public function __construct($data)
    {
        $this->data=$data;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to('siteAdmin@gmail.com')->send(New ContactMail($this->data));
    }
}
