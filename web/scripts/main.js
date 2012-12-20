function twitterConnect(){
	window.open('https://api.twitter.com/oauth/authenticate?oauth_callback=http%3A%2F%2Flocalhost%2Fredirect.php&oauth_token='+TwitterAccessToken,'twitter connect','width=800,height=300');
}
function twitterConnectSuccess(token){
	$('#twitter-button').replaceWith($('<span>signed in</span>'));
	TwitterOAuthToken=token;
	$.cookie('TwitterOAuthToken',TwitterOAuthToken);
}
function createSession(){
	$.ajax({
		url:'/socailtalk/TokLive/web/php/getSession.php',
		success:function(d){
			console.log(d);
			var result=JSON.parse(d).result;
			TokLiveSession=result.sessionId;
			TokLiveToken=result.token;
			$('#create-chartroom').html('you are in chartroom');
			loadVideoWindow();
		}
	})
}
function loadVideoWindow(){
	var apiKey = '22095912';
	var session = TB.initSession(TokLiveSession);
	setTimeout(function(){
		$('#share-url').val('http://www.cambridgesolutions.net/socailtalk/TokLive/web/index.php?sessionId='+TokLiveSession);
	},5000);
	session.addEventListener('sessionConnected', sessionConnectedHandler);
	session.addEventListener('streamCreated', streamCreatedHandler);		
	session.connect(apiKey, TokLiveToken);
	function sessionConnectedHandler(event) {
		var publishProps = {height:400, width:600};
		publisher = TB.initPublisher(apiKey, 'video-window', publishProps);
		session.publish(publisher);
		subscribeToStreams(event.streams);
	}
	function streamCreatedHandler(event) {
	      // Subscribe to any new streams that are created
	      subscribeToStreams(event.streams);
	    }
		function subscribeToStreams(streams) {
		      for (var i = 0; i < streams.length; i++) {
		        // Make sure we don't subscribe to ourself
		        if (streams[i].connection.connectionId == session.connection.connectionId) {
		          return;
		        }

		        // Create the div to put the subscriber element in to
		        var div = $('<div></div>').addClass('extra-video').attr('id',streams[i].streamId).appendTo($('.right'));

		        // Subscribe to the stream
		        session.subscribe(streams[i], div.attr('id'));
		      }
		    }
}

function endVideo(){
	$('.right>div').html("<img id='video-window' src='http://placehold.it/600x450&text=Video'>");
}
$.cookie = function(key, value, options) {

	// key and at least value given, set cookie...
	if (arguments.length > 1 && (!/Object/.test(Object.prototype.toString.call(value)) || value === null || value === undefined)) {
		options = $.extend({}, options);

		if (value === null || value === undefined) {
			options.expires = -1;
		}

		if (typeof options.expires === 'number') {
			var days = options.expires, t = options.expires = new Date();
			t.setDate(t.getDate() + days);
		}

		value = String(value);

		return (document.cookie = [ encodeURIComponent(key), '=', options.raw ? value : encodeURIComponent(value), options.expires ? '; expires=' + options.expires.toUTCString() : '', options.path ? '; path=' + options.path : '',
				options.domain ? '; domain=' + options.domain : '', options.secure ? '; secure' : '' ].join(''));
	}

	// key and possibly options given, get cookie...
	options = value || {};
	var decode = options.raw ? function(s) {
		return s;
	} : decodeURIComponent;

	var pairs = document.cookie.split('; ');
	for ( var i = 0, pair; pair = pairs[i] && pairs[i].split('='); i++) {
		if (decode(pair[0]) === key)
			return decode(pair[1] || ''); // IE saves cookies with empty
		// string as "c; ", e.g. without "="
		// as opposed to EOMB, thus pair[1]
		// may be undefined
	}
	return null;
};