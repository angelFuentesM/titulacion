<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilosf.css">
	<link rel="stylesheet" href="css/estilosheader.css">
</head>

<body>

	<?php
	require 'conexion.php';
	session_start();

	$Ucorreo = $_POST['Ucorreo'];
	$nucontrol = $_POST['nucontrol'];
	$_SESSION['nucontrol'] = $_POST['nucontrol'];



	$query = "SELECT * FROM egresado WHERE control='$nucontrol'";
	$result = mysqli_query($conexion, $query);
	$rows = mysqli_fetch_array($result, MYSQLI_NUM);

	if ($rows > 1) {
		header("refresh:9; url=login.php");
		echo " <br>
    <div class='container'>
    <div class='row align-items-center'>
    <div class='col-md-6 offset-md-3'>
    <div class='alert alert-danger' role='alert'>
    <h4 class='alert-heading'>Hola de nuevo $rows[2]!</h4>
    <p>Tenemos almacenado un registro con los datos del formulario ya contestado, por el momento solo requerimos esa informacion, Gracias. </p>
    <hr>
    <p class='mb-0'>Esta pagina se reedireccionara automaticamente.</p>
    </div> 	
    </div>
    </div>
    </div>";
	} else {

		$consulta = "SELECT * FROM usuarios WHERE Ucorreo='$Ucorreo' AND nucontrol='$nucontrol'";
		$resultado = mysqli_query($conexion, $consulta);
		$row = mysqli_fetch_array($resultado, MYSQLI_NUM);

		if ($row > 0 and $row[6] == 0) {
			header("location:/formulario/Admon.php");
		} elseif ($row > 0 and $row[6] == 1) {
			header("location:/formulario/index.php");
			
		} elseif ($row < 1) {				
		}
		mysqli_free_result($resultado);
	}
	mysqli_free_result($result);
	mysqli_close($conexion);
	?>

</body>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/valores.js"></script>
<script src="js/ocultar.js"></script>
<script src="js/solonumero.js"></script>
<script src="js/validar.js"></script>

</html>