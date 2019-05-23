<?php

error_reporting(E_ALL ^ E_NOTICE);
require 'conexion.php';

if (isset($_POST['buscar'])) {
$filtro = $_POST['ciclo'];


//Consulta eficiencia muy eficiente /////dp1 /////
$con = "SELECT de.dp1,egre.ciclo FROM desenpeno de
INNER JOIN egresado egre ON de.egresadoId = egre.egresadoId
WHERE dp1='Muy eficiente' AND ciclo= '$filtro'";
$re = $conexion->query($con);
$dp1me = $re->num_rows;

//Consulta eficiencia eficiente /////dp1 /////
$con1 = "SELECT de.dp1,egre.ciclo FROM desenpeno de
INNER JOIN egresado egre ON de.egresadoId = egre.egresadoId
WHERE dp1='Eficiente' AND ciclo= '$filtro'";
$re1 = $conexion->query($con1);
$dp1e = $re1->num_rows;

//Consulta eficiencia poco eficiente /////dp1 /////
$con2 = "SELECT de.dp1,egre.ciclo FROM desenpeno de
INNER JOIN egresado egre ON de.egresadoId = egre.egresadoId
WHERE dp1='Poco eficiente' AND ciclo= '$filtro'";
$re2 = $conexion->query($con2);
$dp1pe = $re2->num_rows;

//Consulta eficiencia poco eficiente /////dp1 /////
$con3 = "SELECT de.dp1,egre.ciclo FROM desenpeno de
INNER JOIN egresado egre ON de.egresadoId = egre.egresadoId
WHERE dp1='Deficiente' AND ciclo= '$filtro'";
$re3 = $conexion->query($con3);
$dp1d = $re3->num_rows;

$Tdp1 = $dp1me + $dp1e + $dp1pe + $dp1d;

//Consulta formacion Excelente /////dp2 /////
$con4 = "SELECT de.dp2,egre.ciclo FROM desenpeno de
INNER JOIN egresado egre ON de.egresadoId = egre.egresadoId
WHERE dp2='Exelente' AND ciclo= '$filtro'";
$re4 = $conexion->query($con4);
$dp2e = $re4->num_rows;

//Consulta eficiencia bueno /////dp2 /////
$con5 = "SELECT de.dp2,egre.ciclo FROM desenpeno de
INNER JOIN egresado egre ON de.egresadoId = egre.egresadoId
WHERE dp2='Bueno' AND ciclo= '$filtro'";
$re5 = $conexion->query($con5);
$dp2b = $re5->num_rows;

//Consulta eficiencia regular /////dp2 /////
$con6 = "SELECT de.dp2,egre.ciclo FROM desenpeno de
INNER JOIN egresado egre ON de.egresadoId = egre.egresadoId
WHERE dp2='Regular' AND ciclo= '$filtro'";
$re6 = $conexion->query($con6);
$dp2r = $re6->num_rows;

//Consulta eficiencia malo /////dp2 /////
$con7 = "SELECT de.dp2,egre.ciclo FROM desenpeno de
INNER JOIN egresado egre ON de.egresadoId = egre.egresadoId
WHERE dp2='Malo' AND ciclo= '$filtro'";
$re7 = $conexion->query($con7);
$dp2m = $re7->num_rows;

//Consulta eficiencia pesimo /////dp2 /////
$con8 = "SELECT de.dp2,egre.ciclo FROM desenpeno de
INNER JOIN egresado egre ON de.egresadoId = egre.egresadoId
WHERE dp2='Pesimo' AND ciclo= '$filtro'";
$re8 = $conexion->query($con8);
$dp2p = $re8->num_rows;

$Tdp2 = $dp2e + $dp2b + $dp2r + $dp2m + $dp2p;

//Consulta utilidad exelente/////dp3 /////
$con9 = "SELECT de.dp2,egre.ciclo FROM desenpeno de
INNER JOIN egresado egre ON de.egresadoId = egre.egresadoId
WHERE dp2='Exelente' AND ciclo= '$filtro'";
$re9 = $conexion->query($con9);
$dp3e = $re9->num_rows;

//Consulta utilidad bueno/////dp3 /////
$con10 = "SELECT de.dp2,egre.ciclo FROM desenpeno de
INNER JOIN egresado egre ON de.egresadoId = egre.egresadoId
WHERE dp2='Bueno' AND ciclo= '$filtro'";
$re10 = $conexion->query($con10);
$dp3b = $re10->num_rows;

//Consulta utilidad regular/////dp3 /////
$con11 = "SELECT de.dp2,egre.ciclo FROM desenpeno de
INNER JOIN egresado egre ON de.egresadoId = egre.egresadoId
WHERE dp2='Regular' AND ciclo= '$filtro'";
$re11 = $conexion->query($con11);
$dp3r = $re11->num_rows;

//Consulta utilidad malo/////dp3 /////
$con12 = "SELECT de.dp2,egre.ciclo FROM desenpeno de
INNER JOIN egresado egre ON de.egresadoId = egre.egresadoId
WHERE dp2='Malo' AND ciclo= '$filtro'";
$re12 = $conexion->query($con12);
$dp3m = $re12->num_rows;

//Consulta utilidad pesimo/////dp3 /////
$con13 = "SELECT de.dp2,egre.ciclo FROM desenpeno de
INNER JOIN egresado egre ON de.egresadoId = egre.egresadoId
WHERE dp2='Pesimo' AND ciclo= '$filtro'";
$re13 = $conexion->query($con13);
$dp3p = $re13->num_rows;

$Tdp3 = $dp3e + $dp3b + $dp3r + $dp3m + $dp3p;

}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/estilosf.css">
        <link rel="stylesheet" href="css/estilosheader.css">
        <link rel="stylesheet" href="css/tablab.css.css">
    </head>

<body>

  <div class="text-center">
    <header>
      <div class="logo">
        <img src="imagenes/bannerb.png" width="1024" class="logo">
      </div>
    </header>
  </div>

  <div class="container">
    <!--Iinica Barra de Navegacion-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="Admon.php">Navbar</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="Ad_egresados.php">Egresados <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="Ad_admon.php">Administrador</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Ad_ciclos.php">Ciclos</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="Ad_carrera.php">Carrera</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Indicadores
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="p_perfil.php">I. Perfil del egresado</a>
              <a class="dropdown-item" href="p_pertenencia.php">II. Pertenencia</a>
              <a class="dropdown-item" href="p_ubicacion.php">III. Ubicacion laboral</a>
              <a class="dropdown-item active" href="p_desempeno.php">IV. Desempeño profesional</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="form_ind.php">Formularios</a>
              <a class="dropdown-item" href="encuestados.php">Encuestados</a>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="cerrar_s.php">Cerrar secion</a>
          </li>
        </ul>

        <form class="form-inline my-2 my-lg-0" method="POST" action="p_desempeno.php">
         <select name="ciclo" class="form-control mr-sm-2">
          <option value="">Seleccione Ciclo</option>
          <?php
          $consultac = "SELECT * FROM ciclos";
          $resultadociclo = $conexion->query($consultac);
          while ($regCiclos = $resultadociclo->fetch_array(MYSQLI_BOTH)) {
           echo'<option value="'.$regCiclos['ciclo'].'">'.$regCiclos['ciclo'].'</option>';}
           ?>
         </select>
         <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="filtrar" name="buscar">
       </form>
     </div>
   </nav>
   <br>
   <!-- Termina Barra de Navegacion-->
   
    <div class="row">
      <div class="col-9"> 
        <fieldset>
          <legend class="leyenda"><span class="numero">D</span>IV. DESEMPEÑO PROFESIONAL DE LOS EGRESADOS</legend>
        </div>
        <div class="col-3">
         <legend class="leyenda"><span>Ciclo: </span><?php echo "$filtro" ?></legend>
       </div>
     </div>
     <br>

     <div class="row row justify-content-center">  
      <div class="col-10 "> <!--Tabla 01-->
        <h6>IV.1 Eficiencia para realizar las actividades laborales en relacion a su formacion academica</h6>
        <table class="table table-sm table-bordered "> <!--Tabla 0-->
          <thead> 
            <tr class="table-warning">
              <th scope="col"></th>
              <th scope="col">Muy eficiente</th>
              <th scope="col">Eficiente</th>
              <th scope="col">Poco eficiente</th>
              <th scope="col">Deficiente</th>
              <th scope="col">Total</th>
            </tr>
          </thead>
          <tbody>        
            <tr>
              <th scope="row">Total</th>
              <td><?php echo "$dp1me"?></td>
              <td><?php echo "$dp1e"?></td>
              <td><?php echo "$dp1pe"?></td>
              <td><?php echo "$dp1d"?></td>
              <td><?php echo "$Tdp1"?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-10"> 
       <h6>IV.2 Como califica su formacion academica con respecto a su desempeño laboral</h6>
       <table class="table table-sm table-bordered "> 
         <thead> 
           <tr class="table-warning">
             <th scope="col"></th>
             <th scope="col">Excelente</th>
             <th scope="col">Bueno</th>
             <th scope="col">Regular</th>
             <th scope="col">Malo</th>
             <th scope="col">Pesimo</th>
             <th scope="col">Total</th>
           </tr>
         </thead>
         <tbody>        
           <tr>
             <th scope="row">Total</th>
             <td><?php echo "$dp2e"?></td>
             <td><?php echo "$dp2b"?></td>
             <td><?php echo "$dp2r"?></td>
             <td><?php echo "$dp2m"?></td>
             <td><?php echo "$dp2p"?></td>
             <td><?php echo "$Tdp2"?></td>                  
           </tr>
         </tbody>
       </table>
     </div>
   </div>

   <div class="row justify-content-center">
    <div class="col-10"> 
     <h6>IV.3 Utilidad de las residencias profesionales o practicas profesionales para su desarrollo laboral y profesional</h6>
     <table class="table table-sm table-bordered "> 
       <thead> 
         <tr class="table-warning">
           <th scope="col"></th>
           <th scope="col">Excelente</th>
           <th scope="col">Bueno</th>
           <th scope="col">Regular</th>
           <th scope="col">Malo</th>
           <th scope="col">Pesimo</th>
           <th scope="col">Total</th>
         </tr>
       </thead>
       <tbody>        
         <tr>
           <th scope="row">Total</th>
           <td><?php echo "$dp3e"?></td>
           <td><?php echo "$dp3b"?></td>
           <td><?php echo "$dp3r"?></td>
           <td><?php echo "$dp3m"?></td>
           <td><?php echo "$dp3p"?></td>   
           <td><?php echo "$Tdp3"?></td>                
         </tr>
       </tbody>
     </table>
   </div>
 </div>
 
</div>
<br>

  <footer>
    <h6>Instituto Tecnologico Superior de Puerto Peñasco</h6>
  </footer>

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/valores.js"></script>
  <script src="js/ocultar.js"></script>
  <script src="js/solonumero.js"></script>

</body>
</html>
