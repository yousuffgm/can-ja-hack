<!DOCTYPE html>
<html dir="ltr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
		<meta content="blogger" name="generator">
		<link href="" rel="icon" type="image/x-icon">
		<meta content="Just Another Blogger Themes." name="description">
		<title>My Video Page</title>
		<meta content="" name="Description">
		<?php
		loadscripts();
		loadstyles();
		?>

		<?php

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
			var userpage = "admin";
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
 			$.getJSON('http://my.on.aol.com/~yousuffqa/ajax.php?action=add_playlist&id='+id,function(json){
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
	
		}
		</script>
	</head>

	<body>
		<header id="header-wrapper">
			<div class="header section" id="header">
				<div class="widget Header" id="Header1">
					<div id="header-inner">
						<a href="#" style="display: block"> <img alt="My video Page" id="Header1_headerimg" src="./static/img/logo-2.png"> </a>
					</div>
				</div>
			</div>
			<div class="header section" id="header2">
				<nav class="widget PageList" id="PageList1">
					<ul>
						<li class="authLnks">
							<div class="auth-link">
								<div id="auth-greeting"></div>
								<div class="authd"  id="signout">
									<a href="#" id="signout-link">Sign Out</a>
								</div>
								<div class="unauthd" id="aol-link">
									<a href=#>Sign In</a>
								</div>
							</div>
						</li>
					</ul>
				</nav>
			</div>
		</header>
		<div id="outer-wrapper">
			<div id="wrap2">
				<div id="content-wrapper">
					<section id="main-wrapper">
						<div id="crosscol-wrapper" style="text-align:center">
							<div class="crosscol section" id="crosscol"></div>
						</div>
						<div class="main section" id="main">
							<div class="widget Blog" id="Blog1">
								<div class="blog-posts hfeed">
									<!-- google_ad_section_start(name=default) -->

									<div class="date-outer">

										<div class="date-posts">

											<div class="post-outer">
												<div class="post hentry">
													<div style='text-align:center'>
														<div id="video-container">
														<script type='text/javascript' src='http://pshared.5min.com/Scripts/PlayerSeed.js?sid=281&width=670&height=413&playList=518032684'></script>
													</div>
													</div>
												</div>
											</div>

										</div>
									</div>

								</div>
							</div>
						</div>
						<div class="usr_msg_brd">
									
									<div class="usr_follow_me"> Follow Me</div>
									<div class="usr_following"> Following</div>
									<div class="usr_unfollow_me" style="display:none"> Unfollow Me</div>
						</div>
						<div class="list">
							<div id="tabs">
								<ul>
									<li onclick="refresh_fav();">
										<a href="#tabs-1">Favorites</a>
									</li>
									<li>
										<a href="#tabs-2">Search</a>
									</li>
									<li onclick="get_playlist();">
										<a href="#tabs-3" >Playlist</a>
									</li>
									<li>
										<a href="#tabs-4">Message Boards</a>
									</li>
									<li>
										<a href="#tabs-5">Watch Later</a>
									</li>
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
									
								</div>
								<div id="tabs-4">
									<div class="usr_msg_brd_tab">
										<div class="usr_detls">
											<div id="search-results">
												<div class="usrmsgCntr">
													<div class="item" video-id="518034879" video-tag="Entertainment" style="float:left;margin:10px;width:100px;"><img style="float:left" src="http://pthumbnails.5min.com/10360698/518034879_c.jpg" width="100px" height="100px" onclick="play(518034879)">
														<div class="fav-icons" style="float:left;">
															<i class="fa fa-heart" onclick="fav(518034879,'Entertainment')"></i><i class="fa fa-caret-square-o-right"></i><i class="fa fa-eye"></i>
														</div>
													</div>
													<div>
														<p>
															<a href="#">Binay</a> added this video to his favourites - 55 secs ago
														</p>
													</div>
												</div>

												<div class="usrmsgCntr">
													<div class="item" video-id="518034878" video-tag="Entertainment" style="float:left;margin:10px;width:100px;"><img style="float:left" src="http://pthumbnails.5min.com/10360698/518034878_c.jpg" width="100px" height="100px" onclick="play(518034878)">
														<div class="fav-icons" style="float:left;">
															<i class="fa fa-heart" onclick="fav(518034878,'Entertainment')"></i><i class="fa fa-caret-square-o-right"></i><i class="fa fa-eye"></i>
														</div>
													</div>
													<div>
														<p>
															<a href="#">Jojo</a> added this video to his favourites - 1 min ago
														</p>
													</div>
												</div>

												<div class="usrmsgCntr">
													<div class="item" video-id="518034876" video-tag="News" style="float:left;margin:10px;width:100px;"><img style="float:left" src="http://pthumbnails.5min.com/10360698/518034876_c.jpg" width="100px" height="100px" onclick="play(518034876)">
														<div class="fav-icons" style="float:left;">
															<i class="fa fa-heart" onclick="fav(518034876,'News')"></i><i class="fa fa-caret-square-o-right"></i><i class="fa fa-eye"></i>
														</div>
													</div>
													<div>
														<p>
															<a href="#">Manasa</a> added this video to her favourites - 1 min 35 secs ago
														</p>
													</div>
												</div>

												<div class="usrmsgCntr">
													<div class="item" video-id="518034874" video-tag="News" style="float:left;margin:10px;width:100px;"><img style="float:left" src="http://pthumbnails.5min.com/10360698/518034874_c.jpg" width="100px" height="100px" onclick="play(518034874)">
														<div class="fav-icons" style="float:left;">
															<i class="fa fa-heart" onclick="fav(518034874,'News')"></i><i class="fa fa-caret-square-o-right"></i><i class="fa fa-eye"></i>
														</div>
													</div>
													<div>
														<p>
															<a href="#">Yousuff</a> added this video to his favourites - 3 mins ago
														</p>
													</div>
												</div>

												<div class="usrmsgCntr">
													<div class="item" video-id="518034873" video-tag="News" style="float:left;margin:10px;width:100px;"><img style="float:left" src="http://pthumbnails.5min.com/10360698/518034873_c.jpg" width="100px" height="100px" onclick="play(518034873)">
														<div class="fav-icons" style="float:left;">
															<i class="fa fa-heart" onclick="fav(518034873,'News')"></i><i class="fa fa-caret-square-o-right"></i><i class="fa fa-eye"></i>
														</div>
													</div>
													<div>
														<p>
															<a href="#">Bob</a> added this video to his favourites - 4 mins 3 secs ago
														</p>
													</div>
												</div>
												
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</div>
								<div id="tabs-5">
									<div class="item" video-id="518034830" video-tag="News" style="float:left;margin:10px;width:100px;"><img style="float:left" src="http://pthumbnails.5min.com/10360697/518034830_c.jpg" width="100px" height="100px" onclick="play(518034830)"><div class="fav-icons" style="float:left;"><i class="fa fa-heart" onclick="fav(518034830,'News')"></i><i class="fa fa-caret-square-o-right" onclick="playlist(518034830)"></i><i class="fa fa-eye"></i></div></div><div class="item" video-id="518034799" video-tag="News" style="float:left;margin:10px;width:100px;"><img style="float:left" src="http://pthumbnails.5min.com/10360696/518034799_c.jpg" width="100px" height="100px" onclick="play(518034799)"><div class="fav-icons" style="float:left;"><i class="fa fa-heart" onclick="fav(518034799,'News')"></i><i class="fa fa-caret-square-o-right" onclick="playlist(518034799)"></i><i class="fa fa-eye"></i></div></div><div class="item" video-id="518034821" video-tag="News" style="float:left;margin:10px;width:100px;"><img style="float:left" src="http://pthumbnails.5min.com/10360697/518034821_c.jpg" width="100px" height="100px" onclick="play(518034821)"><div class="fav-icons" style="float:left;"><i class="fa fa-heart" onclick="fav(518034821,'News')"></i><i class="fa fa-caret-square-o-right" onclick="playlist(518034821)"></i><i class="fa fa-eye"></i></div></div><div class="item" video-id="518034822" video-tag="News" style="float:left;margin:10px;width:100px;"><img style="float:left" src="http://pthumbnails.5min.com/10360697/518034822_2.jpg" width="100px" height="100px" onclick="play(518034822)"><div class="fav-icons" style="float:left;"><i class="fa fa-heart" onclick="fav(518034822,'News')"></i><i class="fa fa-caret-square-o-right" onclick="playlist(518034822)"></i><i class="fa fa-eye"></i></div></div><div class="clear"></div>
								</div>
							</div>
							<script>
		   			     
		   			       $( "#tabs" ).tabs();
		   				   search_submit();
						   
						   function get_playlist(){
							   $.getJSON("http://my.on.aol.com/~yousuffqa/ajax.php?action=get_playlist&userpage="+userpage, function( data ) {
								   var $vid = data.videos;
								   if(!$vid){return;}
								   play($vid);
								   //console.log($vid);
								   $.getJSON("http://api.5min.com/video/list/info.json?video_ids="+$vid,function(json){
					 				$div = "";
					 				for(i=0;i<json.items.length;i++){
					 					var $id = json.items[i].id;
					 					var $channel = json.items[i].channel;
					 					$div = $div + '<div class="item" video-id="'+$id+'"video-tag="'+$channel+'" style="float:left;margin:10px;width:100px;"><img style="float:left" src='+json.items[i].image+' width="100px" height="100px" onclick="play('+json.items[i].id+')"/><div class="fav-icons" style="float:left;"><i class="fa fa-heart" onclick="fav('+$id+',\''+$channel+'\')"></i><i class="fa fa-caret-square-o-right" onclick="playlist('+$id+')"></i><i class="fa fa-eye"></i></div></div>';
					 				}
					 				$div = $div + '<div class="clear"></div>';
					 				$("#tabs-3").empty();
					 				$("#tabs-3").append($div);
								   });
							   });
						   	
						   }
						   get_playlist();
						   function refresh_fav(){
						   
						   $.get("http://my.on.aol.com/~yousuffqa/ajax.php?action=get_fav&userpage="+userpage, function( data ) {
		   				     $( "#tabs-1" ).html( data );
							
							 $(".nav-items").each(function(i,v){
								 var $vid = $(this).attr("vid-load");
								 //console.log($vid);
			  					 $(this).click(function(e){
									 e.preventDefault();
						 			 var $vid = $(this).attr("vid-load");
									 //console.log($vid);
									 //console.log("i am clicked")
						 				 $.getJSON("http://api.5min.com/video/list/info.json?video_ids="+$vid,function(json){
						 				$div = "";
						 				for(i=0;i<json.items.length;i++){
						 					var $id = json.items[i].id;
						 					var $channel = json.items[i].channel;
						 					$div = $div + '<div class="item" video-id="'+$id+'"video-tag="'+$channel+'" style="float:left;margin:10px;width:100px;"><img style="float:left" src='+json.items[i].image+' width="100px" height="100px" onclick="play('+json.items[i].id+')"/><div class="fav-icons" style="float:left;"><i class="fa fa-heart" onclick="fav('+$id+',\''+$channel+'\')"></i><i class="fa fa-caret-square-o-right" onclick="playlist('+$id+')"></i><i class="fa fa-eye"></i></div></div>';
						 				}
						 				$div = $div + '<div class="clear"></div>';
						 				$(".nav-results-wrapper").empty();
						 				$(".nav-results-wrapper").append($div);
						 			});
			  					 });
			  				 });
					   	  	$(".nav-items").each(function(i,v){
					   	  		if(i==0)
									$(this).trigger("click");
							
					   	  	});
				     
		   				   });
					   }
		  				 
						 refresh_fav();
						 
		   			 
							</script>
						</div>
					</section>
					<section id="sidebar-wrapper">
						<div class="sidebar section" id="sidebar">
							<div class="widget Label" id="Label1">
								<h2>Categories</h2>
								<div class="widget-content list-label-widget-content">
									<ul>
										<li>
											<a dir="ltr" href="http://responsive-templates.blogspot.in/search/label/BlackBerry">BlackBerry</a>
										</li>
										<li>
											<a dir="ltr" href="http://responsive-templates.blogspot.in/search/label/Facebook">Facebook</a>
										</li>
										<li>
											<a dir="ltr" href="http://responsive-templates.blogspot.in/search/label/Google">Google</a>
										</li>
										<li>
											<a dir="ltr" href="http://responsive-templates.blogspot.in/search/label/Google%2B">Google+</a>
										</li>
										<li>
											<a dir="ltr" href="http://responsive-templates.blogspot.in/search/label/Images">Images</a>
										</li>
										<li>
											<a dir="ltr" href="http://responsive-templates.blogspot.in/search/label/Instagram">Instagram</a>
										</li>
										<li>
											<a dir="ltr" href="http://responsive-templates.blogspot.in/search/label/Internet">Internet</a>
										</li>
										<li>
											<a dir="ltr" href="http://responsive-templates.blogspot.in/search/label/Nexus%2010">Nexus 10</a>
										</li>
										<li>
											<a dir="ltr" href="http://responsive-templates.blogspot.in/search/label/SEO">SEO</a>
										</li>
										<li>
											<a dir="ltr" href="http://responsive-templates.blogspot.in/search/label/SmartPhones">SmartPhones</a>
										</li>
										<li>
											<a dir="ltr" href="http://responsive-templates.blogspot.in/search/label/Social%20Media">Social Media</a>
										</li>
										<li>
											<a dir="ltr" href="http://responsive-templates.blogspot.in/search/label/Tech">Tech</a>
										</li>
										<li>
											<a dir="ltr" href="http://responsive-templates.blogspot.in/search/label/Twitter">Twitter</a>
										</li>
									</ul>
									<div class="clear"></div>
									<span class="widget-item-control"> <span class="item-control blog-admin"> <a class="quickedit" href="http://www.blogger.com/rearrange?blogID=3098404464998738722&widgetType=Label&widgetId=Label1&action=editWidget&sectionId=sidebar" onclick="return _WidgetManager._PopupConfig(document.getElementById(&quot;Label1&quot;));" target="configLabel1" title="Edit"> <img alt="" height="18" src="./static/img/icon18_wrench_allbkg.png" width="18"> </a> </span> </span>
									<div class="clear"></div>
								</div>
							</div>
						</div>
					</section>

				</div>
				<!-- end content-wrapper -->
				<aside id="sidebar2-wrapper">
					<div class="sidebar2 section" id="sidebar2">
						<div class="widget PopularPosts" id="PopularPosts1">
							<h2>Playing Now</h2><!--remove-->
							<ul class="nwPlyngLoc">
								<li class="nwPlyngLcl"><img src="./static/img/iconmonstr-home-4-icon-24.png" />
								</li>
								<li class="nwPlyngwrd"><img src="./static/img/iconmonstr-globe-icon-24.png" />
								</li>
							</ul>
							<div class="widget-content lcl-popular-posts">
								<ul>
								<li class="myvidpg-nwplying">
										<div class="item-content">
											<div class="item-thumbnail">
												<a href="" target="_blank"> <img alt="" border="0" height="60" src="http://pthumbnails.5min.com/10360691/518034510_c.jpg" width="72"> </a>
											</div>
											<div class="item-title">
												<a href="">The next best thing in Package Delivery?</a>
											</div>
											<embed width="300" height="250" style="display:none" src="http://embed.5min.com/517750342/&amp;sid=577&amp;autoStart=true">
											<!--<div class="item-snippet">
											At this week's Computerworld Premier 100 conference in Tucson, I asked many of the IT leaders whether their companies will use the com...
											</div>-->
										</div>
										<div style="clear: both;"></div>
									</li>
									<li class="myvidpg-nwplying">
										<div class="item-content">
											<div class="item-thumbnail">
												<a href="" target="_blank"> <img alt="" border="0" height="60" src="http://pthumbnails.5min.com/10360669/518033419_c.jpg" width="72"> </a>
											</div>
											<div class="item-title">
												<a href="">Questions about "Fast and Furious 7" raised after Paul Walker Tragedy</a>
											</div>
											<embed width="300" height="250" style="display:none" src="http://embed.5min.com/517750342/&amp;sid=577&amp;autoStart=true">
											<!--<div class="item-snippet">
											Hugo Chavez passed away  after a two-year battle with cancer. The colorful and controversial socialist Venezuelan president, who once call...
											</div>-->
										</div>
										<div style="clear: both;"></div>
									</li>
									<li class="myvidpg-nwplying">
										<div class="item-content">
											<div class="item-thumbnail">
												<a href="" target="_blank"> <img alt="" border="0" height="60" src="http://pthumbnails.5min.com/10360686/518034254_c.jpg" width="72"> </a>
											</div>
											<div class="item-title">
												<a href="">Fast and Furious 7 Producer: Movie will have to wait.. Its time to Grieve </a>
											</div>
											<embed width="300" height="250" style="display:none" src="http://embed.5min.com/517750342/&amp;sid=577&amp;autoStart=true">
											<!--<div class="item-snippet">
											Hugo Chavez passed away  after a two-year battle with cancer. The colorful and controversial socialist Venezuelan president, who once call...
											</div>-->
										</div>
										<div style="clear: both;"></div>
									</li>
									<li class="myvidpg-nwplying">
										<div class="item-content">
											<div class="item-thumbnail">
												<a href="" target="_blank"> <img alt="" border="0" height="60" src="http://pthumbnails.5min.com/10358581/517929015_36.jpg" width="72"> </a>
											</div>
											<div class="item-title">
												<a href="">Porshe World Endurance Champianship GT: Plenty of Good news</a>
											</div>
											<embed width="300" height="250" style="display:none" src="http://embed.5min.com/517750342/&amp;sid=577&amp;autoStart=true">
											<!--<div class="item-snippet">
											Hugo Chavez passed away  after a two-year battle with cancer. The colorful and controversial socialist Venezuelan president, who once call...
											</div>-->
										</div>
										<div style="clear: both;"></div>
									</li>
								</ul>
								<div class="clear"></div>
								<span class="widget-item-control"> <span class="item-control blog-admin"> <a class="quickedit" href="http://www.blogger.com/rearrange?blogID=3098404464998738722&widgetType=PopularPosts&widgetId=PopularPosts1&action=editWidget&sectionId=sidebar2" onclick="return _WidgetManager._PopupConfig(document.getElementById(&quot;PopularPosts1&quot;));" target="configPopularPosts1" title="Edit"> <img alt="" height="18" src="./static/img/icon18_wrench_allbkg.png" width="18"> </a> </span> </span>
								<div class="clear"></div>
							</div>
							<div class="widget-content world-popular-posts" style="display:none">
								<ul>
									<li class="myvidpg-nwplying">
										<div class="item-content">
											<div class="item-thumbnail">
												<a href="" target="_blank"> <img alt="" border="0" height="60" src="http://pthumbnails.5min.com/10346419/517320903_c.jpg" width="72"> </a>
											</div>
											<div class="item-title">
												<a href="">Porshe GT3 at the 24th Nurburing</a>
											</div>
											<embed width="300" height="250" style="display:none" src="http://embed.5min.com/517750342/&amp;sid=577&amp;autoStart=true">
											<!--<div class="item-snippet">
											At this week's Computerworld Premier 100 conference in Tucson, I asked many of the IT leaders whether their companies will use the com...
											</div>-->
										</div>
										<div style="clear: both;"></div>
									</li>
									<li class="myvidpg-nwplying">
										<div class="item-content">
											<div class="item-thumbnail">
												<a href="" target="_blank"> <img alt="" border="0" height="60" src="http://pthumbnails.5min.com/10344363/517218144_c.jpg" width="72"> </a>
											</div>
											<div class="item-title">
												<a href="">Questions about "Fast and Furious 7" raised after Paul Walker Tragedy</a>
											</div>
											<embed width="300" height="250" style="display:none" src="http://embed.5min.com/517750342/&amp;sid=577&amp;autoStart=true">
											<!--<div class="item-snippet">
											Hugo Chavez passed away  after a two-year battle with cancer. The colorful and controversial socialist Venezuelan president, who once call...
											</div>-->
										</div>
										<div style="clear: both;"></div>
									</li>
									<li class="myvidpg-nwplying">
										<div class="item-content">
											<div class="item-thumbnail">
												<a href="" target="_blank"> <img alt="" border="0" height="60" src="http://pthumbnails.5min.com/10354488/517724374_c.jpg" width="72"> </a>
											</div>
											<div class="item-title">
												<a href="">Opel Astra's 24 hours speed endurance world record attemt </a>
											</div>
											<embed width="300" height="250" style="display:none" src="http://embed.5min.com/517750342/&amp;sid=577&amp;autoStart=true">
											<!--<div class="item-snippet">
											Hugo Chavez passed away  after a two-year battle with cancer. The colorful and controversial socialist Venezuelan president, who once call...
											</div>-->
										</div>
										<div style="clear: both;"></div>
									</li>
									<li class="myvidpg-nwplying">
										<div class="item-content">
											<div class="item-thumbnail">
												<a href="" target="_blank"> <img alt="" border="0" height="60" src="http://pthumbnails.5min.com/10350839/517541939_3.jpg" width="72"> </a>
											</div>
											<div class="item-title">
												<a href="">Porshe World Endurance Champianship GT: Plenty of Good news</a>
											</div>
											<embed width="300" height="250" style="display:none" src="http://embed.5min.com/517750342/&amp;sid=577&amp;autoStart=true">
											<!--<div class="item-snippet">
											Hugo Chavez passed away  after a two-year battle with cancer. The colorful and controversial socialist Venezuelan president, who once call...
											</div>-->
										</div>
										<div style="clear: both;"></div>
									</li>
								</ul>
								<div class="clear"></div>
								<span class="widget-item-control"> <span class="item-control blog-admin"> <a class="quickedit" href="http://www.blogger.com/rearrange?blogID=3098404464998738722&widgetType=PopularPosts&widgetId=PopularPosts1&action=editWidget&sectionId=sidebar2" onclick="return _WidgetManager._PopupConfig(document.getElementById(&quot;PopularPosts1&quot;));" target="configPopularPosts1" title="Edit"> <img alt="" height="18" src="./static/img/icon18_wrench_allbkg.png" width="18"> </a> </span> </span>
								<div class="clear"></div>
							</div>
						</div>
						<!--<div class="widget PopularPosts" id="PopularPosts1">
						<h2>Popular Videos</h2>
						<div class="widget-content popular-posts">
						<ul>
						<li>
						<div class="item-content">
						<div class="item-thumbnail">
						<a href="" target="_blank"> <img alt="" border="0" height="72" src="./static/img/BlackBerry+10(1).jpg" width="72"> </a>
						</div>
						<div class="item-title">
						<a href="">What Matters for BlackBerry is What Matters to Users</a>
						</div>
						<embed width="300" height="250" style="display:none" src="http://embed.5min.com/517750342/&amp;sid=577&amp;autoStart=true">-->
						<!--<div class="item-snippet">
						At this week's Computerworld Premier 100 conference in Tucson, I asked many of the IT leaders whether their companies will use the com...
						</div>-->
						<!--</div>
						<div style="clear: both;"></div>
						</li>
						<li>
						<div class="item-content">
						<div class="item-thumbnail">
						<a href="" target="_blank"> <img alt="" border="0" height="72" src="./static/img/Twitter(1).jpg" width="72"> </a>
						</div>
						<div class="item-title">
						<a href="">Hugo Chavez Dies and the Twitter Town Square Reacts</a>
						</div>
						<embed width="300" height="250" style="display:none" src="http://embed.5min.com/517750342/&amp;sid=577&amp;autoStart=true">
						<!--<div class="item-snippet">
						Hugo Chavez passed away  after a two-year battle with cancer. The colorful and controversial socialist Venezuelan president, who once call...
						</div>-->
						<!--</div>
						<div style="clear: both;"></div>
						</li>
						</ul>
						<div class="clear"></div>
						<span class="widget-item-control"> <span class="item-control blog-admin"> <a class="quickedit" href="http://www.blogger.com/rearrange?blogID=3098404464998738722&widgetType=PopularPosts&widgetId=PopularPosts1&action=editWidget&sectionId=sidebar2" onclick="return _WidgetManager._PopupConfig(document.getElementById(&quot;PopularPosts1&quot;));" target="configPopularPosts1" title="Edit"> <img alt="" height="18" src="./static/img/icon18_wrench_allbkg.png" width="18"> </a> </span> </span>
						<div class="clear"></div>
						</div>
						</div>-->
				</aside>
				<div id="footer-wrapper">
					<div class="footer section" id="footer"></div>
				</div>
			</div>
		</div>
		<!-- end outer-wrapper -->
		<footer id="credit-wrapper">
			<div id="link-wrapper">
				Copyright © 2013. <a class="sitename" href="#" title="My Video Page">My Video Page</a>
			</div>
		</footer>
		<?php
		loadfooterscripts();
		?>
	</body>

</html>
