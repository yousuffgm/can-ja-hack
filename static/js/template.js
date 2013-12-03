$(function() {
	$('button').click(function(){
		$('<li class="myvidpg-nwplying"><div class="item-content"></div><div class="item-thumbnail"><a href="" target="_blank"> <img alt="" border="0" height="72" src="./static/img/BlackBerry+10(1).jpg" width="72"> </a></div><div class="item-title"><a href="">What Matters for BlackBerry is What Matters to Users</a></div><embed width="300" height="250" style="display:none" src=""</li>').fadeIn(3000).insertBefore('.myvidpg-nwplying:first-child');
    //alert($('li').length);
    $('.myvidpg-nwplying').css('opacity','1');
    	if($('.myvidpg-nwplying').length >= 25)  { 
			$('.myvidpg-nwplying:last-child').remove(); 
    	}
	});
	var tabs = $( "#tabs" ).tabs();
		tabs.find( ".ui-tabs-nav" ).sortable({
		axis: "x",
		stop: function() {
			tabs.tabs( "refresh" );
		}
	});
	$(".nwPlyngLcl").addClass('on');
	/*$(".lcl-popular-posts").addClass('local');*/
	$(".nwPlyngLcl").click(function(){
		$(".nwPlyngwrd").removeClass('on');
		$(this).addClass('on');
		$(".lcl-popular-posts").css("display","block");
		$(".world-popular-posts").css("display","none");

	});
	$(".nwPlyngwrd").click(function(){
		//alert('clicked');
		$(".nwPlyngLcl").removeClass('on');
		$(this).addClass('on');
		$(".lcl-popular-posts").css("display","none");
		$(".world-popular-posts").css("display","block");

	});
	function setCountry(){
		$.getJSON("http://www.mapquestapi.com/geocoding/v1/reverse?key=Fmjtd|luubn16a2g%2Cas%3Do5-90algu&callback=&location="+$.cookie("myVdPg-latitude")+","+$.cookie("myVdPg-longitude"),function(data){
				if(data.length != 0){
					$.cookie("myVdPg-Country", data.results[0].locations[0].adminArea1);
					//alert($.cookie("myVdPg-Country"));
					fetchVideos();
				}
		});
	}
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(setCookiePosition);
	} else {
		alert("Geolocation is not supported by this browser.");
	}
	function setCookiePosition(position) {
		$.cookie("myVdPg-latitude", position.coords.latitude);
		$.cookie("myVdPg-longitude", position.coords.longitude);
		setCountry();
	}
	fetchVideos = (function(){
		var fMINAPIURL;
		if($.cookie("myVdPg-Country")){fMINAPIURL="http://api.5min.com/search/videos.JSON?q=&country="+$.cookie("myVdPg-Country");}else{fMINAPIURL="http://api.5min.com/search/videos.JSON?q=";}
		$.getJSON(fMINAPIURL,function(allVds){
			//Goes here
		});	

	});

});
