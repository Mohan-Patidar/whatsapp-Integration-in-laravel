<?php 
 
// Update the path below to your autoload.php, 
// see https://getcomposer.org/doc/01-basic-usage.md 
require_once 'vendor/autoload.php'; 
 
use Twilio\Rest\Client; 
 
$sid    = "TWILIO_AUTH_SID"; 
$token  = "TWILIO_AUTH_TOKEN"; 
$twilio = new Client($sid, $token); 
 
$message = $twilio->messages 
                  ->create("whatsapp:+911234567890", // to 
                           array( 
                               "from" => "whatsapp:+14155238886",       
                               "body" => "Hello mohan" 
                           ) 
                  ); 
 
print($message->sid);