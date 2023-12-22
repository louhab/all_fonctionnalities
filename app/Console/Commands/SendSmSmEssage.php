<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Helpers\TwilioHelper;


class SendSmSmEssage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature =  'sms:send {phone} {message}';

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

        $to =  $this->argument('phone') ;
        $message = $this->argument('message') ;

        $result = TwilioHelper::sendSMS($to, $message);
        if ($result) {
            return $this->info('the sms was sent successfully') ;
        } else {
            return $this->info('the sms was not sent') ;
        }

    }
}
