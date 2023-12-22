<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Mail\Subscribe ;
use Illuminate\Support\Facades\Mail;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:send {--email=}';


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
        $userEmail = $this->option('email');
        Mail::to($userEmail)->send(new Subscribe());
        return $this->info('mail was send successfully');
    }
}
