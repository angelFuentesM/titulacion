<?php
require 'conexion.php';

if (isset($_POST['buscar'])) {
    $filtro = $_POST['ciclo']; 

    //Consulta Pertenencia  Muy buena /////pp1 /////
    $con = "SELECT per.pp1,egre.ciclo FROM Pertenencia per
    INNER JOIN egresado egre ON per.egresadoId =egre.egresadoId
    WHERE pp1='MB' AND ciclo= '$filtro'";
    $re = $conexion->query($con);
    $pp1mb = $re->num_rows;
    //Consulta Pertenencia Buena//
    $con1 = "SELECT per.pp1,egre.ciclo FROM Pertenencia per
    INNER JOIN egresado egre ON per.egresadoId =egre.egresadoId
    WHERE pp1='B' AND ciclo= '$filtro'";
    $re1 = $conexion->query($con1);
    $pp1b = $re1->num_rows;
    //Consulta Pertenencia Regular//
    $con2 = "SELECT per.pp1,egre.ciclo FROM Pertenencia per
    INNER JOIN egresado egre ON per.egresadoId =egre.egresadoId
    WHERE pp1='R' AND ciclo= '$filtro'";
    $re2 = $conexion->query($con2);
    $pp1r = $re2->num_rows;
    //Consulta Pertenencia Mala//
    $con3 = "SELECT per.pp1,egre.ciclo FROM Pertenencia per
    INNER JOIN egresado egre ON per.egresadoId =egre.egresadoId
    WHERE pp1='M' AND ciclo= '$filtro'";
    $re3 = $conexion->query($con3);
    $pp1m = $re3->num_rows;

    $sumpp1 = $pp1mb + $pp1b + $pp1r + $pp1m; //Suma horizontal pp1//

    //Consulta Pertenencia  Muy buena /////pp2 /////
    $con4 = "SELECT per.pp2,egre.ciclo FROM Pertenencia per
    INNER JOIN egresado egre ON per.egresadoId =egre.egresadoId
    WHERE pp2='MB' AND ciclo= '$filtro'";
    $re4 = $conexion->query($con4);
    $pp2mb = $re4->num_rows;
    //Consulta Pertenencia Buena//
    $con5 = "SELECT per.pp2,egre.ciclo FROM Pertenencia per
    INNER JOIN egresado egre ON per.egresadoId =egre.egresadoId
    WHERE pp2='B' AND ciclo= '$filtro'";
    $re5 = $conexion->query($con5);
    $pp2b = $re5->num_rows;
    //Consulta Pertenencia Regular//
    $con6 = "SELECT per.pp2,egre.ciclo FROM Pertenencia per
    INNER JOIN egresado egre ON per.egresadoId =egre.egresadoId
    WHERE pp2='R' AND ciclo= '$filtro'";
    $re6 = $conexion->query($con6);
    $pp2r = $re6->num_rows;
    //Consulta Pertenencia Mala//
    $con7 = "SELECT per.pp2,egre.ciclo FROM Pertenencia per
    INNER JOIN egresado egre ON per.egresadoId =egre.egresadoId
    WHERE pp2='M' AND ciclo= '$filtro'";
    $re7 = $conexion->query($con7);
    $pp2m = $re7->num_rows;

    $sumpp2 = $pp2mb + $pp2b + $pp2r + $pp2m; //Suma horizontal pp2//

    //Consulta Pertenencia  Muy buena /////pp3 /////
$con8 = "SELECT per.pp3,egre.ciclo FROM Pertenencia per
    INNER JOIN egresado egre ON per.egresadoId =egre.egresadoId
    WHERE pp3='MB' AND ciclo= '$filtro'";
$re8 = $conexion->query($con8);
$pp3mb = $re8->num_rows;
//Consulta Pertenencia Buena//
$con9 = "SELECT per.pp3,egre.ciclo FROM Pertenencia per
    INNER JOIN egresado egre ON per.egresadoId =egre.egresadoId
    WHERE pp3='B' AND ciclo= '$filtro'";
$re9 = $conexion->query($con9);
$pp3b = $re9->num_rows;
//Consulta Pertenencia Regular//
$con10 = "SELECT per.pp3,egre.ciclo FROM Pertenencia per
    INNER JOIN egresado egre ON per.egresadoId =egre.egresadoId
    WHERE pp3='R' AND ciclo= '$filtro'";
$re10 = $conexion->query($con10);
$pp3r = $re10->num_rows;
//Consulta Pertenencia Mala//
$con11 = "SELECT per.pp3,egre.ciclo FROM Pertenencia per
    INNER JOIN egresado egre ON per.egresadoId =egre.egresadoId
    WHERE pp3='M' AND ciclo= '$filtro'";
$re11 = $conexion->query($con11);
$pp3m = $re11->num_rows;

$sumpp3 = $pp2mb + $pp2b + $pp2r + $pp2m; //Suma horizontal pp3//

//Consulta Pertenencia  Muy buena /////pp4 /////
$con12 = "SELECT per.pp4,egre.ciclo FROM Pertenencia per
    INNER JOIN egresado egre ON per.egresadoId =egre.egresadoId
    WHERE pp4='MB' AND ciclo= '$filtro'";
$re12 = $conexion->query($con12);
$pp4mb = $re12->num_rows;
//Consulta Pertenencia Buena//
$con13 = "SELECT per.pp4,egre.ciclo FROM Pertenencia per
    INNER JOIN egresado egre ON per.egresadoId =egre.egresadoId
    WHERE pp4='B' AND ciclo= '$filtro'";
$re13 = $conexion->query($con13);
$pp4b = $re13->num_rows;
//Consulta Pertenencia Regular//
$con14 = "SELECT per.pp4,egre.ciclo FROM Pertenencia per
    INNER JOIN egresado egre ON per.egresadoId =egre.egresadoId
    WHERE pp4='R' AND ciclo= '$filtro'";
$re14 = $conexion->query($con14);
$pp4r = $re14->num_rows;
//Consulta Pertenencia Mala//
$con15 = "SELECT per.pp4,egre.ciclo FROM Pertenencia per
    INNER JOIN egresado egre ON per.egresadoId =egre.egresadoId
    WHERE pp4='M' AND ciclo= '$filtro'";
$re15 = $conexion->query($con15);
$pp4m = $re15->num_rows;

$sumpp4 = $pp4mb + $pp4b + $pp4r + $pp4m; //Suma horizontal pp4//

//Consulta Pertenencia  Muy buena /////pp5 /////
$con16 = "SELECT per.pp5,egre.ciclo FROM Pertenencia per
    INNER JOIN egresado egre ON per.egresadoId =egre.egresadoId
    WHERE pp5='MB' AND ciclo= '$filtro'";
$re16 = $conexion->query($con16);
$pp5mb = $re16->num_rows;
//Consulta Pertenencia Buena//
$con17 = "SELECT per.pp5,egre.ciclo FROM Pertenencia per
    INNER JOIN egresado egre ON per.egresadoId =egre.egresadoId
    WHERE pp5='B' AND ciclo= '$filtro'";
$re17 = $conexion->query($con17);
$pp5b = $re17->num_rows;
//Consulta Pertenencia Regular//
$con18 = "SELECT per.pp5,egre.ciclo FROM Pertenencia per
    INNER JOIN egresado egre ON per.egresadoId =egre.egresadoId
    WHERE pp5='R' AND ciclo= '$filtro'";
$re18 = $conexion->query($con18);
$pp5r = $re18->num_rows;
//Consulta Pertenencia Mala//
$con19 = "SELECT per.pp5,egre.ciclo FROM Pertenencia per
    INNER JOIN egresado egre ON per.egresadoId =egre.egresadoId
    WHERE pp5='M' AND ciclo= '$filtro'";
$re19 = $conexion->query($con19);
$pp5m = $re19->num_rows;

$sumpp5 = $pp5mb + $pp5b + $pp5r + $pp5m; //Suma horizontal pp5//

//Consulta Pertenencia  Muy buena /////pp6 /////
$con20 = "SELECT per.pp6,egre.ciclo FROM Pertenencia per
    INNER JOIN egresado egre ON per.egresadoId =egre.egresadoId
    WHERE pp6='MB' AND ciclo= '$filtro'";
$re20 = $conexion->query($con20);
$pp6mb = $re20->num_rows;
//Consulta Pertenencia Buena//
$con21 = "SELECT per.pp6,egre.ciclo FROM Pertenencia per
    INNER JOIN egresado egre ON per.egresadoId =egre.egresadoId
    WHERE pp6='B' AND ciclo= '$filtro'";
$re21 = $conexion->query($con21);
$pp6b = $re21->num_rows;
//Consulta Pertenencia Regular//
$con22 = "SELECT per.pp6,egre.ciclo FROM Pertenencia per
    INNER JOIN egresado egre ON per.egresadoId =egre.egresadoId
    WHERE pp6='R' AND ciclo= '$filtro'";
$re22 = $conexion->query($con22);
$pp6r = $re22->num_rows;
//Consulta Pertenencia Mala//
$con23 = "SELECT per.pp6,egre.ciclo FROM Pertenencia per
    INNER JOIN egresado egre ON per.egresadoId =egre.egresadoId
    WHERE pp6='M' AND ciclo= '$filtro'";
$re23 = $conexion->query($con23);
$pp6m = $re23->num_rows;

$sumpp6 = $pp6mb + $pp6b + $pp6r + $pp6m; //Suma horizontal pp6//

/////Sumas Verticales /////

$muybuena = $pp1mb + $pp2mb + $pp3mb + $pp4mb + $pp5mb + $pp6mb;
$buena = $pp1b + $pp2b + $pp3b + $pp4b + $pp5b + $pp6b;
$regular = $pp1r + $pp2r + $pp3r + $pp4r + $pp5r + $pp6r;
$mala = $pp1m + $pp2m + $pp3m + $pp4m + $pp5m + $pp6m;

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
              <a class="dropdown-item" href="p_desempeno.php">III. Desempeño profesional</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="form_ind.php">Formularios</a>
              <a class="dropdown-item" href="encuestados.php">Encuestados</a>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="cerrar_s.php">Cerrar secion</a>
          </li>
        </ul>

        <!--Inicia formulario-->

        <form class="form-inline my-2 my-lg-0" method="POST" action="p_pertenencia.php">
         <select name="ciclo" class="form-control mr-sm-2">
          <option value="">Seleccione Ciclo</option>
          <?php
$consultac = "SELECT * FROM ciclos";
$resultadociclo = $conexion->query($consultac);
while ($regCiclos = $resultadociclo->fetch_array(MYSQLI_BOTH)) {
    echo '<option value="' . $regCiclos['ciclo'] . '">' . $regCiclos['ciclo'] . '</option>';}
?>
         </select>
            <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="filtrar" name="buscar">
        </form>
        </div>
    </nav>
    <br>
  <!-- Termina Barra de Navegacion-->

  <div class="container" ><!--contenedor general-->

        <div class="row">
            <div class="col-9"> <!--columna sexo-->
            <fieldset>
            <legend class="leyenda"><span class="numero">P</span>I. PERTINENCIA Y DISPONIBILIDAD DE MEDIOS Y RECURSOS PARA EL APRENDIZAJE</legend>
            </div>
            <div class="col-3">
             <legend class="leyenda"><span>Ciclo: </span><?php echo "$filtro" ?></legend>
            </div>
        </div>
        <br>

        <div class="row">
        <div class="col">
        <table class="table table-sm table-bordered"> <!--Tabla 01 Sexo-->
  <thead>
    <tr class="table-warning">
      <th scope="col">ASPECTO</th>
      <th scope="col">Muy buena</th>
      <th scope="col">Buena</th>
      <th scope="col">Regular</th>
      <th scope="col">Mala</th>
      <th scope="col">Total</th>


    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">II.I Calidad de los docentes</th>
      <td><?php echo "$pp1mb" ?></td>
      <td><?php echo "$pp1b" ?></td>
      <td><?php echo "$pp1r" ?></td>
      <td><?php echo "$pp1m" ?></td>
      <td><?php echo "$sumpp1" ?></td>
    </tr>

    <tr>
      <th scope="row">II.II Plan de Estudios</th>
      <td><?php echo "$pp2mb" ?></td>
      <td><?php echo "$pp2b" ?></td>
      <td><?php echo "$pp2r" ?></td>
      <td><?php echo "$pp2m" ?></td>
      <td><?php echo "$sumpp2" ?></td>
    </tr>

    <tr>
      <th scope="row">II.III Oportunidad de participar en proyectos de investigacion y desarrollo</th>
     <td><?php echo "$pp3mb" ?></td>
      <td><?php echo "$pp3b" ?></td>
      <td><?php echo "$pp3r" ?></td>
      <td><?php echo "$pp3m" ?></td>
      <td><?php echo "$sumpp3" ?></td>     
    </tr>

    <tr>
      <th scope="row">II.IV Enfasis que se le prestaba a la investigacion dentro del proceso de enseñanza</th>
      <td><?php echo "$pp4mb" ?></td>
      <td><?php echo "$pp4b" ?></td>
      <td><?php echo "$pp4r" ?></td>
      <td><?php echo "$pp4m" ?></td>
      <td><?php echo "$sumpp4" ?></td>
    </tr>

    <tr>
      <th scope="row">II.V Satisfaccion con las condiciones de estudio (infreestructura)</th>
       <td><?php echo "$pp5mb" ?></td>
      <td><?php echo "$pp5b" ?></td>
      <td><?php echo "$pp5r" ?></td>
      <td><?php echo "$pp5m" ?></td>
      <td><?php echo "$sumpp5" ?></td>
    </tr>

    <tr>
      <th scope="row">II.VI Experiencia obtenida a traves de la residencia profesional</th>        
      <td><?php echo "$pp6mb" ?></td>
      <td><?php echo "$pp6b" ?></td>
      <td><?php echo "$pp6r" ?></td>
      <td><?php echo "$pp6m" ?></td>
      <td><?php echo "$sumpp6" ?></td>
    </tr>

    <tr>
      <th scope="row">TOTAL</th>
      <td><?php echo "$muybuena" ?></td>
      <td><?php echo "$buena" ?></td>
      <td><?php echo "$regular" ?></td>
      <td><?php echo "$mala" ?></td>
      <td><?php echo "" ?></td>

    </tr>
  </tbody>
</table>
        </div>                
        </div>
</div>

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
