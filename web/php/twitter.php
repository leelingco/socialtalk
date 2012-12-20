<?php
include_once "oauth-php/library/OAuthStore.php";
include_once "oauth-php/library/OAuthRequester.php";
$command=$_POST['command'];
$user_id=1;
switch ($command){
	case 'friends':
	$req = new OAuthRequester( 'https://api.twitter.com/1.1/friends/list.json', 'GET');
	break;
	case 'message':
	$params = array( 'text'=> $_POST['text'], 'user_id'=> $_POST['user_id']);
	$req = new OAuthRequester('https://api.twitter.com/1.1/direct_messages/new.json', 'POST', $params);
	break;
}


// Parameters, appended to the request depending on the request method.
// Will become the POST body or the GET query string.


// Obtain a request object for the request we want to make


// Sign the request, perform a curl request and return the results, throws OAuthException exception on an error
$result = $req->doRequest($user_id);
print_r($result['body']);
?>