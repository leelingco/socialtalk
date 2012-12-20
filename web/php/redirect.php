<?php
echo $_GET["oauth_token"];
echo $_GET["oauth_verifier"];
?>
<script>
	window.opener.twitterConnectSuccess('<?php echo $_GET["oauth_token"];?>');
	//setTimeout(function(){window.close();},500);
</script>