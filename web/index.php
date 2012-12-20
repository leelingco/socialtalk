<!DOCTYPE html>
<html>
	<head>
		<title>Cambridge Solutions</title>
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
		<link type="text/css" href="styles/main.css" rel="stylesheet" media="all" >
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
		<script type="text/javascript" src="http://staging.tokbox.com/v0.91/js/TB.min.js"></script>
		<script type="text/javascript" src="scripts/swfobject.js"></script>
		<script type="text/javascript" src="scripts/toklive_config.js"></script>
		<!--<script type="text/javascript" src="scripts/toklive.js"></script>-->
		<script type="text/javascript" src="scripts/main.js"></script>		
	</head>
	<body>
		<div id="fb-root"></div>
		<script>
		var TwitterAccessToken;
		var TwitterOAuthToken=$.cookie('TwitterOAuthToken');
		var TokLiveSession='<?php echo $sessionId;?>';
		var TokLiveToken='<?php echo $token;?>';
		function login() {
		    FB.login(function(response) {
		        if (response.authResponse) {
		            // connected
		        } else {
		            // cancelled
		        }
		    });
		}
		
		  // Additional JS functions here
		  window.fbAsyncInit = function() {
		    FB.init({
		      appId      : '254136658048292', // App ID
		      channelUrl : '//localhost/socailtalk/channel.html', // Channel File
		      status     : true, // check login status
		      cookie     : true, // enable cookies to allow the server to access the session
		      xfbml      : true  // parse XFBML
		    });
				
		    // Additional init code here
			FB.getLoginStatus(function(response) {
			  if (response.status === 'connected') {
			    // connected
			  } else if (response.status === 'not_authorized') {
			    // not_authorized
			login();
			  } else {
			    // not_logged_in
			login();
			  }
			 });
		  };
		  // Load the SDK Asynchronously
		  (function(d){
		     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
		     if (d.getElementById(id)) {return;}
		     js = d.createElement('script'); js.id = id; js.async = true;
		     js.src = "//connect.facebook.net/en_US/all.js";
		     ref.parentNode.insertBefore(js, ref);
		   }(document));
		
		</script>
		<div class='container stage'>
			<span class='title'>Cambridge</span>
			<span class='sub-title'>solutions</span>
			<ul class="nav">
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="shortcodes.html">Features</a> </li>
				<li class="active"><a href="shortcodes.html">Chat Now!</a> </li>
			</ul>
			<div class='content'>
				<div class='left'>
					<a class='switch active'>Twitter</a><a class='switch'>Facebook</a>
					<ul class='steps'>
						<li><img src="images/circle-1.png" alt="1" class='step-image'><a></a><button onclick='createSession()' id='create-chartroom'>create a chatroom</button></button></li>
						<li id='twitter-section'><img src="images/circle-2.png" alt="2" class='step-image'><img src='images/sign-in-with-twitter-gray.png' id='twitter-button' style='width:158px;height:28px' onclick='twitterConnect()'></li>
						<li><img src="images/circle-3.png" alt="3" class='step-image'><a>send the invite</a><span id='twitter-invite-to'></span><br/><textarea id='share-url'></textarea><span class='button' id='send-invite' onclick='sendTwitterInvite()'>Send</span></li>
				</div>
				<div class='right'><div style='width:600px;height:400px;float:left'><img id='video-window' src="http://placehold.it/600x450&text=Video"></div>				
			</div>
		</div>
		<script>

		</script>
	</body>
</html>
