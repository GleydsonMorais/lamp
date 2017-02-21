<?php

	//Dados envidos pelo usuario - CADASTRO DE USUARIO
	$nomeUsuario = $_POST['inputNameUser'];
	$emailUsuario = $_POST['inputEmailUser'];
	$senhaUsuario = $_POST['inputPasswordUser'];

    //chama função para conectar ao banco de dados
    require("conect.php");

	$query_select = "SELECT email FROM user WHERE email = '$emailUsuario'";
	$select = mysqli_query($conect, $query_select);
	$array = mysqli_fetch_array($select);
	$emailArray = $array['email'];


    if($emailArray == $emailUsuario){

        echo"<script language='javascript' type='text/javascript'>alert('Esse email ja esta cadastrado');window.location.href='../login.php';</script>";
    }else{

        $query = "INSERT INTO user (email, password, name, id) VALUES ('$emailUsuario','$senhaUsuario','$nomeUsuario','2')";
        $insert = mysqli_query($conect, $query);
         
        if($insert){
            echo"<script language='javascript' type='text/javascript'>alert('Usuario cadastrado com sucesso!');window.location.href='../index.php'</script>";
        }else{
            echo"<script language='javascript' type='text/javascript'>alert('Não foi possivel cadastrar esse usuario');window.location.href='../login.php'</script>";
        }
    }



?>