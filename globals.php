<?php
global $redis;
global $username;
global $isloggedin;
global $isadmin;

require_once __DIR__ . "/config.php";
require_once __DIR__.'/vendor/predis/autoload.php';
require_once __DIR__.'/vendor/http_request.php';
require_once __DIR__ . "/auth.php";
require_once __DIR__ . "/functions.php";

$server = array(
	'host'     => REDISHOST,
    'port'     => REDISPORT,
    'database' => REDISDB
	);
$redis = new Predis\Client($server);
	
?>	