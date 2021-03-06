<?php
session_start();

require_once __DIR__ . '/../libs/Facebook/autoload.php';
require_once __DIR__ . '/../DAO/facebook_connect.php';

// oferecer botão de login

$fb = new Facebook\Facebook([
		'app_id'                => '1827241580852645',
		'app_secret'            => 'f1fb1fa19cc2f436e4ba4950190eca6e']);

$helper = $fb->getRedirectLoginHelper();
$permissions = array('email', 'user_likes'); // optional


try {
	$accessToken = $helper->getAccessToken();
} catch(Exception $e) {
	// When validation fails or other local issues
	//echo 'Facebook SDK returned an error: ' . $e->getMessage();
}

if (isset($accessToken)) {
	try {
		// saves the data of the object in the session
		$response = $fb->get('/me?fields=id,name', $accessToken);
		
		$face_id = $response->getGraphObject()->getProperty("id");
		$face_name = $response->getGraphObject()->getProperty("name");
		
		$_SESSION['loginUser'] = $face_id;
		$_SESSION['faceID'] = $face_name;
		
		// checks whether user has already signed in using facebook or not

		if(isFirstTime($conect, $face_id)) {
			saveNewFacebookUser($conect, $face_id, $face_name);
		} 	
		 
	} catch(Exception $e) {
		//echo 'Facebook SDK returned an error: ' . $e->getMessage();
	}
}

$loginUrl = $helper->getLoginUrl('http://hercilomedeiros.com.br/lamp/user/', $permissions);

?>
