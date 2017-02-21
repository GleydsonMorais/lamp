<?php
/*	require_once __DIR__ . "/../DAO/conect.php";
	require_once __DIR__ . '/../libs/Facebook/autoload.php';
	session_start();
		
	// callback
	
	$fb = new Facebook\Facebook([
		'app_id'                => '1144618062242660',
		'app_secret'            => 'a447e6424c61ae609de339934401c7d9']);

	$helper = $fb->getRedirectLoginHelper();
	if(!isset($_SESSION['loginUser'])){
		try {
		  $accessToken = $helper->getAccessToken();
		} catch(Exception $e) {
		  // When validation fails or other local issues
		  echo 'Facebook SDK returned an error: ' . $e->getMessage();
		}
		
		if (isset($accessToken)) {
		try {
		  // Returns a `Facebook\FacebookResponse` object
		  $response = $fb->get('/me?fields=id,name', $accessToken);
		  $_SESSION['loginUser'] = $response->getGraphObject()->getProperty("name");
		  $_SESSION['faceID'] = $response->getGraphObject()->getProperty("id");
		} catch(Exception $e) {
		  echo 'Facebook SDK returned an error: ' . $e->getMessage();
		}
		}
	}
*/
	?>