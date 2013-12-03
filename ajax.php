<?php
require_once __DIR__ . "/globals.php";

switch($_GET["action"]){
	
	case "add_fav":
		$vid = $_GET["id"];
		$channel = $_GET["channel"];
		
		$v = $vid; 
		if(is_loggedin()){
			
			$redis->lpush("username:".$username.":fav",$v);
			$redis->lpush("username:".$username.":channel",$channel);
			$redis->lpush("username:".$username.":".$channel,$v);
			if(is_admin()){
				$redis->lpush("username:"."admin".":fav",$v);
				$redis->lpush("username:"."admin".":channel",$channel);
				$redis->lpush("username:"."admin".":".$channel,$v);
			}
			echo '{"stats":"OK","MSG":"SUCCESS"}';
			return;
		} 
		else{
			echo '{"stats":"Error","MSG":"NOT LOGGEDIN"}';
			return;
		}
		
	break;
	case "get_fav":
		$userpage = $_GET["userpage"];
		
		$favs = $redis->lrange("username:".$userpage.":fav",0,100);
		$nav = $redis->lrange("username:".$userpage.":channel",0,10);
		$nav = super_unique($nav);
		$navdiv = '<div class="nav-tabs-wrapper">';
		$navvids= '<div class="nav-results-wrapper">';
		foreach ($nav as $key => $value){
			$nav_vids =  $redis->lrange("username:".$userpage.":".$value,0,10);
			//var_dump($value);
			$vids = "";
			foreach ($nav_vids as $key1 => $value1){
				if(empty($vids))
					$vids = $vids . $value1;
				else
					$vids = $vids . ',' . $value1;
					
			}
			$navdiv = $navdiv . '<div class="nav-items-'.$key.'" vid-load="'. $vids .'">' . $value . '</div>';
			//$navvids = $navvids . '<div class="nav-items-results'.$key.'"></div>';
		}
		$navdiv = $navdiv . '</div>';
		$navvids = $navvids . '</div>';
		
		/*$div = "";
		foreach ($favs as $key => $value){
			$div = $div . "<br/>" . $value;
		}*/
		echo $navdiv . $navvids;
		
	break;
	
}

?>
