<?php

/** functions to help with facebook login **/


	function isFirstTime($con, $face_id) {
		try { 
			$sql = "SELECT * FROM facebook_user WHERE facebook_id = '$face_id'";
			$result = mysqli_query($con, $sql);
			if(!(mysqli_num_rows($result) > 0)) // true if the user is not in the database
				return true;
			else 
				return false; // false otherwise
		} catch (Exception $e) {
		}
	}
	
	function saveNewFacebookUser($con, $face_id, $face_name) {
		try {
			$sql = "INSERT INTO facebook_user (facebook_id, name) VALUES ('$face_id', '$face_name')";
			$ret=  mysqli_query($con, $sql);
			var_dump( $ret );
		} catch (Exception $e) {
			var_dump( $e );
		}
	}


?>