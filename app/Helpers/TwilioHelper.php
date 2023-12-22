<?php

namespace App\Helpers;

use Twilio\Rest\Client;

class TwilioHelper
{
    public static function sendSMS($to, $message)
    {


        $client = new Client("AC3c32c83bf89a4184114000927596ecbb", "af6c37ee704aa8816b56950ffe3cd4c8");
        $client->messages->create(
            $to,
            [
                'from' => '+12058917712',
                'body' =>  $message
            ]
        );
        return "message was send successfully " ;


    }
}
