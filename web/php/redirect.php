<?// Request parameters are oauth_token, consumer_key and usr_id.
include_once "oauth-php/library/OAuthStore.php";
include_once "oauth-php/library/OAuthRequester.php";

$serverHost= $_SERVER['HTTP_HOST'];
if($serverHost=='127.0.0.1'){
	$options = array('server' => '127.0.0.1', 'username' => 'root',
	                 'password' => '',  'database' => 'test');
	$consumer_key = 'pxAhOddHpARGQcqfyEu3Q';
}else{
	$options = array('server' => 'mysql.cambridgesolutions.net', 'username' => 'toklive',
	                 'password' => '0fferpal',  'database' => 'toklive');
	$consumer_key='I6mfCEfoJrC7Yxgi6sv2g';
}

$oauth_token = $_GET['oauth_token'];
$user_id = $_GET['usr_id'];
$user_id=1;

try
{
    OAuthRequester::requestAccessToken($consumer_key, $oauth_token, $user_id,'POST',$options);
}
catch (OAuthException $e)
{
    echo $e;
}
?>
<script>
	window.opener.twitterConnectSuccess();
	setTimeout(function(){window.close();},500);
</script>