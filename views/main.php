<html>

<head>
	<?php
		loadscripts();
		loadstyles();
	?>
	
<?php


<<<<<<< HEAD

if(is_loggedin()){
	?>
	<script>
		var auth = 1;
	</script>
	<?php
}
else{
	?>
	<script>
		var auth = 0;
=======
		if(is_loggedin()){
		?>
		<script>
			var auth = 1;
			var userpage = "<?php echo $username; ?>";
		</script>
		<?php
		}
		else{
		?>
		<script>
			var auth = 0;
			var userpage = "admin;
		</script>
		<?php
		}
		
		?>
		<script>
		function setPlayer(e){
			//console.log(e);
		}
		function play(id){
 
		 j = document.createElement("script");
		 j.type = "text/javascript";
		 j.src = 'http://pshared.5min.com/Scripts/PlayerSeed.js?sid=281&width=650&height=500&playList='+id+'&autoStart=true&onVideoDataLoaded=setPlayer';
		 div = document.getElementById("video-container");
		 $(div).css({"width":"720px","height":"500px"})
		 div.innerHTML = "";
		 div.appendChild(j);
		 }
		 
		 function playlist(id){
 			$.getJSON('http://169.254.11.15/~yousuffqa/ajax.php?action=add_playlist&id='+id,function(json){
 				//console.log(json);
 			});
		 }
		function fav(id,channel){
			channel = $.trim(channel);
			$.getJSON('http://169.254.11.15/~yousuffqa/ajax.php?action=add_fav&channel='+channel+'&id='+id,function(json){
				//console.log(json);
			});
			 
		}
		function search_submit(){
			var q = $("input[name^='query']").val();
			var str = encodeURIComponent(q);
			$.getJSON("http://api.5min.com/search/videos.JSON?q="+str,function(json){
				$div = "";
				for(i=0;i<json.items.length;i++){
					var $id = json.items[i].id;
					var $channel = json.items[i].channel;
					$div = $div + '<div class="item" video-id="'+$id+'"video-tag="'+$channel+'" style="float:left;margin:10px;width:100px;"><img style="float:left" src='+json.items[i].image+' width="100px" height="100px" onclick="play('+json.items[i].id+')"/><div class="fav-icons" style="float:left;"><i class="fa fa-heart" onclick="fav('+$id+',\''+$channel+'\')"></i><i class="fa fa-caret-square-o-right" onclick="playlist('+$id+')"></i><i class="fa fa-eye"></i></div></div>';
				}
				$div = $div + '<div class="clear"></div>';
				$("#search-results").empty();
				$("#search-results").append($div);
			});
>>>>>>> parent of ad7bb1a... l7
	
	</script>
	<?php
}
echo $username;	
?>	
<script>
function search_submit(){
	var q = $("input[name^='query']").val();
	var str = encodeURIComponent(q);
	$.getJSON("http://api.5min.com/search/videos.JSON?q="+str,function(json){
		$div = "";
		for(i=0;i<json.items.length;i++){
			$div = $div + '<div class="item" video-id='+json.items[i].id+' style="float:left;margin:10px;width:100px;"><img style="float:left" src='+json.items[i].image+' width="100px" height="100px" onclick="play('+json.items[i].id+')"/><div class="fav-icons" style="float:left;"><i class="fa fa-heart"></i><i class="fa fa-caret-square-o-right"></i><i class="fa fa-eye"></i></div></div>';
		}
		$div = $div + '<div class="clear"></div>';
		$("#search-results").empty();
		$("#search-results").append($div);
	});
	
}
</script>
</head>


<body>
	<div class="wrapper"> 
		<div class="header">
			<div class="auth-link">
					<div id="auth-greeting"></div>
					<div class="authd"  id="signout"><a href="#" id="signout-link">Sign Out</a></div>
					<div class="unauthd" id="aol-link"><a href=#>Sign In</a></div>
			</div>
		</div>
		
		<div class="left">
			left
			<div id="player">
				
			</div>
			<div class="list">
				<div id="tabs">
				  <ul>
				    <li><a href="#tabs-1">Favorites</a></li>
				    <li><a href="#tabs-2">Search</a></li>
				   	 <li><a href="#tabs-3">Playlist</a></li>
					 <li><a href="#tabs-4">Message Boards</a></li>
					  <li><a href="#tabs-5">Watch Later</a></li>
				  </ul>
				  <div id="tabs-1">
				    
				  </div>
				  <div id="tabs-2">
					  <div id="search-container">
						  <input type="text" name="query"/>
						  <input type="button" value="submit" onclick="search_submit()"/>
					  </div>
					  <div id="search-results"></div>
				  </div>
				  <div id="tabs-3">
				    <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
				    <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
				  </div>
				  <div id="tabs-4">
				   
				  </div>
				  <div id="tabs-5">
				   
				  </div>
				</div>
			    <script>
			     $(function() {
			       $( "#tabs" ).tabs();
			     });
			     </script>
			</div>
		</div>
		<div class="right">rigth</div>
		<div class="clear"></div>
	</div>
	

</body>

</html>
