<?php
function getBaseUrl()
    {
        //there will always be http
        $url = 'http';
        //if https url then add the s
        if(!empty($_SERVER['HTTPS'])) {
            $url.= 's';
        }
        //there will always be ://
        $url.= '://';
        //if there is a port then add the server name and port
        if ($_SERVER['SERVER_PORT'] != '80') {
            $url.= $_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'];
        }
        //otherwise no port just add server name
        else {
        $url.= $_SERVER['SERVER_NAME'];
        }
        //finish with the actual path/page
        return $url.$_SERVER['PHP_SELF'];
 	}
	
function validate(){
	global $username,$isloggedin;
	if(isset($_COOKIE['token_a'])) {
		$token = $_COOKIE['token_a'];
		$valUrl = build_url('http://api.screenname.aol.com/auth/getInternalInfo',array(
	                        "devId"=>'ao1ZIbZdrltfBdJX',
	                        "f"=>"json",
	                        "attribute"=>implode(",", array('username','guid','displayName','email','age')),
	                        "referer"=>	getBaseUrl(),
	                        "a"=>$token)
	                   );
		
		$response = send_request('GET', $valUrl);
		$decoded_response = json_decode($response,TRUE);
		if($decoded_response['response']['statusCode'] === 200) {
			$attributes_returned = $decoded_response['response']['data']['userData']['attributes'];
			$username = $attributes_returned['username'];
			$isloggedin = 1;
			return true;
		}
		else{
			$username = "";
			$isloggedin = 0;
			return false;
		}
	}
	else{
		$username = "";
		$isloggedin = 0;
		return false;
	}
}
validate();
?>