<div id="fb-root"></div>
		<div class='container stage'>
			<span class='title'>Cambridge</span>
			<span class='sub-title'>solutions</span>
			<ul class="nav">
				<li><a href="index.php">Home</a></li>
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
						<li><img src="images/circle-3.png" alt="3" class='step-image'><a>send the invite</a><span id='twitter-invite-to'></span><br/><textarea id='share-url'></textarea><button class='button' id='send-invite' onclick='sendTwitterInvite()'>Send</button>
							<div id='sendTwitterInviteSuccess'></div></li>
				</div>
				<div class='right'><div style='width:600px;height:400px;float:left'><img id='video-window' src="http://placehold.it/600x450&text=Video"></div>				
			</div>
		</div>
