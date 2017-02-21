<?php

	session_start();
	
	if ((!isset ($_SESSION['loginUser']) == true) and (!isset ($_SESSION['passwordUser']) == true)) {
		
		unset($_SESSION['loginUser']);
		unset($_SESSION['senhaUser']);
		header('location: index.php');
	}

	$logado = $_SESSION['nameUser'];
?>

<?php require("../DAO/sqlScrollUser.php") ?>

<?php require("headUser.php"); ?>

	<div class="container containerScroll">

		<!-- LOOP SCROLL INFINITO -->
		<?php while ($row = mysqli_fetch_array($query)): ?>

		<?php if ($row['validation'] == 1) { ?>

			<div class="itemScroll col-md-6 col-md-offset-3 img-thumbnail" style="margin-bottom: 5px; background: #00FF7F;" id="itemScroll-<?php echo $row['id']?>">
		<?php }else if ($row['validation'] == 2) { ?>

			<div class="itemScroll col-md-6 col-md-offset-3 img-thumbnail" style="margin-bottom: 5px; background: #FF0000;" id="itemScroll-<?php echo $row['id']?>">
		<?php }else { ?>

			<div class="itemScroll col-md-6 col-md-offset-3 img-thumbnail" style="margin-bottom: 5px;" id="itemScroll-<?php echo $row['id']?>">
		<?php } ?>

				<h4>
					<span class="tituloScroll"><?php echo $row['titulo']?></span>
				</h4>

				<!--Descição da Imagem-->
				<span class="descricaoScroll"><?php echo $row['descricao']?></span>		

				<img class="img-responsive img-rounded" src="../<?php echo $row['image']?>">

				<!--Aplicativo-->
				<kbd><span class="appScroll"><?php echo $row['app']?></span></kbd>

				<!--Sistema Operacional-->
				<kbd><span class="soScroll"><?php echo $row['so']?></span></kbd>

				<!--Autor-->
				<kbd><span class="autorScroll"><?php echo $row['authorName']?></span></kbd>
			</div>
		<?php endwhile?>

		<!--page navigation-->
		<?php if (isset($next)): ?>
		<div class="navScroll">
			<a href='minhasImagens.php?p=<?php echo $next?>'>Next</a>
		</div>
		<?php endif?>
	</div><!--.wrap-->

<?php require("../footer.php"); ?>