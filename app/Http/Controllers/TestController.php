<?php

namespace App\Http\Controllers;

use App\Models\User ;
use App\Mail\TestMailer ;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Helpers\TwilioHelper;





class TestController extends Controller
{

    public function create() {
        try {
            User::create([
                'username' => 'jhon',
                'email' => 'jhon@example.com',
                'password' => '1234'
            ]) ;
        }
        catch (\Exception $e) {
            Log::channel('userLogin')->error($e->getMessage());
        }
   }
   public function send_sms(){
        $to = "+212657233357" ;
        $message = 'hello world ' ;
        $result = TwilioHelper::sendSMS($to, $message);
        if ($result) {
            return "SMS sent successfully!";
        } else {
            return "Failed to send SMS.";
        }

   }

}

