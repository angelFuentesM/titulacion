<?php

require 'conexion.php';
session_start();

$Ucorreo = $_POST['Ucorreo'];
$nucontrol = $_POST['nucontrol'];

$_SESSION['nucontrol']= $_POST['nucontrol'];


	$query= "SELECT * FROM egresado WHERE control='$nucontrol'";
	$result = mysqli_query($conexion, $query);
	$rows = mysqli_fetch_array($result, MYSQLI_NUM);
	
	if ($rows > 1) {
		header("refresh:0; url=login.php");     
    echo '<script language="javascript">alert("!Ya ha contestado el formulario");</script>';
	} 
	else {

	$consulta= "SELECT * FROM usuarios WHERE Ucorreo='$Ucorreo' AND nucontrol='$nucontrol'";
	$resultado = mysqli_query($conexion, $consulta);
	$row = mysqli_fetch_array($resultado, MYSQLI_NUM);

	if ($row > 0 and $row[6] == 0) {	
		header("location:/formulario/Ad_egresados.php");	

	} elseif ($row > 0 and $row[6] == 1) {
		header("location:/formulario/index.php");
	} else {

		header("location:/formulario/login.php");
	}
	mysqli_free_result ( $resultado);
	}
	mysqli_free_result ( $result);
	mysqli_close ( $conexion );
