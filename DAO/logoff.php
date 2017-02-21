<?php

	session_start();

	unset ($_SESSION['loginUser']);
	unset ($_SESSION['passwordUser']);
	header('location: ../index.php');
?>