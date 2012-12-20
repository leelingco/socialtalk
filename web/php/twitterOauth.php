<?php
include_once "oauth-php/library/OAuthStore.php";
include_once "oauth-php/library/OAuthRequester.php";
$serverHost= $_SERVER['HTTP_HOST'];
if($serverHost=='127.0.0.1'){
	$options = array('server' => '127.0.0.1', 'username' => 'root',
	                 'password' => '',  'database' => 'test');
	$ck='pxAhOddHpARGQcqfyEu3Q';
	$cs='45w8NSfMtDyjrB5xriultt743lXSEvq0DqN5q7gU';
}else{
	$options = array('server' => 'mysql.cambridgesolutions.net', 'username' => 'toklive',
	                 'password' => '0fferpal',  'database' => 'toklive');
	$ck='I6mfCEfoJrC7Yxgi6sv2g';
	$cs='nEFURXnMefLbL1nh7drkvr3CLl9HR92l31XplZqxdgQ';
}

$store   = OAuthStore::instance('MySQL', $options);

$user_id = 1;
$store->deleteServer($ck, $user_id);
// The server description
$server = array(
    'consumer_key' => $ck,
    'consumer_secret' => $cs,
    'server_uri' => 'https://api.twitter.com/',
    'signature_methods' => array('HMAC-SHA1'),
    'request_token_uri' => 'https://api.twitter.com/oauth/request_token',
    'authorize_uri' => 'https://api.twitter.com/oauth/authorize',
    'access_token_uri' => 'https://api.twitter.com/oauth/access_token'
);

// Save the server in the the OAuthStore
$consumer_key = $store->updateServer($server, $user_id);


// Obtain a request token from the server
$token = OAuthRequester::requestRequestToken($consumer_key, $user_id);

// Callback to our (consumer) site, will be called when the user finished the authorization at the server
$callback_uri = 'http://127.0.0.1/redirect.php?consumer_key='.rawurlencode($consumer_key).'&usr_id='.intval($user_id);

// Now redirect to the autorization uri and get us authorized
if (!empty($token['authorize_uri']))
{
    // Redirect to the server, add a callback to our server
    if (strpos($token['authorize_uri'], '?'))
    {
        $uri = $token['authorize_uri'] . '&'; 
    }
    else
    {
        $uri = $token['authorize_uri'] . '?'; 
    }
    $uri .= 'oauth_token='.rawurlencode($token['token']).'&oauth_callback='.rawurlencode($callback_uri);
}
else
{
    // No authorization uri, assume we are authorized, exchange request token for access token
   $uri = $callback_uri . '&oauth_token='.rawurlencode($token['token']);
}

header('Location: '.$uri);
exit();

?>