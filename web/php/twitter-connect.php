<?php
include_once "oauth-php/library/OAuthStore.php";
include_once "oauth-php/library/OAuthRequester.php";
$key = 'pxAhOddHpARGQcqfyEu3Q'; // this is your consumer key
$secret = '45w8NSfMtDyjrB5xriultt743lXSEvq0DqN5q7gU'; // this is your secret key


$options = array( 'consumer_key' => $key, 'consumer_secret' => $secret );
OAuthStore::instance("2Leg", $options );

$url = 'https://api.twitter.com/oauth/request_token';
$method = "POST"; // you can also use POST instead
$params = null;

try
{
        // Obtain a request object for the request we want to make
        $request = new OAuthRequester($url, $method, $params);

        // Sign the request, perform a curl request and return the results, 
        // throws OAuthException2 exception on an error
        // $result is an array of the form: array ('code'=>int, 'headers'=>array(), 'body'=>string)
        $result = $request->doRequest();
        
        $response = $result['body'];
		echo $response;
}
catch(OAuthException2 $e)
{

}

?>