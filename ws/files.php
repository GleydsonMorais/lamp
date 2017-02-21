<?php

$servername = "localhost";
$username = "root";
$password = "";
try {
    $conn = new PDO("mysql:host=$servername;dbname=bd_testetopicos", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e) {
    $status = $e->getCode();
	$count = 0;
	$files = null;
	$errors = $e->errorInfo;
	print_r($e->getMessage());
	exit();
}

// Check parameters
$files = Array(); $status = "ok"; $errors = ""; $count = 0;
$params = Array();
$query = "SELECT * FROM files WHERE 1=1 ";
if( isset( $_GET["id"] ) )
	if ( ($id = $_GET["id"] ) != null){
		// TODO
		if(!is_numeric($id)){
			$errors = "ID is not a number";
			$status = "fail";
		}
		if(!($id >= 0)){
				$errors = "ID is a negative number";
				$status = "fail";
		}
		$query .= ' AND id = :id ';
		$params["id"] = $id;
	}
if( isset( $_GET["option1"] ) )
	if ( ($op1 = $_GET["option1"] ) != null){
		$query .= ' AND option1 = :opt1 ';
		$params["option1"] = $op1;
	}
if( isset( $_GET["option2"] ) )
	if ( ($op2 = $_GET["option2"] ) != null){
		$query .= ' AND option2 = :opt2 ';
		$params["option2"] = $op2;
	}
if( isset( $_GET["option3"] ) )
	if ( ($op3 = $_GET["option3"] ) != null){
		$query .= ' AND option3 = :opt3 ';
		$params["option3"] = $op3;
	}
if( isset( $_GET["validation"] ) )
	if( ($validation = $_GET["validation"] ) != null ){
		$query .= ' AND validation = :validation ';
		$params["validation"] = $validation;
	}
	


try{
	// Preparing and executing query
	$statement = $conn->prepare( $query );
	$statement->execute($params);
	// Building result array
	$count = $statement -> rowCount ();
	if ( ( $rows = $statement->fetchAll(PDO::FETCH_ASSOC) ))
		$files = $rows;
}
catch(PDOException $e){
	$status = $e->getCode();
	$errors = $e->errorInfo;
}
	
$array_result = Array("status" => $status, "count" => $count, "files" => $files, "errors" => $errors);
$json_result = json_encode($array_result);
//echo $json_result;
echo "<pre>";print_r(json_decode($json_result));echo"</pre>";
	
?>