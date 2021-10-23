# whatsapp-Integration-in-laravel
->Setting Up Twilio Sandbox for WhatsApp
https://www.twilio.com/blog/create-laravel-php-notification-channel-whatsapp-twilio
composer require twilio/sdk --ignore-platform-reqs 
// .env

TWILIO_AUTH_SID=YOUR_TWILIO_AUTH_SID
TWILIO_AUTH_TOKEN=YOUR_TWILIO_AUTH_TOKEN
TWILIO_WHATSAPP_FROM=YOUR_TWILIO_WHATSAPP_FROM
// config/services.php

'twilio' => [
  'sid' => env('TWILIO_AUTH_SID'),
  'token' => env('TWILIO_AUTH_TOKEN'),
  'whatsapp_from' => env('TWILIO_WHATSAPP_FROM')
],


//test.php
 function message($booking){

  $twilio = new Client(env('TWILIO_AUTH_SID'),env('TWILIO_AUTH_TOKEN')); 


  $message = $twilio->messages 
            ->create("whatsapp:+911234567891", // to 
                     array( 
                         "from" => "whatsapp:+14155288886",       
                         "body" => "Hello,Mohan"
                     ) 
            ); 
        
}
