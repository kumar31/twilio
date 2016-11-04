<?php
include('./vendor/autoload.php');
include('./config.php');
include('./randos.php');

use Twilio\Jwt\AccessToken;
use Twilio\Jwt\Grants\VideoGrant;

// An identifier for your app - can be anything you'd like
$appName = 'TwilioVideoDemo';

// choose a random username for the connecting user
//$identity = randomUsername();
$identity = 'test-user';

// Create access token, which we will serialize and send to the client
/*$token = new AccessToken(
    $TWILIO_ACCOUNT_SID, 
    $TWILIO_API_KEY, 
    $TWILIO_API_SECRET, 
    3600, 
    $identity
);*/
//$token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImN0eSI6InR3aWxpby1mcGE7dj0xIn0.eyJqdGkiOiJTS2YwZjM5YTU3ODJjZjg3NmNhMDAwNzY4ZmU5NTIzMjcxLTE0NzgyNjIyNTYiLCJpc3MiOiJTS2YwZjM5YTU3ODJjZjg3NmNhMDAwNzY4ZmU5NTIzMjcxIiwic3ViIjoiQUM1NGMyNzRmMjlhNTA2YzY1MTUxY2MyOWM3MTQ0ODY3MSIsImV4cCI6MTQ3ODI2NTg1NiwiZ3JhbnRzIjp7ImlkZW50aXR5IjoidGVzdC11c2VyIiwicnRjIjp7ImNvbmZpZ3VyYXRpb25fcHJvZmlsZV9zaWQiOiJWU2FhMWViOTRjM2Q1MmQ3ODIzYzIzYTFjZjBhOGQyNjk4In19fQ.yT6oh4AEclPNBnorO6xGGJyEBRsGWatCmI6ed9sTGU8";

//echo $identity;
//print_r($token); die;
// Grant access to Video
$grant = new VideoGrant();
$grant->setConfigurationProfileSid($TWILIO_CONFIGURATION_SID);
$token->addGrant($grant);

// return serialized token and the user's randomly generated ID
echo json_encode(array(
    'identity' => $identity,
    'token' => "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImN0eSI6InR3aWxpby1mcGE7dj0xIn0.eyJqdGkiOiJTS2YwZjM5YTU3ODJjZjg3NmNhMDAwNzY4ZmU5NTIzMjcxLTE0NzgyNjIyNTYiLCJpc3MiOiJTS2YwZjM5YTU3ODJjZjg3NmNhMDAwNzY4ZmU5NTIzMjcxIiwic3ViIjoiQUM1NGMyNzRmMjlhNTA2YzY1MTUxY2MyOWM3MTQ0ODY3MSIsImV4cCI6MTQ3ODI2NTg1NiwiZ3JhbnRzIjp7ImlkZW50aXR5IjoidGVzdC11c2VyIiwicnRjIjp7ImNvbmZpZ3VyYXRpb25fcHJvZmlsZV9zaWQiOiJWU2FhMWViOTRjM2Q1MmQ3ODIzYzIzYTFjZjBhOGQyNjk4In19fQ.yT6oh4AEclPNBnorO6xGGJyEBRsGWatCmI6ed9sTGU8",
));
