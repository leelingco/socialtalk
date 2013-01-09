<?php
$command=$_GET['command'];
$token=$_GET['token'];
$ch = curl_init();
$url;
switch ($command){
	case 'friends':
	$url='https://api.twitter.com/1.1/friends/ids.json';
	break;	
}
curl_setopt( $ch, CURLOPT_URL, $url );
$content = curl_exec( $ch );
curl_close ( $ch );
echo $content;
?>