<?php

require_once '../web/php/Opentok-PHP-SDK/OpenTokSDK.php';
require_once '../web/php/Opentok-PHP-SDK/OpenTokArchive.php';
require_once '../web/php/Opentok-PHP-SDK/OpenTokSession.php';
require_once '../web/php/Zend/Json.php';

class LessonVideoSession
{
   public $sessionId = "";
   public $token = "";

   function __construct($lesson) {
        if ($lesson instanceof EfrontLesson) {
            $lessonId = $lesson -> lesson['id'];
        } elseif (!eF_checkParameter($lesson, 'id')) {
            throw new EfrontContentException(_INVALIDLESSONID.': '.$lesson, EfrontContentException :: INVALID_ID);
        } else {
            $lessonId = $lesson;
        }

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

        $this -> sessionId = $sessionId;
        $this -> token = $token;
    }
}

?>

