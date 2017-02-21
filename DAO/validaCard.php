<?php

	$idURL = $_GET["idPassado"];
	$valor = $_GET["valor"];
	$valorValidacao = "1";

	//chama função para conectar ao banco de dados
    require("conect.php");

    if ($valor == "validar") {
    	
    	$sql = "UPDATE files SET validation = '1' WHERE id = $idURL";
	    $query = mysqli_query($conect, $sql);

	    if($query){

	        echo"<script language='javascript' type='text/javascript'>alert('Imagem validade com sucesso!');window.location.href='../admin/paraValidar.php'</script>";
	    }else{

	        echo"<script language='javascript' type='text/javascript'>alert('Imagem não Validada!');window.location.href='../admin/paraValidar.php'</script>";
	    }
    } else if ($valor == "naoValidar") {
    	
    	$sql = "UPDATE files SET validation = '2' WHERE id = $idURL";
	    $query = mysqli_query($conect, $sql);

	    if($query){

	        echo"<script language='javascript' type='text/javascript'>alert('Imagem validade com sucesso!');window.location.href='../admin/paraValidar.php'</script>";
	    }else{

	        echo"<script language='javascript' type='text/javascript'>alert('Imagem não Validada!');window.location.href='../admin/paraValidar.php'</script>";
	    }
    }

    
?>