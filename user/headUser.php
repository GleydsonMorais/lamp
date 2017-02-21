<?php
	
	$referenciaAutor = $_SESSION['loginUser'];
?>

<!DOCTYPE html>
<html lang="pt-br">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
		<title>Teste Topicos</title>

		<!-- Bootstrap -->
		<link href="../css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
    	<link href="../css/navbar.css" rel="stylesheet">

		<!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
		<script src="../js/bootstrap.min.js"></script>

		<!--SCROLL INFINITO-->
    	<meta http-equiv="Content-Type" content="text/html">
		<link rel="stylesheet" href="../css/style.css">
		<script type="text/javascript" src="../js/jquery-ias.min.js"></script>
	    <script type="text/javascript">
	        $(document).ready(function() {
	        	// Infinite Ajax Scroll configuration
	            jQuery.ias({
	                container : '.containerScroll', // main container where data goes to append
	                item: '.itemScroll', // single items
	                pagination: '.navScroll', // page navigation
	                next: '.navScroll a', // next page selector
	                loader: '<img src="../css/ajax-loader.gif"/>', // loading gif
	                triggerPageThreshold: 9999 // show load more if scroll more than this
	            });
	        });
	    </script>
	</head>

	<body>

		<!--MENU TOP-->
		<nav class="navbar navbar-default">

			<div class="container">

				<div class="navbar-header">

					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<div id="navbar" class="navbar-collapse collapse">

					<ul class="nav navbar-nav">

						<li><a href="index.php">Inicio</a></li>
						<li><a href="minhasImagens.php?valorPesquisa=<?='minhasImagens';?>&autorUpload=<?=$referenciaAutor;?>">Minhas Imagens</a></li>
						<li><a href="upload.php">Upload</a></li>
					</ul>

					<ul class="nav navbar-nav navbar-right">

						<li><a href="../DAO/logoff.php"><span class="glyphicon glyphicon-log-out"></span> Logoff</a></li>
					</ul>
				</div>
			</div>
		</nav>