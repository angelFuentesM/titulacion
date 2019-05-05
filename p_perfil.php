<?php
require 'conexion.php';

if (isset($_POST['buscar'])) {
$filtro = $_POST['ciclo'];

//Consulta hombres en un ciclo//
$con= "SELECT * FROM egresado WHERE sexo='M' AND ciclo= '$filtro'";
$re = $conexion->query($con);
$hombres = $re->num_rows;

//Consulta mujeres en un ciclo
$con1= "SELECT * FROM egresado WHERE sexo='F' AND ciclo= '$filtro'";
$re1 = $conexion->query($con1);
$mujeres = $re1->num_rows;


$hm = $hombres + $mujeres; //Suma de hombres y mujeres//
$porh = $hombres * 100 / $hm; //porcentaje de hombres en un ciclos
$porm = $mujeres * 100 / $hm; //Porcentaje de mujeres en un ciclo
$spor = $porh + $porm;

//Consulta hombre no titulados en un ciclo//
$con2= "SELECT * FROM egresado WHERE titulado= '0' AND sexo='M' AND ciclo= '$filtro'";
$re2 = $conexion->query($con2);
$hnt = $re2->num_rows;

//Consulta hombres titulados en un ciclo//
$con3= "SELECT * FROM egresado WHERE sexo='M' AND titulado='1' AND ciclo= '$filtro'";
$re3 = $conexion->query($con3);
$ht = $re3->num_rows;

//Consulta mujeres tituladas en un ciclo//
$con4= "SELECT * FROM egresado WHERE sexo='F' AND titulado='1' AND ciclo= '$filtro'";
$re4 = $conexion->query($con4);
$mt = $re4->num_rows;

//Consulta mujeres no tituladas en un ciclo//
$con5= "SELECT * FROM egresado WHERE sexo='F' AND titulado='0' AND ciclo= '$filtro'";
$re5 = $conexion->query($con5);
$mnt = $re5->num_rows;

$hmt = $ht + $mt; //Suma de mujeres y hombres titulados//
$hmnt = $hnt + $mnt; //Suma de hombres y mujeres no titulados//

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
  <link rel="stylesheet" href="css/tablab.css">
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
            <a class="nav-link active" href="Ad_admon.php">Administrador</a>
          </li>
                    <li class="nav-item">
                  <a class="nav-link" href="Ad_ciclos.php">Ciclos</a>
                </li>

          <li class="nav-item">
            <a class="nav-link" href="Ad_carrera.php">Carrera</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

        <form class="form-inline my-2 my-lg-0" method="POST" action="p_perfil.php">
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

  <div class="container" ><!--contenedor general-->

        <div class="row">
            <div class="col-9"> <!--columna sexo-->
            <fieldset>
            <legend class="leyenda"><span class="numero">P</span>I. PERFIL DEL EGRESADO</legend>
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
                  <th scope="col">SEXO</th>
                  <th scope="col">Numero</th>
                  <th scope="col">Porcentaje %</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Masculino</th>
                  <td><?php echo "$hombres"?></td>
                  <td><?php echo "$porh"?>%</td>

                </tr>
                <tr>
                  <th scope="row">Femenino</th>
                  <td><?php echo "$mujeres"?></td>
                  <td><?php echo "$porm"?>%</td>

                </tr>
                <tr>
                  <th scope="row">Total</th>
                  <td><?php echo "$hm"?></td>
                  <td><?php echo "$spor"?>%</td>

                </tr>
              </tbody>
            </table>
        </div>
                <div class="col">
        <table class="table table-sm table-bordered"> <!--Tabla 02 Titulado-->
  <thead>
    <tr class="table-warning">
      <th scope="col">TITULADO</th>
      <th scope="col">SI</th>
      <th scope="col">NO</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Masculino</th>
      <td><?php echo "$ht"?></td>
      <td><?php echo "$hnt"?></td>
    </tr>
    <tr>
      <th scope="row">Femenino</th>
      <td><?php echo "$mt"?></td>
      <td><?php echo "$mnt"?></td>
    </tr>
    <tr>
      <th scope="row">Total</th>
      <td><?php echo "$hmt"?></td>
      <td><?php echo "$hmnt"?></td>

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
