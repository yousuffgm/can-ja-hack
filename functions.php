<?php
function is_admin(){
	global $username,$isadmin;
	if(strtolower($username) == "yousuffqa"){
		$isadmin = 1;
		return true;
	}
	else{
		$isadmin = 0;
		return false;
	}
}
function is_loggedin(){
	global $username,$isloggedin;
	if($isloggedin)
		return true;
	else
		return false;
}
function loadscripts(){
?>
	<script src="./static/js/jquery.min.js"></script>
	<script src="./static/js/jquery-ui.js"></script>
	<script src="./static/js/jquery.cookie.js"></script>
	<script type="text/javascript" src="http://o.aolcdn.com/os/aol/jquery.openwindow-1.0.js"></script> 
	<script type="text/javascript" src="http://o.aolcdn.com/os/aol/jquery.multiauth-2.0.min.js"></script>
	<script src="./static/js/main.js"></script> 
<?php
}

function loadstyles(){
?>
	<link rel="stylesheet" type="text/css" href="./static/css/main.css" />
	<link rel="stylesheet" type="text/css" href="./static/css/themes/blitzer/jquery-ui.min.css" />
	<link rel="stylesheet" type="text/css" href="./static/css/themes/blitzer/jquery.ui.theme.css" />
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<?php
}
function loadfooterscripts(){
?>
	<script src="./static/js/template.js"></script>
<?php
}
	
?>
