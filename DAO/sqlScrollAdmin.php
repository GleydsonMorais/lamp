<?php

	require("conect.php");
	
	//Dados enviados pela URL
	$valorDaPesquisa = $_GET["valorPesquisa"];

	$page = (int) (!isset($_GET['p'])) ? 1 : $_GET['p'];

	if ($valorDaPesquisa == "validados") {
		
		# sql query CARDS VALIDAOS
		$sql = "SELECT * FROM files WHERE validation = 1 ORDER BY id DESC";
	}else if ($valorDaPesquisa == "naoValidados") {
		
		# sql query CARDS NÂO VALIDADOS
		$sql = "SELECT * FROM files WHERE validation = 2 ORDER BY id DESC";
	}else {
		
		# sql query CARDS A SEREM VALIDADOS
		$sql = "SELECT * FROM files WHERE validation = 0 ORDER BY id DESC";
	}

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