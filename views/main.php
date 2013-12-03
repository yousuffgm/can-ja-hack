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
		</script>
		<?php
		}
		else{
		?>
		<script>
			var auth = 0;

		</script>
		<?php
		}
		echo $username;
		?>
		<script>
			function search_submit() {
				var q = $("input[name^='query']").val();
				var str = encodeURIComponent(q);
				$.getJSON("http://api.5min.com/search/videos.JSON?q=" + str, function(json) {
					$div = "";
					for ( i = 0; i < json.items.length; i++) {
						$div = $div + '<div class="item" video-id=' + json.items[i].id + ' style="float:left;margin:10px;width:100px;"><img style="float:left" src=' + json.items[i].image + ' width="100px" height="100px" onclick="play(' + json.items[i].id + ')"/><div class="fav-icons" style="float:left;"><i class="fa fa-heart"></i><i class="fa fa-caret-square-o-right"></i><i class="fa fa-eye"></i></div></div>';
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
														<script type='text/javascript' src='http://pshared.5min.com/Scripts/PlayerSeed.js?sid=281&width=670&height=413&playList=518032684'></script>
													</div>
												</div>
											</div>

										</div>
									</div>

								</div>
							</div>
						</div>
						<div class="list">
							<div id="tabs">
								<ul>
									<li>
										<a href="#tabs-1">Favorites</a>
									</li>
									<li>
										<a href="#tabs-2">Search</a>
									</li>
									<li>
										<a href="#tabs-3">Playlist</a>
									</li>
									<li>
										<a href="#tabs-4">Message Boards</a>
									</li>
									<li>
										<a href="#tabs-5">Watch Later</a>
									</li>
								</ul>
								<div id="tabs-1">
									<section id="sidebar-wrapper_fav">
										<div id="sidebar" class="sidebar section">
											<div id="Label1" class="widget Label">
												<h2>Labels</h2>
												<div class="widget-content list-label-widget-content">
													<ul>
														<li>
															<a href="http://responsive-templates.blogspot.in/search/label/BlackBerry" dir="ltr">BlackBerry</a>
														</li>
														<li>
															<a href="http://responsive-templates.blogspot.in/search/label/Facebook" dir="ltr">Facebook</a>
														</li>
														<li>
															<a href="http://responsive-templates.blogspot.in/search/label/Google" dir="ltr">Google</a>
														</li>
														<li>
															<a href="http://responsive-templates.blogspot.in/search/label/Google%2B" dir="ltr">Google+</a>
														</li>
														<li>
															<a href="http://responsive-templates.blogspot.in/search/label/Images" dir="ltr">Images</a>
														</li>

													</ul>
													<div class="clear"></div>
													<span class="widget-item-control"> <span class="item-control blog-admin"> <a title="Edit" target="configLabel1" onclick="return _WidgetManager._PopupConfig(document.getElementById(&quot;Label1&quot;));" href="http://www.blogger.com/rearrange?blogID=3098404464998738722&amp;widgetType=Label&amp;widgetId=Label1&amp;action=editWidget&amp;sectionId=sidebar" class="quickedit"> <img height="18" width="18" src="./static/img/icon18_wrench_allbkg.png" alt=""> </a> </span> </span>
													<div class="clear"></div>
												</div>
											</div>
										</div>
									</section>
									<p>
										Hugo Chavez passed away  after a two-year battle with cancer. The colorful and controversial socialist Venezuelan president, who once call...
									</p>
								</div>
								<div id="tabs-2">
									<div id="search-container">
										<input type="text" name="query"/>
										<input type="button" value="submit" onclick="search_submit()"/>
									</div>
									<div id="search-results"></div>
								</div>
								<div id="tabs-3">
									<p>
										Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.
									</p>
									<p>
										Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.
									</p>
								</div>
								<div id="tabs-4">

								</div>
								<div id="tabs-5">

								</div>
							</div>
							<script>
								$(function() {
									$("#tabs").tabs();
								});
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
							<button>
								click
							</button>
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
												<a href="" target="_blank"> <img alt="" border="0" height="72" src="./static/img/BlackBerry+10(1).jpg" width="72"> </a>
											</div>
											<div class="item-title">
												<a href="">What Matters for BlackBerry is What Matters to Users</a>
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
												<a href="" target="_blank"> <img alt="" border="0" height="72" src="./static/img/Twitter(1).jpg" width="72"> </a>
											</div>
											<div class="item-title">
												<a href="">Hugo Chavez Dies and the Twitter Town Square Reacts</a>
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
												<a href="" target="_blank"> <img alt="" border="0" height="72" src="./static/img/BlackBerry+10(1).jpg" width="72"> </a>
											</div>
											<div class="item-title">
												<a href="">What Matters for BlackBerry is What Matters to Users What Matters to Users</a>
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
												<a href="" target="_blank"> <img alt="" border="0" height="72" src="./static/img/Twitter(1).jpg" width="72"> </a>
											</div>
											<div class="item-title">
												<a href="">Hugo Chavez Dies and the Twitter Town Square Reacts What Matters to Users</a>
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
