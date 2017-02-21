<?php

	session_start();
	
	if ((!isset ($_SESSION['loginUser']) == true) and (!isset ($_SESSION['passwordUser']) == true)) {
		
		unset($_SESSION['loginUser']);
		unset($_SESSION['senhaUser']);
		header('location: index.php');
	}

	$logado = $_SESSION['nameUser'];
?>

<?php require("headAdmin.php"); ?>

	<div class="container containerScroll">

		Pagina Principal do ADMIN
	</div>

<?php require("../footer.php"); ?>