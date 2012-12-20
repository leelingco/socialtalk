<?php

	require_once 'Opentok-PHP-SDK/OpenTokSDK.php';
	require_once 'Opentok-PHP-SDK/OpenTokArchive.php';
	require_once 'Opentok-PHP-SDK/OpenTokSession.php';
	require_once 'Zend/Json.php';

	
	$ip=$_SERVER['REMOTE_ADDR'];
	
	$partnerId = '22095912';
	$partnerSecret = '70fcebd9639ff4d8e3c1c4d37a70867c0be35a23';

	$apiObj = new OpenTokSDK($partnerId, $partnerSecret);

	if($_REQUEST['sessionId']) {
		$sessionId = $_REQUEST['sessionId'];
		$token = $apiObj->generateToken($sessionId);
	} else {
		$sessionId = $apiObj->create_session($_SERVER["REMOTE_ADDR"]);
		$token = $apiObj->generateToken($sessionId);
	}
	// need to use Zend library because php is ver 5.1.6
?>

