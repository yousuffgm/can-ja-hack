<?php
/****************************************************************************
 * AOL LLC CONFIDENTIAL INFORMATION
 *
 * Copyright (c) 1998-2010 AOL LLC.  All Rights Reserved.
 * Unauthorized reproduction, transmission, or distribution of
 * this software is a violation of applicable laws.
 *
 ****************************************************************************
 *
 * @author:     Zhang
 * @version:    $Revision: 351 $
 * @created:    February 5, 2010
 *
 * Description: An utility function to make HTTP calls using CURL
 *
 ****************************************************************************/

/**
 * Makes an HTTP request to the specified URL and return the OAuth response
 * as associative array
 * @param string $http_method The HTTP method (GET, POST, PUT, DELETE)
 * @param string $url Full URL of the resource to access
 * @param string $auth_header (optional) Authorization header
 * @param string $data (optional) POST/PUT request body or GET query string
 * @return string Response body from the server
 */
function send_request($http_method, $url, $error = null, $auth_header=null, $postData=null) {
	$curl = curl_init($url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_FAILONERROR, false);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 5);
	curl_setopt($curl, CURLOPT_TIMEOUT, 30);

	$header = array('Expect:'); // Disable 100-Continue
	
	switch($http_method) {
		case 'GET':
			break;
		case 'POST':
			$header[] = 'Content-Type: application/x-www-form-urlencoded';
			curl_setopt($curl, CURLOPT_POST, 1);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
			break;
		case 'PUT':
		    $header[] = 'Content-Type: application/x-www-form-urlencoded';
			curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $http_method);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
			break;
		case 'DELETE':
			curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $http_method);
			break;
	}
	
	if (empty($auth_header)) {
		$header_array = $header;
	} else {
		$header_array = array_merge($header, $auth_header);
	}
    curl_setopt($curl, CURLOPT_HTTPHEADER, $header_array);
    
	$error = null;
	$response = curl_exec($curl);
	if (!$response) {
		$error = curl_error($curl);
	}
	curl_close($curl);
	return $response;
}

/**
 * Decode encoded parameters or form data into associative array
 * similar to parse_str() but it doesn't do input filtering.
 * @param $data
 * @return unknown_type
 */
function decode_parameters($data) {
	$output = array();
	$a = explode('&', $data);
	foreach($a as $pair) {
	    list($k, $v) = explode('=', $pair);
		$output[urldecode($k)] = urldecode($v);
	}
	return $output;
}

/**
 * Encode URL parameters, similar to http_build_query
 * 
 * @param $params
 * @return unknown_type
 */
function encode_parameters($params){
    $encoded = '';
    foreach ($params as $k => $v) {
       if (!empty($encoded))
          $encoded .= '&';
       $encoded .= urlencode($k) . '=' . urlencode($v); 
    }    
    return $encoded;
}

/**
 * Append parameters to the URL
 * @param $url
 * @param $params
 * @return unknown_type
 */
function build_url($url, $params = array()) {

	if (empty($params))
	    return $url;
	    
	$pos = strpos($url, '?');	
	if ($pos === FALSE) 
	    $url .= '?';
	else if ($pos != strlen($url) - 1)
	    $url .= '&';

	$url .= encode_parameters($params);
	
	return $url;
}

?>