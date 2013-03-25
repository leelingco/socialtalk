<div id='container'></div>
<script>
var sessionId='{php}echo $_SESSION['session_id'];{/php}';
</script>
{literal}
<script>
	
	function getURLParameter(name) {
	    return decodeURI(
	        (RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1]
	    );
	}

	function loadVideoWindow(sessionId,token){
		var apiKey = '22095912';
		var session = TB.initSession(sessionId);
		session.addEventListener('sessionConnected', sessionConnectedHandler);
		session.addEventListener('streamCreated', streamCreatedHandler);		
		session.connect(apiKey, token);
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
				console.log(streams.length);
			      for (var i = 0; i < streams.length; i++) {
			        // Make sure we don't subscribe to ourself
			        if (streams[i].connection.connectionId == session.connection.connectionId) {
			          return;
			        }

			        // Create the div to put the subscriber element in to
					var div=document.createElement('div');
					div.className='extra-video';
					div.id=streams[i].streamId;
					document.getElementById('container').appendChild(div);
			        //var div = $('<div></div>').addClass('extra-video').attr('id',).appendTo($('#container'));

			        // Subscribe to the stream
			        session.subscribe(streams[i], streams[i].streamId);
			      }
			    }
	}

	if(getURLParameter('view_unit')!=null){
		document.getElementById('container').innerHTML="<div style='width:600px;height:400px;float:left'><img id='video-window' src='http://placehold.it/600x450&text=Video'></div>";
		$.ajax({
			url:'/socialtalk/web/php/GetSession.php?sessionId='+sessionId,
			dataType:'json',
			success:function(d){
				var token=d.result.token;
				loadVideoWindow(sessionId,token);
			}
		})
	}
</script>
{/literal}