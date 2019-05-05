<?php

require 'conexion.php';

$Ucorreo = $_POST['Ucorreo'];

$consulta= "SELECT * FROM usuarios WHERE Ucorreo='$Ucorreo'";
$resultado = mysqli_query($conexion, $consulta);
$row = mysqli_fetch_array($resultado);

if($row > 0) {
    $msg = "Tu contraseña es: ".$row[1];
    mail ($row[7], "Mi titulo", $msg);
    }
    else {
        echo "No se encontro ninguna coinsidencia";
    }

    



	













