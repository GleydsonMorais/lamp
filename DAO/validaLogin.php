<?php

	if (isset($_POST['inputEmailAdmin'])) {
		
		//Inicia a sessão
		session_start();

		//As variaveis recebem os dados digitados pelo usuario
		$loginUser = $_POST['inputEmailAdmin'];
		$passwordUser = $_POST['inputPasswordAdmin'];
		$nameUser = "";

		//chama função para conectar ao banco de dados
		require("conect.php");

		//Pesquisa no banco de dados os dados enviados pelo usuario
		$sql = "SELECT * FROM admin WHERE email = '$loginUser' AND password = '$passwordUser'";
		$result = mysqli_query($conect, $sql);

		if(mysqli_num_rows($result) > 0) {
			
			$_SESSION['loginUser'] = $loginUser;
			$_SESSION['passworduser'] = $passwordUser;

			while ($sql = mysqli_fetch_array($result)) {
				
				$nameUser = $sql['name'];
			}

			$_SESSION['nameUser'] = $nameUser;

			header('location: ../admin');
		} else {

			unset ($_SESSION['loginUser']);
			unset ($_SESSION['passwordUser']);
			header('location: ../index.php');
		}
	}

	if (isset($_POST['inputEmailUser'])) {
		
		//Inicia a sessão
		session_start();

		//As variaveis recebem os dados digitados pelo usuario
		$loginUser = $_POST['inputEmailUser'];
		$passwordUser = $_POST['inputPasswordUser'];
		$nameUser = "";

		//chama função para conectar ao banco de dados
		require("conect.php");

		//Pesquisa no banco de dados os dados enviados pelo usuario
		$sql = "SELECT * FROM user WHERE email = '$loginUser' AND password = '$passwordUser'";
		$result = mysqli_query($conect, $sql);

		if(mysqli_num_rows($result) > 0) {
			
			$_SESSION['loginUser'] = $loginUser;
			$_SESSION['passworduser'] = $passwordUser;

			while ($sql = mysqli_fetch_array($result)) {
				
				$nameUser = $sql['name'];
			}

			$_SESSION['nameUser'] = $nameUser;

			header('location: ../user');
		} else {

			unset ($_SESSION['loginUser']);
			unset ($_SESSION['passwordUser']);
			header('location: ../login.php');
		}
	}
?>