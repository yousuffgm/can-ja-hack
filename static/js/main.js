(function($){
	$(document).ready(function(){
		var $pictureUrl = $('#profile-picture'),
			$authGreeting = $('#auth-greeting'),
			$multiAuthTabs = $('#multiauth-tabs'),
			$signOut = $('#signout'),
			isAOLClient = navigator.userAgent.toLowerCase().indexOf('aol') !== -1 ? 1 : 0;
			
		$.multiAuth({
			devId: 'ao1ZIbZdrltfBdJX',
			getTokenCallback: function(json){
				var $elem = $(this.authLink),
					response = json.response,
					linkText = $elem.data("ma-provider"),
					userAttr;
				
				if (response.statusCode === 200) {
			
					userAttr = response.data.userData.attributes;
					if (!isAOLClient) {
						$elem.data("ma-provider", $elem.html());
					} else{
						$('.first').hide();
					}
					var greetingid = userAttr.displayName || userAttr.loginId;
					if (greetingid){
						$authGreeting.html('Hi ' + greetingid + '!&nbsp;&nbsp;');
					}
					if (userAttr.pictureUrl) {
						$pictureUrl.html('<img src="' + userAttr.pictureUrl + ' /> ');
					
					}
					//console.log($.cookie('token_a'));
					$.cookie("token_a", response.data.token.a);
					
					if(auth==0){
						location.reload();
					}
					
					$(".authd").css("display","inline");
					$(".unauthd").css("display","none");
					$authGreeting.css("display","inline");
					
				} else {
					$.removeCookie("token_a");
					linkText && $elem.html( linkText );
					$pictureUrl.html('');
					
					$(".authd").css("display","none");
					$(".unauthd").css("display","inline");
					$authGreeting.css("display","none");
				
				}			
			}
		});
	
 
		//links inside additional-auth-options
		$('#signout-link').multiAuth({tabs: ['aol'],reload:1});
		$('#aol-link').multiAuth({tabs: ['aol'],selectedTab: 'aol',reload:1});

	});
})(jQuery);