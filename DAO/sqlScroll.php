<?php

	require("conect.php");

	$page = (int) (!isset($_GET['p'])) ? 1 : $_GET['p'];

	# sql query
	$sql = "SELECT * FROM files WHERE validation = 1 ORDER BY id DESC";

	# find out query stat point
	$start = ($page * $limit) - $limit;

	# query for page navigation
	if( mysqli_num_rows(mysqli_query($conect, $sql)) > ($page * $limit) ){
		$next = ++$page;
	}

	$query = mysqli_query( $conect,  $sql . " LIMIT {$start}, {$limit}");
	if (mysqli_num_rows($query) < 1) {
		header('HTTP/1.0 404 Not Found');
		echo 'Page not found!';
		exit();
	}
?>