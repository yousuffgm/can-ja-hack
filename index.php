<?php
require_once __DIR__ . "/globals.php";

switch($_GET["a"]){
	
	case "main":
		require_once __DIR__ . "/views/main.php";
	break;
	case "user":
		echo "user";
	break;
	case "error":
		echo "error";
	break;
}
?>
