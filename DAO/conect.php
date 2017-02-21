<?php
	error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

	$bd['server']	= 'www.herciliomedeiros.com.br';
	$bd['login']	= 'herci539_lamp';
	$bd['password']	= 'lamp123';
	$bd['dataBase']	= 'herci539_LAMP';

	//Scroll Infinito
	$limit = 12; #item per page

	$conect = mysqli_connect($bd['server'], $bd['login'], $bd['password']) or die ("Sem conexão com o servidor");
	$select = mysqli_select_db( $conect, $bd['dataBase']) or die("Sem acesso ao DB, Entre em contato com o Administrador");
	
	//mysql_select_db($bd['dataBase'], $conect);
?>