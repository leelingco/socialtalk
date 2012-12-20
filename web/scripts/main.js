function twitterConnect(){
	window.open('/socailtalk/TokLive/web/php/twitterOauth.php','twitter connect','width=800,height=300');
}
function twitterConnectSuccess(){
	$.ajax({
		url:'/socailtalk/TokLive/web/php/twitter.php',
		type:'POST',
		data:'command=friends',
		dataType:'json',
		success:function(d){
			var users=d.users;
			var con=$('<ul></ul>').appendTo($('#twitter-section').html(''));
			for(var i in users){
				var u=users[i];
				var li=$('<li user_id="'+u.id+'"><img class="twitter-profile" src="'+u.profile_background_image_url+'"><div class="twitter-metas"><span>'+u.name+'</span><br/><span>'+u.location+'</span></div></li>').appendTo(con);
				li.click(function(){
					var me=$(this);
					con.find('.active').removeClass('active');
					me.addClass('active');
					$('#twitter-invite-to').html(' to '+me.find('span:first').html());
				})
			}
		}
	})
}
function sendTwitterInvite(){
	var text=$('#share-url').val();
	var user_id=$('#twitter-section ul li.active').attr('user_id');
	$.ajax({
		url:'/socailtalk/TokLive/web/php/twitter.php',
		type:'POST',
		data:'command=message&text='+escape(text)+'&user_id='+user_id,
		dataType:'json',
		success:function(d){
			console.log(d);
		}
	})
}
function createSession(){
	$.ajax({
		url:'/socailtalk/TokLive/web/php/GetSession.php',
		success:function(d){
			var result=JSON.parse(d).result;
			TokLiveSession=result.sessionId;
			TokLiveToken=result.token;
			$('#create-chartroom').html('leave chartroom').removeAttr('onclick').unbind('click').click(function(){
				endVideo();
			});
			loadVideoWindow();
		}
	})
}
function loadVideoWindow(){
	var apiKey = '22095912';
	var session = TB.initSession(TokLiveSession);
	setTimeout(function(){
		$('#share-url').val('hey, join me at http://www.cambridgesolutions.net/socailtalk/TokLive/web/index.php?sessionId='+TokLiveSession);
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
	$('#create-chartroom').html('create a chartroom').unbind('click').click(function(){
		createSession();
	});
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