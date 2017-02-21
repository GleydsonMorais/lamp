<?php require("conect.php"); ?>

<?php

	//Dados envidos pelo usuario
	$tituloUpload_BD = $_POST['tituloUploadUser'];
	$descricaoUpload_BD = $_POST['descricaoUploadUser'];
	$appUpload_BD = $_POST['appUploadUser'];
	$soUpload_BD = $_POST['soUploadUser'];

	//Dados enviados pela URL
	$autorEmailDoUpload = $_GET["autorEmailUpload"];
	$autorNameDoUpload = $_GET["autorNameUpload"];

	//Diretorio onde seram salvos os arquivos
	$directoryUpload = "../files/";
	$directoryReal = "files/";

	//Propriedades do arquivo enviado
	$name = $_FILES["imagemUpload"]["name"];
	$type = $_FILES["imagemUpload"]["type"];
	$size = $_FILES["imagemUpload"]["size"];
	$temp = $_FILES["imagemUpload"]["tmp_name"];
	$error = $_FILES["imagemUpload"]["error"];
	
	if (move_uploaded_file($temp, $directoryUpload.$name)) {

		//Adiciona ao banco de dados os dados que o usuario passou
		$sql = "INSERT INTO `files`(`titulo`, `descricao`, `app`, `so`, `image`, `validation`, `authorEmail`, `authorName`) VALUES ('$tituloUpload_BD','$descricaoUpload_BD','$appUpload_BD','$soUpload_BD','$directoryReal$name','0','$autorEmailDoUpload','$autorNameDoUpload')";
		$query = mysqli_query($conect, $sql);

		if ($query) {
			
			echo"<script language='javascript' type='text/javascript'>alert('Upload feito com sucesso!');window.location.href='../user/upload.php'</script>";
		}else {

			echo"<script language='javascript' type='text/javascript'>alert('Falha no Upload. Tente de novo! 01');window.location.href='../user/upload.php'</script>";
		}
		
	} else {

		echo"<script language='javascript' type='text/javascript'>alert('Falha no Upload. Tente de novo! 02');window.location.href='../user/upload.php'</script>";
	}
?>