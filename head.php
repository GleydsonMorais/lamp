<!DOCTYPE html>
<html lang="pt-br">

	<head>
		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
		<title>Teste Topicos</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
    	<link href="css/navbar.css" rel="stylesheet">

    	<!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
		<script src="js/bootstrap.min.js"></script>

    	<!--SCROLL INFINITO-->
    	<meta http-equiv="Content-Type" content="text/html">
		<link rel="stylesheet" href="css/style.css">
		<script type="text/javascript" src="js/jquery-ias.min.js"></script>
	    <script type="text/javascript">
	        $(document).ready(function() {
	        	// Infinite Ajax Scroll configuration
	            jQuery.ias({
	                container : '.containerScroll', // main container where data goes to append
	                item: '.itemScroll', // single items
	                pagination: '.navScroll', // page navigation
	                next: '.navScroll a', // next page selector
	                loader: '<img src="css/ajax-loader.gif"/>', // loading gif
	                triggerPageThreshold: 9999 // show load more if scroll more than this
	            });
	        });
	    </script>

		<!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
		<!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
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

						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Contact</a></li> 
					</ul>

					<ul class="nav navbar-nav navbar-right">

						<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					</ul>
				</div>
			</div>
		</nav>