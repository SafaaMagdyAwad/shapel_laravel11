<?php

namespace App\Console\Commands;

use App\Jobs\NewsLetterJob;
use App\Models\Supscripe;
use Illuminate\Console\Command;


class SendNewsLetter extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-news-letter';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $subscripers=Supscripe::where('active',1)->get();
        foreach ($subscripers as $subscriper) {
            # code...
            NewsLetterJob::dispatch($subscriper);
        }
    }
}
