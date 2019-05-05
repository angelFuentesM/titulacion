<?php 
//conexion a la base de datos//
$conexion = mysqli_connect("localhost", "root", "", "egresados");
 mysqli_set_charset($conexion, "utf8");

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}