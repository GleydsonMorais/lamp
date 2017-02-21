<?php

	session_start();
	
	if ((!isset ($_SESSION['loginUser']) == true) and (!isset ($_SESSION['passwordUser']) == true)) {
		
		unset($_SESSION['loginUser']);
		unset($_SESSION['senhaUser']);
		header('location: index.php');
	}

	$logado = $_SESSION['nameUser'];
	$referenciaAutor = $_SESSION['loginUser'];
?>

<?php require("headUser.php"); ?>

	<div class="container">

		<form id="formUpload" name="formUpload" action="../DAO/validaUpload.php?autorEmailUpload=<?=$referenciaAutor;?>&autorNameUpload=<?=$logado;?>" method="post" enctype="multipart/form-data">

			<h2 class="form-signin-heading">Upload</h2>

			<div class="form-group">

				<label for="tituloUploadUser">Título</label>
				<input type="text" id="tituloUploadUser" name="tituloUploadUser" class="form-control" placeholder="*Digite aqui o título da Imagem" required>
			</div>

			<div class="form-group">

				<label for="imagemUpload">Imagem</label>
				<input type="file" id="imagemUpload" name="imagemUpload" accept="image/*" class="form-control" required>
			</div>

			<div class="form-group">

				<label for="descricaoUploadUser">Descrição</label>
				<textarea id="descricaoUploadUser" name="descricaoUploadUser" rows="5" class="form-control" placeholder="*Digite aqui a descrição da Imagem" required></textarea>
			</div>

			<div class="form-group">

				<label for="appUploadUser">Aplicativo</label><br>
				<input type="text" id="appUploadUser" name="appUploadUser" class="form-control" placeholder="*Digite aqui o Aplicativo da Imagem" required>
			</div>

			<div class="form-group">

				<label for="soUploadUser">Sistema Operacional</label><br>
				<input type="radio" id="soUploadUser" name="soUploadUser" value="Android" checked> Android<br>
				<input type="radio" id="soUploadUser" name="soUploadUser" value="IOS"> IOS
			</div>		

			<button class="btn btn-lg btn-primary btn-block" type="submit">Send</button>
		</form>
	</div> <!-- /container -->

<?php require("../footer.php"); ?>