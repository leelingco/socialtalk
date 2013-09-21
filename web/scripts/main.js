function twitterConnect(){
	window.open('/socialtalk/web/php/twitterOauth.php','twitter connect','width=800,height=300');
}
function twitterConnectSuccess(){
	$.ajax({
		url:'/socialtalk/web/php/twitter.php',
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
		},
		error:function(d){
			d={
			  "previous_cursor": 0,
			  "previous_cursor_str": "0",
			  "next_cursor": 1333504313713126852,
			  "users": [
			    {
			      "profile_sidebar_fill_color": "252429",
			      "profile_sidebar_border_color": "181A1E",
			      "profile_background_tile": false,
			      "name": "Sylvain Carle",
			      "profile_image_url": "http://a0.twimg.com/profile_images/2838630046/4b82e286a659fae310012520f4f756bb_normal.png",
			      "created_at": "Thu Jan 18 00:10:45 +0000 2007",
			      "location": "San Francisco",
			      "follow_request_sent": false,
			      "profile_link_color": "2FC2EF",
			      "is_translator": false,
			      "id_str": "657693",
			      "default_profile": false,
			      "contributors_enabled": true,
			      "favourites_count": 1973,
			      "url": "http://afroginthevalley.com/",
			      "profile_banner_url": "https://si0.twimg.com/profile_banners/657693/1353537845",
			      "profile_image_url_https": "https://si0.twimg.com/profile_images/2838630046/4b82e286a659fae310012520f4f756bb_normal.png",
			      "utc_offset": -18000,
			      "id": 657693,
			      "profile_use_background_image": true,
			      "listed_count": 324,
			      "profile_text_color": "666666",
			      "lang": "en",
			      "followers_count": 4993,
			      "protected": false,
			      "notifications": false,
			      "profile_background_image_url_https": "https://si0.twimg.com/images/themes/theme9/bg.gif",
			      "profile_background_color": "1A1B1F",
			      "verified": false,
			      "geo_enabled": true,
			      "time_zone": "Eastern Time (US & Canada)",
			      "description": "Developer Advocate at Twitter.\r\n\r\nInternet, opensource, media & geo/local geek.\r\n\r\nFollow @sylvain for LANG=FR.",
			      "default_profile_image": false,
			      "profile_background_image_url": "http://a0.twimg.com/images/themes/theme9/bg.gif",
			      "statuses_count": 8504,
			      "friends_count": 2743,
			      "following": true,
			      "screen_name": "froginthevalley"
			    },
			    {
			      "profile_sidebar_fill_color": "DDEEF6",
			      "profile_sidebar_border_color": "C0DEED",
			      "profile_background_tile": true,
			      "name": "Site Streams Beta",
			      "profile_image_url": "http://a0.twimg.com/profile_images/2284174702/1tyzesnfmqhqsl4xuf5a_normal.png",
			      "created_at": "Fri Aug 27 18:04:38 +0000 2010",
			      "location": "San Francisco, CA",
			      "follow_request_sent": false,
			      "profile_link_color": "0084B4",
			      "is_translator": false,
			      "id_str": "183709371",
			      "default_profile": false,
			      "contributors_enabled": true,
			      "favourites_count": 0,
			      "url": "http://twitter.com",
			      "profile_banner_url": "https://si0.twimg.com/profile_banners/183709371/1347395034",
			      "profile_image_url_https": "https://si0.twimg.com/profile_images/2284174702/1tyzesnfmqhqsl4xuf5a_normal.png",
			      "utc_offset": null,
			      "id": 183709371,
			      "profile_use_background_image": true,
			      "listed_count": 195,
			      "profile_text_color": "333333",
			      "lang": "en",
			      "followers_count": 9732,
			      "protected": false,
			      "notifications": false,
			      "profile_background_image_url_https": "https://si0.twimg.com/profile_background_images/656938621/vvhperynuny1q6em9i7k.png",
			      "profile_background_color": "C0DEED",
			      "verified": true,
			      "geo_enabled": false,
			      "time_zone": null,
			      "description": "This account is no longer in use.  Please see @twitterapi for announcements about the Sitestreams API.",
			      "default_profile_image": false,
			      "profile_background_image_url": "http://a0.twimg.com/profile_background_images/656938621/vvhperynuny1q6em9i7k.png",
			      "statuses_count": 178,
			      "friends_count": 5,
			      "following": true,
			      "screen_name": "sitestreams"
			    },
			    {
			      "profile_sidebar_fill_color": "C7E0FF",
			      "profile_sidebar_border_color": "FFFFFF",
			      "profile_background_tile": true,
			      "name": "Arne Roomann-Kurrik",
			      "profile_image_url": "http://a0.twimg.com/profile_images/24229162/arne001_normal.jpg",
			      "created_at": "Thu Jul 19 15:58:07 +0000 2007",
			      "location": "Scan Francesco",
			      "follow_request_sent": false,
			      "profile_link_color": "0084B4",
			      "is_translator": false,
			      "id_str": "7588892",
			      "default_profile": false,
			      "contributors_enabled": false,
			      "favourites_count": 798,
			      "url": "http://start.roomanna.com",
			      "profile_banner_url": "https://si0.twimg.com/profile_banners/7588892/1347312754",
			      "profile_image_url_https": "https://si0.twimg.com/profile_images/24229162/arne001_normal.jpg",
			      "utc_offset": -28800,
			      "id": 7588892,
			      "profile_use_background_image": true,
			      "listed_count": 172,
			      "profile_text_color": "000000",
			      "lang": "en",
			      "followers_count": 3876,
			      "protected": false,
			      "notifications": false,
			      "profile_background_image_url_https": "https://si0.twimg.com/profile_background_images/342542280/background7.png",
			      "profile_background_color": "8FC1FF",
			      "verified": false,
			      "geo_enabled": true,
			      "time_zone": "Pacific Time (US & Canada)",
			      "description": "Developer Advocate at Twitter, practitioner of dark sandwich arts. ",
			      "default_profile_image": false,
			      "profile_background_image_url": "http://a0.twimg.com/profile_background_images/342542280/background7.png",
			      "statuses_count": 3245,
			      "friends_count": 589,
			      "following": true,
			      "screen_name": "kurrik"
			    },
			    {
			      "profile_sidebar_fill_color": "252429",
			      "profile_sidebar_border_color": "FFFFFF",
			      "profile_background_tile": true,
			      "name": "Sean Cook",
			      "profile_image_url": "http://a0.twimg.com/profile_images/2757776645/23872cfcee4dc7279facb8fb0a6cb559_normal.png",
			      "created_at": "Sat May 09 17:58:22 +0000 2009",
			      "location": "San Francisco",
			      "follow_request_sent": false,
			      "profile_link_color": "2FC2EF",
			      "is_translator": false,
			      "id_str": "38895958",
			      "default_profile": false,
			      "contributors_enabled": true,
			      "favourites_count": 698,
			      "url": null,
			      "profile_banner_url": "https://si0.twimg.com/profile_banners/38895958/1346803787",
			      "profile_image_url_https": "https://si0.twimg.com/profile_images/2757776645/23872cfcee4dc7279facb8fb0a6cb559_normal.png",
			      "utc_offset": -28800,
			      "id": 38895958,
			      "profile_use_background_image": false,
			      "listed_count": 198,
			      "profile_text_color": "666666",
			      "lang": "en",
			      "followers_count": 11191,
			      "protected": false,
			      "notifications": false,
			      "profile_background_image_url_https": "https://si0.twimg.com/profile_background_images/495742332/purty_wood.png",
			      "profile_background_color": "42454B",
			      "verified": false,
			      "geo_enabled": true,
			      "time_zone": "Pacific Time (US & Canada)",
			      "description": "I taught your phone that thing you like.  The Mobile Partner Engineer @Twitter. ",
			      "default_profile_image": false,
			      "profile_background_image_url": "http://a0.twimg.com/profile_background_images/495742332/purty_wood.png",
			      "statuses_count": 2909,
			      "friends_count": 1217,
			      "following": true,
			      "screen_name": "theSeanCook"
			    },
			    {
			      "profile_sidebar_fill_color": "C0DFEC",
			      "profile_sidebar_border_color": "FFFFFF",
			      "profile_background_tile": true,
			      "name": "Ian Chan",
			      "profile_image_url": "http://a0.twimg.com/profile_images/2467844172/image_normal.jpg",
			      "created_at": "Thu Mar 05 06:42:32 +0000 2009",
			      "location": "Toronto ✈ San Francisco",
			      "follow_request_sent": false,
			      "profile_link_color": "0084B4",
			      "is_translator": true,
			      "id_str": "22891211",
			      "default_profile": false,
			      "contributors_enabled": true,
			      "favourites_count": 3267,
			      "url": "http://chanian.com",
			      "profile_banner_url": "https://si0.twimg.com/profile_banners/22891211/1348559711",
			      "profile_image_url_https": "https://si0.twimg.com/profile_images/2467844172/image_normal.jpg",
			      "utc_offset": -18000,
			      "id": 22891211,
			      "profile_use_background_image": true,
			      "listed_count": 186,
			      "profile_text_color": "333333",
			      "lang": "en",
			      "followers_count": 7356,
			      "protected": false,
			      "notifications": false,
			      "profile_background_image_url_https": "https://si0.twimg.com/profile_background_images/663303208/kpzmxbnwvxk9cfr7hpdw.png",
			      "profile_background_color": "022330",
			      "verified": false,
			      "geo_enabled": true,
			      "time_zone": "Eastern Time (US & Canada)",
			      "description": "Canadian, UofT Alumn, Platform Engineer for @twitter, poker player.",
			      "default_profile_image": false,
			      "profile_background_image_url": "http://a0.twimg.com/profile_background_images/663303208/kpzmxbnwvxk9cfr7hpdw.png",
			      "statuses_count": 6892,
			      "friends_count": 622,
			      "following": true,
			      "screen_name": "chanian"
			    },
			    {
			      "profile_sidebar_fill_color": "000B17",
			      "profile_sidebar_border_color": "F7B565",
			      "profile_background_tile": false,
			      "name": "akashgarg",
			      "profile_image_url": "http://a0.twimg.com/profile_images/1800189528/image1328232461_normal.png",
			      "created_at": "Fri Sep 21 18:23:07 +0000 2007",
			      "location": "San Francisco",
			      "follow_request_sent": false,
			      "profile_link_color": "448668",
			      "is_translator": false,
			      "id_str": "9019482",
			      "default_profile": false,
			      "contributors_enabled": false,
			      "favourites_count": 57,
			      "url": "http://www.linkedin.com/in/akashdgarg",
			      "profile_banner_url": "https://si0.twimg.com/profile_banners/9019482/1348061531",
			      "profile_image_url_https": "https://si0.twimg.com/profile_images/1800189528/image1328232461_normal.png",
			      "utc_offset": -28800,
			      "id": 9019482,
			      "profile_use_background_image": false,
			      "listed_count": 120,
			      "profile_text_color": "004358",
			      "lang": "en",
			      "followers_count": 2649,
			      "protected": false,
			      "notifications": false,
			      "profile_background_image_url_https": "https://si0.twimg.com/profile_background_images/378356748/x56a919dd9dbd34581a3f162af04a4e8.jpg",
			      "profile_background_color": "001329",
			      "verified": false,
			      "geo_enabled": true,
			      "time_zone": "Pacific Time (US & Canada)",
			      "description": "Director of Engineering, Growth Team @ Twitter",
			      "default_profile_image": false,
			      "profile_background_image_url": "http://a0.twimg.com/profile_background_images/378356748/x56a919dd9dbd34581a3f162af04a4e8.jpg",
			      "statuses_count": 462,
			      "friends_count": 1445,
			      "following": true,
			      "screen_name": "akashgarg"
			    },
			    {
			      "profile_sidebar_fill_color": "C0DFEC",
			      "profile_sidebar_border_color": "A8C7F7",
			      "profile_background_tile": false,
			      "name": "Ben Ward",
			      "profile_image_url": "http://a0.twimg.com/profile_images/1409204408/2011_normal.png",
			      "created_at": "Mon Nov 13 13:39:24 +0000 2006",
			      "location": "San Francisco, CA",
			      "follow_request_sent": false,
			      "profile_link_color": "0084B4",
			      "is_translator": true,
			      "id_str": "12249",
			      "default_profile": false,
			      "contributors_enabled": false,
			      "favourites_count": 16749,
			      "url": "http://benward.me",
			      "profile_banner_url": "https://si0.twimg.com/profile_banners/12249/1348598804",
			      "profile_image_url_https": "https://si0.twimg.com/profile_images/1409204408/2011_normal.png",
			      "utc_offset": -28800,
			      "id": 12249,
			      "profile_use_background_image": true,
			      "listed_count": 388,
			      "profile_text_color": "333333",
			      "lang": "en",
			      "followers_count": 7982,
			      "protected": false,
			      "notifications": false,
			      "profile_background_image_url_https": "https://si0.twimg.com/profile_background_images/637103983/474kwsozag6mi0hkvwmo.jpeg",
			      "profile_background_color": "022330",
			      "verified": false,
			      "geo_enabled": true,
			      "time_zone": "Pacific Time (US & Canada)",
			      "description": "Frontend software engineer at @twitter, purveyor of shitty puns everywhere, @benwwward and @thepastrybox writer, @microformats community admin. Bit of a whiner.",
			      "default_profile_image": false,
			      "profile_background_image_url": "http://a0.twimg.com/profile_background_images/637103983/474kwsozag6mi0hkvwmo.jpeg",
			      "statuses_count": 15542,
			      "friends_count": 588,
			      "following": true,
			      "screen_name": "BenWard"
			    },
			    {
			      "profile_sidebar_fill_color": "F0F0F0",
			      "profile_sidebar_border_color": "000000",
			      "profile_background_tile": false,
			      "name": "Kenneth P Kufluk",
			      "profile_image_url": "http://a0.twimg.com/profile_images/2734520194/9e5843b95abce47b7056b17ce7bbc18f_normal.png",
			      "created_at": "Thu Mar 05 13:05:04 +0000 2009",
			      "location": "San Francisco, California",
			      "follow_request_sent": false,
			      "profile_link_color": "333333",
			      "is_translator": false,
			      "id_str": "22915745",
			      "default_profile": false,
			      "contributors_enabled": false,
			      "favourites_count": 1280,
			      "url": "http://kenneth.kufluk.com",
			      "profile_banner_url": "https://si0.twimg.com/profile_banners/22915745/1353469520",
			      "profile_image_url_https": "https://si0.twimg.com/profile_images/2734520194/9e5843b95abce47b7056b17ce7bbc18f_normal.png",
			      "utc_offset": -28800,
			      "id": 22915745,
			      "profile_use_background_image": true,
			      "listed_count": 62,
			      "profile_text_color": "333333",
			      "lang": "en",
			      "followers_count": 3925,
			      "protected": false,
			      "notifications": false,
			      "profile_background_image_url_https": "https://si0.twimg.com/profile_background_images/173989056/silly_twitter_bg.jpg",
			      "profile_background_color": "161712",
			      "verified": false,
			      "geo_enabled": true,
			      "time_zone": "Pacific Time (US & Canada)",
			      "description": "The neth is essential.",
			      "default_profile_image": false,
			      "profile_background_image_url": "http://a0.twimg.com/profile_background_images/173989056/silly_twitter_bg.jpg",
			      "statuses_count": 10009,
			      "friends_count": 222,
			      "following": true,
			      "screen_name": "kpk"
			    },
			    {
			      "profile_sidebar_fill_color": "F6F6F6",
			      "profile_sidebar_border_color": "FFFFFF",
			      "profile_background_tile": false,
			      "name": "Seth Bindernagel",
			      "profile_image_url": "http://a0.twimg.com/profile_images/2867434205/c5bf4196b723e7d0494bd4b5ccf79346_normal.jpeg",
			      "created_at": "Thu Mar 15 21:49:02 +0000 2007",
			      "location": "San Francisco, CA",
			      "follow_request_sent": false,
			      "profile_link_color": "FF3300",
			      "is_translator": false,
			      "id_str": "1249881",
			      "default_profile": false,
			      "contributors_enabled": true,
			      "favourites_count": 278,
			      "url": null,
			      "profile_banner_url": "https://si0.twimg.com/profile_banners/1249881/1348078082",
			      "profile_image_url_https": "https://si0.twimg.com/profile_images/2867434205/c5bf4196b723e7d0494bd4b5ccf79346_normal.jpeg",
			      "utc_offset": -28800,
			      "id": 1249881,
			      "profile_use_background_image": true,
			      "listed_count": 82,
			      "profile_text_color": "333333",
			      "lang": "en",
			      "followers_count": 3341,
			      "protected": false,
			      "notifications": false,
			      "profile_background_image_url_https": "https://si0.twimg.com/profile_background_images/698916047/dcd323b0502e46e4d3a337caf8694aef.jpeg",
			      "profile_background_color": "709397",
			      "verified": false,
			      "geo_enabled": true,
			      "time_zone": "Pacific Time (US & Canada)",
			      "description": "I work for Twitter and I love Cleveland Sports. https://about.me/binder",
			      "default_profile_image": false,
			      "profile_background_image_url": "http://a0.twimg.com/profile_background_images/698916047/dcd323b0502e46e4d3a337caf8694aef.jpeg",
			      "statuses_count": 1863,
			      "friends_count": 690,
			      "following": true,
			      "screen_name": "binder"
			    },
			    {
			      "profile_sidebar_fill_color": "A0C5C7",
			      "profile_sidebar_border_color": "86A4A6",
			      "profile_background_tile": false,
			      "name": "Jason Costa",
			      "profile_image_url": "http://a0.twimg.com/profile_images/1751674923/new_york_beard_normal.jpg",
			      "created_at": "Wed May 28 00:20:15 +0000 2008",
			      "location": "",
			      "follow_request_sent": false,
			      "profile_link_color": "FF3300",
			      "is_translator": true,
			      "id_str": "14927800",
			      "default_profile": false,
			      "contributors_enabled": false,
			      "favourites_count": 1053,
			      "url": "http://www.jason-costa.blogspot.com/",
			      "profile_image_url_https": "https://si0.twimg.com/profile_images/1751674923/new_york_beard_normal.jpg",
			      "utc_offset": -28800,
			      "id": 14927800,
			      "profile_use_background_image": true,
			      "listed_count": 161,
			      "profile_text_color": "333333",
			      "lang": "en",
			      "followers_count": 11874,
			      "protected": false,
			      "notifications": false,
			      "profile_background_image_url_https": "https://si0.twimg.com/images/themes/theme6/bg.gif",
			      "profile_background_color": "709397",
			      "verified": false,
			      "geo_enabled": true,
			      "time_zone": "Pacific Time (US & Canada)",
			      "description": "Platform at Twitter",
			      "default_profile_image": false,
			      "profile_background_image_url": "http://a0.twimg.com/images/themes/theme6/bg.gif",
			      "statuses_count": 5745,
			      "friends_count": 175,
			      "following": true,
			      "screen_name": "jasoncosta"
			    },
			    {
			      "profile_sidebar_fill_color": "FEFEFE",
			      "profile_sidebar_border_color": "000000",
			      "profile_background_tile": true,
			      "name": "Connor Sears",
			      "profile_image_url": "http://a0.twimg.com/profile_images/2659620048/aca7116831caaeb410b8b98be63c8874_normal.jpeg",
			      "created_at": "Mon Mar 19 16:19:32 +0000 2007",
			      "location": "Palo Alto",
			      "follow_request_sent": false,
			      "profile_link_color": "0084B4",
			      "is_translator": false,
			      "id_str": "1523501",
			      "default_profile": false,
			      "contributors_enabled": false,
			      "favourites_count": 2716,
			      "url": "http://connorsears.com",
			      "profile_banner_url": "https://si0.twimg.com/profile_banners/1523501/1351629702",
			      "profile_image_url_https": "https://si0.twimg.com/profile_images/2659620048/aca7116831caaeb410b8b98be63c8874_normal.jpeg",
			      "utc_offset": -28800,
			      "id": 1523501,
			      "profile_use_background_image": true,
			      "listed_count": 81,
			      "profile_text_color": "333333",
			      "lang": "en",
			      "followers_count": 3055,
			      "protected": false,
			      "notifications": false,
			      "profile_background_image_url_https": "https://si0.twimg.com/profile_background_images/698065178/00ca3a67587ddb2792d9b05a45cf42b1.jpeg",
			      "profile_background_color": "262626",
			      "verified": false,
			      "geo_enabled": true,
			      "time_zone": "Pacific Time (US & Canada)",
			      "description": "Co-creator of Ratchet (@GoRatchet). Product Designer formerly at Twitter. I bless the rains down in Africa.",
			      "default_profile_image": false,
			      "profile_background_image_url": "http://a0.twimg.com/profile_background_images/698065178/00ca3a67587ddb2792d9b05a45cf42b1.jpeg",
			      "statuses_count": 3992,
			      "friends_count": 195,
			      "following": true,
			      "screen_name": "connors"
			    },
			    {
			      "profile_sidebar_fill_color": "C5DAE9",
			      "profile_sidebar_border_color": "777777",
			      "profile_background_tile": false,
			      "name": "Arnaud Meunier",
			      "profile_image_url": "http://a0.twimg.com/profile_images/1374353291/image_normal.jpg",
			      "created_at": "Mon Mar 02 22:53:50 +0000 2009",
			      "location": "San Francisco, CA",
			      "follow_request_sent": false,
			      "profile_link_color": "21759B",
			      "is_translator": true,
			      "id_str": "22548447",
			      "default_profile": false,
			      "contributors_enabled": false,
			      "favourites_count": 108,
			      "url": "http://twitoaster.com",
			      "profile_banner_url": "https://si0.twimg.com/profile_banners/22548447/1348188118",
			      "profile_image_url_https": "https://si0.twimg.com/profile_images/1374353291/image_normal.jpg",
			      "utc_offset": -28800,
			      "id": 22548447,
			      "profile_use_background_image": false,
			      "listed_count": 944,
			      "profile_text_color": "555555",
			      "lang": "en",
			      "followers_count": 22315,
			      "protected": false,
			      "notifications": false,
			      "profile_background_image_url_https": "https://si0.twimg.com/profile_background_images/107336160/twitter-background-twitoaster.png",
			      "profile_background_color": "E4ECF0",
			      "verified": false,
			      "geo_enabled": true,
			      "time_zone": "Pacific Time (US & Canada)",
			      "description": "French expat. Eng manager at Twitter.",
			      "default_profile_image": false,
			      "profile_background_image_url": "http://a0.twimg.com/profile_background_images/107336160/twitter-background-twitoaster.png",
			      "statuses_count": 1926,
			      "friends_count": 325,
			      "following": true,
			      "screen_name": "rno"
			    },
			    {
			      "profile_sidebar_fill_color": "DAECF4",
			      "profile_sidebar_border_color": "C6E2EE",
			      "profile_background_tile": true,
			      "name": "Jeremy ⎋ Cloud",
			      "profile_image_url": "http://a0.twimg.com/profile_images/2785231602/3697a603c0a067328d87beb15d2b59f0_normal.jpeg",
			      "created_at": "Mon Jun 09 17:00:58 +0000 2008",
			      "location": "Somerville, MA",
			      "follow_request_sent": false,
			      "profile_link_color": "1F98C7",
			      "is_translator": false,
			      "id_str": "15062340",
			      "default_profile": false,
			      "contributors_enabled": false,
			      "favourites_count": 123,
			      "url": "http://about.me/jeremy.cloud",
			      "profile_banner_url": "https://si0.twimg.com/profile_banners/15062340/1351613822",
			      "profile_image_url_https": "https://si0.twimg.com/profile_images/2785231602/3697a603c0a067328d87beb15d2b59f0_normal.jpeg",
			      "utc_offset": -18000,
			      "id": 15062340,
			      "profile_use_background_image": true,
			      "listed_count": 96,
			      "profile_text_color": "663B12",
			      "lang": "en",
			      "followers_count": 3494,
			      "protected": false,
			      "notifications": false,
			      "profile_background_image_url_https": "https://si0.twimg.com/profile_background_images/480149151/NSTexturedFullScreenBackgroundColor.png",
			      "profile_background_color": "C6E2EE",
			      "verified": false,
			      "geo_enabled": true,
			      "time_zone": "Eastern Time (US & Canada)",
			      "description": "Former snake charmer.  Engineer at Twitter.  Father of @baby_cloud.",
			      "default_profile_image": false,
			      "profile_background_image_url": "http://a0.twimg.com/profile_background_images/480149151/NSTexturedFullScreenBackgroundColor.png",
			      "statuses_count": 1514,
			      "friends_count": 302,
			      "following": true,
			      "screen_name": "jeremycloud"
			    },
			    {
			      "profile_sidebar_fill_color": "F6FFD1",
			      "profile_sidebar_border_color": "FFFFFF",
			      "profile_background_tile": true,
			      "name": "Glen D Sanford",
			      "profile_image_url": "http://a0.twimg.com/profile_images/917780110/0629072227-00_normal.jpg",
			      "created_at": "Wed Apr 14 20:59:58 +0000 2010",
			      "location": "Alameda, CA",
			      "follow_request_sent": false,
			      "profile_link_color": "009999",
			      "is_translator": false,
			      "id_str": "133031077",
			      "default_profile": false,
			      "contributors_enabled": false,
			      "favourites_count": 38,
			      "url": "http://glen.nu",
			      "profile_banner_url": "https://si0.twimg.com/profile_banners/133031077/1351918195",
			      "profile_image_url_https": "https://si0.twimg.com/profile_images/917780110/0629072227-00_normal.jpg",
			      "utc_offset": -28800,
			      "id": 133031077,
			      "profile_use_background_image": true,
			      "listed_count": 56,
			      "profile_text_color": "333333",
			      "lang": "en",
			      "followers_count": 2680,
			      "protected": false,
			      "notifications": false,
			      "profile_background_image_url_https": "https://si0.twimg.com/profile_background_images/658791112/hxelotrdy3h7qga87mv1.jpeg",
			      "profile_background_color": "131516",
			      "verified": false,
			      "geo_enabled": true,
			      "time_zone": "Pacific Time (US & Canada)",
			      "description": "Software Engineering Manager for @twittereng, fundamentally ok guy",
			      "default_profile_image": false,
			      "profile_background_image_url": "http://a0.twimg.com/profile_background_images/658791112/hxelotrdy3h7qga87mv1.jpeg",
			      "statuses_count": 1516,
			      "friends_count": 147,
			      "following": true,
			      "screen_name": "9len"
			    },
			    {
			      "profile_sidebar_fill_color": "DDEEF6",
			      "profile_sidebar_border_color": "C0DEED",
			      "profile_background_tile": true,
			      "name": "Support",
			      "profile_image_url": "http://a0.twimg.com/profile_images/2320882833/2whv6cuhvbal751uss8u_normal.png",
			      "created_at": "Thu Dec 04 18:51:57 +0000 2008",
			      "location": "Twitter HQ",
			      "follow_request_sent": false,
			      "profile_link_color": "0084B4",
			      "is_translator": false,
			      "id_str": "17874544",
			      "default_profile": false,
			      "contributors_enabled": true,
			      "favourites_count": 45,
			      "url": "http://support.twitter.com",
			      "profile_banner_url": "https://si0.twimg.com/profile_banners/17874544/1347394418",
			      "profile_image_url_https": "https://si0.twimg.com/profile_images/2320882833/2whv6cuhvbal751uss8u_normal.png",
			      "utc_offset": -32400,
			      "id": 17874544,
			      "profile_use_background_image": true,
			      "listed_count": 11116,
			      "profile_text_color": "333333",
			      "lang": "en",
			      "followers_count": 1901267,
			      "protected": false,
			      "notifications": false,
			      "profile_background_image_url_https": "https://si0.twimg.com/profile_background_images/656929496/y6jd4l68p18hrm52f0ez.png",
			      "profile_background_color": "C0DEED",
			      "verified": true,
			      "geo_enabled": true,
			      "time_zone": "Alaska",
			      "description": "Updates from Twitter User Support. We're unable to assist with account suspension/verification.",
			      "default_profile_image": false,
			      "profile_background_image_url": "http://a0.twimg.com/profile_background_images/656929496/y6jd4l68p18hrm52f0ez.png",
			      "statuses_count": 2154,
			      "friends_count": 30,
			      "following": true,
			      "screen_name": "Support"
			    },
			    {
			      "profile_sidebar_fill_color": "DDEEF6",
			      "profile_sidebar_border_color": "C0DEED",
			      "profile_background_tile": false,
			      "name": "Matt Harris",
			      "profile_image_url": "http://a0.twimg.com/profile_images/554181350/matt_normal.jpg",
			      "created_at": "Sat Feb 17 20:49:54 +0000 2007",
			      "location": "SFO/LHR/YVR/JAX/IAD",
			      "follow_request_sent": false,
			      "profile_link_color": "0084B4",
			      "is_translator": false,
			      "id_str": "777925",
			      "default_profile": true,
			      "contributors_enabled": true,
			      "favourites_count": 235,
			      "url": "http://www.themattharris.com",
			      "profile_banner_url": "https://si0.twimg.com/profile_banners/777925/1351367661",
			      "profile_image_url_https": "https://si0.twimg.com/profile_images/554181350/matt_normal.jpg",
			      "utc_offset": -28800,
			      "id": 777925,
			      "profile_use_background_image": true,
			      "listed_count": 304,
			      "profile_text_color": "333333",
			      "lang": "en",
			      "followers_count": 8208,
			      "protected": false,
			      "notifications": false,
			      "profile_background_image_url_https": "https://si0.twimg.com/images/themes/theme1/bg.png",
			      "profile_background_color": "C0DEED",
			      "verified": false,
			      "geo_enabled": true,
			      "time_zone": "Pacific Time (US & Canada)",
			      "description": "Maybe the Nick Fury of @twitter. Married to @cindyli. Kryptonite hurts me.",
			      "default_profile_image": false,
			      "profile_background_image_url": "http://a0.twimg.com/images/themes/theme1/bg.png",
			      "statuses_count": 4551,
			      "friends_count": 433,
			      "following": true,
			      "screen_name": "themattharris"
			    },
			    {
			      "profile_sidebar_fill_color": "A0C5C7",
			      "profile_sidebar_border_color": "FFFFFF",
			      "profile_background_tile": false,
			      "name": "April Underwood",
			      "profile_image_url": "http://a0.twimg.com/profile_images/2623063815/image_normal.jpg",
			      "created_at": "Thu Apr 12 00:11:07 +0000 2007",
			      "location": "San Francisco, CA",
			      "follow_request_sent": false,
			      "profile_link_color": "14A395",
			      "is_translator": false,
			      "id_str": "4265731",
			      "default_profile": false,
			      "contributors_enabled": true,
			      "favourites_count": 3024,
			      "url": "http://www.aprilunderwood.com",
			      "profile_banner_url": "https://si0.twimg.com/profile_banners/4265731/1352050638",
			      "profile_image_url_https": "https://si0.twimg.com/profile_images/2623063815/image_normal.jpg",
			      "utc_offset": -28800,
			      "id": 4265731,
			      "profile_use_background_image": false,
			      "listed_count": 348,
			      "profile_text_color": "333333",
			      "lang": "en",
			      "followers_count": 16976,
			      "protected": false,
			      "notifications": false,
			      "profile_background_image_url_https": "https://si0.twimg.com/profile_background_images/662816188/cbyxvatdol1hg8r7c1qb.jpeg",
			      "profile_background_color": "F4F5B1",
			      "verified": false,
			      "geo_enabled": true,
			      "time_zone": "Pacific Time (US & Canada)",
			      "description": "You can't drink from a martini glass while sitting in a rocking chair. I work at @Twitter.",
			      "default_profile_image": false,
			      "profile_background_image_url": "http://a0.twimg.com/profile_background_images/662816188/cbyxvatdol1hg8r7c1qb.jpeg",
			      "statuses_count": 8452,
			      "friends_count": 1328,
			      "following": true,
			      "screen_name": "aunder"
			    },
			    {
			      "profile_sidebar_fill_color": "121212",
			      "profile_sidebar_border_color": "000000",
			      "profile_background_tile": false,
			      "name": "Kelton Lynn",
			      "profile_image_url": "http://a0.twimg.com/profile_images/384067053/n209356_35266280_356207_2_normal.jpg",
			      "created_at": "Mon Mar 30 16:30:42 +0000 2009",
			      "location": "San Francisco",
			      "follow_request_sent": false,
			      "profile_link_color": "999999",
			      "is_translator": false,
			      "id_str": "27674040",
			      "default_profile": false,
			      "contributors_enabled": true,
			      "favourites_count": 421,
			      "url": null,
			      "profile_banner_url": "https://si0.twimg.com/profile_banners/27674040/1348163748",
			      "profile_image_url_https": "https://si0.twimg.com/profile_images/384067053/n209356_35266280_356207_2_normal.jpg",
			      "utc_offset": -28800,
			      "id": 27674040,
			      "profile_use_background_image": true,
			      "listed_count": 174,
			      "profile_text_color": "505050",
			      "lang": "en",
			      "followers_count": 10971,
			      "protected": false,
			      "notifications": false,
			      "profile_background_image_url_https": "https://si0.twimg.com/profile_background_images/424627076/aged_planks_843_10949.jpg",
			      "profile_background_color": "000000",
			      "verified": false,
			      "geo_enabled": true,
			      "time_zone": "Pacific Time (US & Canada)",
			      "description": "Mobile BizDev at Twitter, former Boulderite, bleed Cardinal, SF transplant, love athletics/competition, consumer tech, entrepreneurship, family/friends...life",
			      "default_profile_image": false,
			      "profile_background_image_url": "http://a0.twimg.com/profile_background_images/424627076/aged_planks_843_10949.jpg",
			      "statuses_count": 3166,
			      "friends_count": 1216,
			      "following": true,
			      "screen_name": "keltonlynn"
			    }
			  ],
			  "next_cursor_str": "1333504313713126852"
			};
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
		url:'/socialtalk/web/php/twitter.php',
		type:'POST',
		data:'command=message&text='+escape(text)+'&user_id='+user_id,
		dataType:'json',
		success:function(d){
			$('#sendTwitterInviteSuccess').html('Success!');
			setTimeout(function(){
				$('#sendTwitterInviteSuccess').html('');
			},2000);
			console.log(d);
		}
	})
}

function createSession(){
	var url=TokLiveSession==''?'/socialtalk/web/php/GetSession.php':('/socialtalk/web/php/GetSession.php?sessionId='+TokLiveSession);
	$.ajax({
		url:url,
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
		$('#share-url').val('hey, join me at http://www.cambridgesolutions.net/socialtalk/web/index.php?sessionId='+TokLiveSession);
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
if(TokLiveSession!=''){
	createSession();
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