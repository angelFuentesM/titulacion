<?php
require 'conexion.php';

if (isset($_POST['buscar'])) {
$filtro = $_POST['ciclo'];

//up1 trabaja//
$con = "SELECT ub.up1,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up1='Trabaja' AND ciclo= '$filtro'";
$re = $conexion->query($con);
$trabaja = $re->num_rows;

$con1 = "SELECT ub.up1,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up1='Estudia' AND ciclo= '$filtro'";
$re1 = $conexion->query($con1);
$estudia = $re1->num_rows;

$con2 = "SELECT ub.up1,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up1='Estudia y Trabaja' AND ciclo= '$filtro'";
$re2 = $conexion->query($con2);
$et = $re2->num_rows;

$con3 = "SELECT ub.up1,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up1='No estudia Ni Trabaja' AND ciclo= '$filtro'";
$re3 = $conexion->query($con3);
$nn = $re3->num_rows;

$tup1 = $trabaja+$estudia+$et+$nn;

//up2 tiempo transcurrido para obtener el trabajo//
$con4 = "SELECT ub.up2,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up2='Antes de egresar' AND ciclo= '$filtro'";
$re4 = $conexion->query($con4);
$ade = $re4->num_rows;

$con5 = "SELECT ub.up2,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up2='Menos de seis meses' AND ciclo= '$filtro'";
$re5 = $conexion->query($con5);
$msm = $re5->num_rows;

$con6 = "SELECT ub.up2,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up2='Entre seis un año' AND ciclo= '$filtro'";
$re6 = $conexion->query($con6);
$esa = $re6->num_rows;

$con7 = "SELECT ub.up2,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up2='Mas de un año' AND ciclo= '$filtro'";
$re7 = $conexion->query($con7);
$mda = $re7->num_rows;

$tup2= $ade+$msm+$esa+$mda;

//up3//
$con8 = "SELECT ub.up3,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up3='Contactos' AND ciclo= '$filtro'";
$re8 = $conexion->query($con8);
$co = $re8->num_rows;

$con9 = "SELECT ub.up3,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up3='Residencias' AND ciclo= '$filtro'";
$re9 = $conexion->query($con9);
$re = $re9->num_rows;

$con10 = "SELECT ub.up3,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up3='Medios' AND ciclo= '$filtro'";
$re10 = $conexion->query($con10);
$me = $re10->num_rows;

$con11 = "SELECT ub.up3,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up3='Otro' AND ciclo= '$filtro'";
$re11 = $conexion->query($con11);
$ot = $re11->num_rows;

$con12 = "SELECT ub.up3,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up3='Bolsa ITSPP' AND ciclo= '$filtro'";
$re12 = $conexion->query($con12);
$bt = $re12->num_rows;

$tup3= $co+$re+$me+$ot;

//up5//
$con13 = "SELECT ub.up5,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up5='Ingles' AND ciclo= '$filtro'";
$re13 = $conexion->query($con13);
$in = $re13->num_rows;

$con14 = "SELECT ub.up5,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up5='Frances' AND ciclo= '$filtro'";
$re14 = $conexion->query($con14);
$fr = $re14->num_rows;

$con15 = "SELECT ub.up5,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up5='Aleman' AND ciclo= '$filtro'";
$re15 = $conexion->query($con15);
$al = $re15->num_rows;

$con16 = "SELECT ub.up5,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up5='Japones' AND ciclo= '$filtro'";
$re16 = $conexion->query($con16);
$ja = $re16->num_rows;

$con17 = "SELECT ub.up5,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up5='Otro' AND ciclo= '$filtro'";
$re17 = $conexion->query($con17);
$otr = $re17->num_rows;

$tup5= $in+$fr+$al+$ja+$otr;

//up7//
$con18 = "SELECT ub.up7,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up7='Menos 1 año' AND ciclo= '$filtro'";
$re18 = $conexion->query($con18);
$mu = $re18->num_rows;

$con19 = "SELECT ub.up7,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up7='Un año' AND ciclo= '$filtro'";
$re19 = $conexion->query($con19);
$ua = $re19->num_rows;

$con20 = "SELECT ub.up7,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up7='2 años' AND ciclo= '$filtro'";
$re20 = $conexion->query($con20);
$da = $re20->num_rows;

$con21 = "SELECT ub.up7,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up7='3 años' AND ciclo= '$filtro'";
$re21 = $conexion->query($con21);
$ta = $re21->num_rows;

$con22 = "SELECT ub.up7,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up7='Mas 3 años' AND ciclo= '$filtro'";
$re22 = $conexion->query($con22);
$mta = $re22->num_rows;

$tup7= $mu+$ua+$da+$ta+$mta;

//up8//
$con23 = "SELECT ub.up8,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up8='Menos de cinco' AND ciclo= '$filtro'";
$re23 = $conexion->query($con23);
$mc = $re23->num_rows;

$con24 = "SELECT ub.up8,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up8='Entre cinco y siete' AND ciclo= '$filtro'";
$re24 = $conexion->query($con24);
$ecs = $re24->num_rows;

$con25 = "SELECT ub.up8,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up8='Entre ocho y diez' AND ciclo= '$filtro'";
$re25 = $conexion->query($con25);
$eod = $re25->num_rows;

$con26 = "SELECT ub.up8,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up8='Mas de diez' AND ciclo= '$filtro'";
$re26 = $conexion->query($con26);
$mdd = $re26->num_rows;

$tup8= $mc + $ecs + $eod + $mdd;

//up9//
$con27 = "SELECT ub.up9,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up9='Tecnico' AND ciclo= '$filtro'";
$re27 = $conexion->query($con27);
$tec = $re27->num_rows;

$con28 = "SELECT ub.up9,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up9='Supervisor' AND ciclo= '$filtro'";
$re28 = $conexion->query($con28);
$sup = $re28->num_rows;

$con29 = "SELECT ub.up9,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up9='Jefe de area' AND ciclo= '$filtro'";
$re29 = $conexion->query($con29);
$jda = $re29->num_rows;

$con30 = "SELECT ub.up9,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up9='Funcionario' AND ciclo= '$filtro'";
$re30 = $conexion->query($con30);
$fun = $re30->num_rows;

$con31 = "SELECT ub.up9,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up9='Directivo' AND ciclo= '$filtro'";
$re31 = $conexion->query($con31);
$dir = $re31->num_rows;

$con32 = "SELECT ub.up9,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up9='Empresario' AND ciclo= '$filtro'";
$re32 = $conexion->query($con32);
$emp = $re32->num_rows;

$tup9 = $tec + $sup + $jda + $fun + $dir + $emp;

//up10//
$con33 = "SELECT ub.up10,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up10='Base' AND ciclo= '$filtro'";
$re33 = $conexion->query($con33);
$ba = $re33->num_rows;

$con34 = "SELECT ub.up10,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up10='Eventual' AND ciclo= '$filtro'";
$re34 = $conexion->query($con34);
$ev = $re34->num_rows;

$con35 = "SELECT ub.up10,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up10='Contrato' AND ciclo= '$filtro'";
$re35 = $conexion->query($con35);
$co = $re35->num_rows;

$con36 = "SELECT ub.up10,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up10='Otro' AND ciclo= '$filtro'";
$re36 = $conexion->query($con36);
$otro = $re36->num_rows;

$tup10 = $ba + $ev + $co + $otro;

//up11//
$con37 = "SELECT ub.up11,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up11='0' AND ciclo= '$filtro'";
$re37 = $conexion->query($con37);
$cer = $re37->num_rows;

$con38 = "SELECT ub.up11,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up11='20' AND ciclo= '$filtro'";
$re38 = $conexion->query($con38);
$vei = $re38->num_rows;

$con39 = "SELECT ub.up11,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up11='40' AND ciclo= '$filtro'";
$re39 = $conexion->query($con39);
$cua = $re39->num_rows;

$con40 = "SELECT ub.up11,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up11='60' AND ciclo= '$filtro'";
$re40 = $conexion->query($con40);
$ses = $re40->num_rows;

$con41 = "SELECT ub.up11,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up11='80' AND ciclo= '$filtro'";
$re41 = $conexion->query($con41);
$och = $re41->num_rows;

$con42 = "SELECT ub.up11,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up11='100' AND ciclo= '$filtro'";
$re42 = $conexion->query($con42);
$cie = $re42->num_rows;

$tup11 = $cer + $vei + $cua + $ses + $och + $cie;

//up13//
$con43 = "SELECT ub.up13,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up13='Primario' AND ciclo= '$filtro'";
$re43 = $conexion->query($con43);
$pri = $re43->num_rows;

$con44 = "SELECT ub.up13,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up13='Secundario' AND ciclo= '$filtro'";
$re44 = $conexion->query($con44);
$sec = $re44->num_rows;

$con45 = "SELECT ub.up13,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up13='Terciario' AND ciclo= '$filtro'";
$re45 = $conexion->query($con45);
$ter = $re45->num_rows;

$tup13= $cer + $sec + $ter;

//up14//
$con46 = "SELECT ub.up14,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up14='Micro' AND ciclo= '$filtro'";
$re46 = $conexion->query($con46);
$mic = $re46->num_rows;

$con47 = "SELECT ub.up14,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up14='Pequena' AND ciclo= '$filtro'";
$re47 = $conexion->query($con47);
$peq = $re47->num_rows;

$con48 = "SELECT ub.up14,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up14='Mediana' AND ciclo= '$filtro'";
$re48 = $conexion->query($con48);
$med = $re48->num_rows;

$con49 = "SELECT ub.up14,egre.ciclo FROM ubicacion ub
INNER JOIN egresado egre ON ub.egresadoId = egre.egresadoId
WHERE up14='Grande' AND ciclo= '$filtro'";
$re49 = $conexion->query($con49);
$gra = $re49->num_rows;

};
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/estilosf.css">
        <link rel="stylesheet" href="css/tablab.css">
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
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Indicadores
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="p_perfil.php">I. Perfil del egresado</a>
              <a class="dropdown-item" href="p_pertenencia.php">II. Pertenencia</a>
              <a class="dropdown-item active" href="p_ubicacion.php">III. Ubicacion laboral</a>
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

        <form class="form-inline my-2 my-lg-0" method="POST" action="p_ubicacion.php">
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
      <div class="col-9"> 
        <fieldset>
          <legend class="leyenda"><span class="numero">P</span>III. UBICACIÓN LABORAL DE LOS EGRESADOS </legend>
      </div>

        <div class="col-3">
         <legend class="leyenda"><span>Ciclo: </span><?php echo "$filtro" ?></legend>
       </div>
    </div>
     <br>

    <div class="row"><!--01-->
      <div class="col-12">
        <h6>III.1 Actividad a la que se dedica actualmente</h6>
        <table class=" "> <!--Tabla 0-->
          <thead> 
            <tr class="">
              <th scope="col"></th>
              <th scope="col">Trabaja</th>
              <th scope="col">Estudia</th>
              <th scope="col">Estudia y Trabaja</th>
              <th scope="col">No estudia ni trabaja</th>
              <th scope="col">Total</th>
            </tr>
          </thead>
          <tbody>        
            <tr>
               <td><strong>Total</strong></td>
              <td><?php echo $trabaja ?></td>
              <td><?php echo $estudia ?></td>
              <td><?php echo $et ?></td>
              <td><?php echo $nn ?></td>
              <td><?php echo $tup1 ?></td>
            </tr>
          </tbody>
        </table>
      </div>       
    </div>
    <br>

    <div class="row"><!--02-->
      <div class="col-12">
        <h6>III.2 En caso de trabajar: Tiempo transcurrido para obtener el primer empleo</h6>
        <table class=" "> 
          <thead> 
            <tr class="">
              <th scope="col"></th>
              <th scope="col">Antes de egresar</th>
              <th scope="col">Menos de 6 meses</th>
              <th scope="col">Entre 6 meses y 1 año</th>
              <th scope="col">Mas de 1 año</th>
              <th scope="col">Total</th>
            </tr>
          </thead>
          <tbody>        
            <tr>
               <td><strong>Total</strong></td>
              <td><?php echo $ade ?></td>
              <td><?php echo $msm ?></td>
              <td><?php echo $esa ?></td>
              <td><?php echo $mda ?></td>
              <td><?php echo $tup2 ?></td>
            </tr>
          </tbody>
        </table>
      </div>       
    </div><br>

    <div class="row"><!--03-->
      <div class="col-12">
        <h6>III.3 Medio para obtener el empleo</h6>
        <table class=" "> 
          <thead> 
            <tr class="">
              <th scope="col"></th>
              <th scope="col">Bolsa de trabajo Plantel</th>
              <th scope="col">Contactos personales</th>
              <th scope="col">Residencias profesionales</th>
              <th scope="col">Medios de difucion</th>
              <th scope="col">Otro</th>
              <th scope="col">Total</th>
            </tr>
          </thead>
          <tbody>        
            <tr>
               <td><strong>Total</strong></td>
              <td><?php echo $bt ?></td>
              <td><?php echo $co ?></td>
              <td><?php echo $re ?></td>
              <td><?php echo $me ?></td>
              <td><?php echo $ot ?></td>
              <td><?php echo $tup3 ?></td>
            </tr>
          </tbody>
        </table>
      </div>       
    </div><br>

    <div class="row"><!--05-->
      <div class="col-12">
        <h6>III.5 Idioma que utiliza en su trabajo</h6>
        <table class=" "> 
          <thead> 
            <tr class="">
              <th scope="col"></th>
              <th scope="col">Ingles </th>
              <th scope="col">Frances</th>
              <th scope="col">Aleman</th>
              <th scope="col">Japones</th>
              <th scope="col">Otro</th>
              <th scope="col">Total</th>
            </tr>
          </thead>
          <tbody>        
            <tr>
               <td><strong>Total</strong></td>
              <td><?php echo $in ?></td>
              <td><?php echo $fr ?></td>
              <td><?php echo $al ?></td>
              <td><?php echo $ja ?></td>
              <td><?php echo $otr ?></td>
              <td><?php echo $tup5 ?></td>
            </tr>
          </tbody>
        </table>
      </div>       
    </div><br>

    <div class="row"><!--07-->
      <div class="col-12">
        <h6>III.7 Antiguedad en el empleo </h6>
        <table class=" "> 
          <thead> 
            <tr class="">
              <th scope="col"></th>
              <th scope="col">Menos de un año</th>
              <th scope="col">Un año</th>
              <th scope="col">Dos años</th>
              <th scope="col">Tres años</th>
              <th scope="col">Mas de tres años</th>
              <th scope="col">Total</th>
            </tr>
          </thead>
          <tbody>        
            <tr>
               <td><strong>Total</strong></td>
              <td><?php echo $mu ?></td>
              <td><?php echo $ua ?></td>
              <td><?php echo $da ?></td>
              <td><?php echo $ta ?></td>
              <td><?php echo $mta ?></td>
              <td><?php echo $tup7 ?></td>
            </tr>
          </tbody>
        </table>
      </div>       
    </div><br>

    <div class="row"><!--08-->
      <div class="col-12">
        <h6>III.8 Ingreso (Salario minimo diario) </h6>
        <table class=" "> 
          <thead> 
            <tr class="">
              <th scope="col"></th>
              <th scope="col">Menos de cinco</th>
              <th scope="col">Entre cinco y siete</th>
              <th scope="col">Entre ocho y diez</th>
              <th scope="col">Mas de diez</th>              
              <th scope="col">Total</th>
            </tr>
          </thead>
          <tbody>        
            <tr>
               <td><strong>Total</strong></td>
              <td><?php echo $mc ?></td>
              <td><?php echo $ecs ?></td>
              <td><?php echo $eod ?></td>
              <td><?php echo $mdd ?></td>
              <td><?php echo $tup8 ?></td>              
            </tr>
          </tbody>
        </table>
      </div>       
    </div><br>

    <div class="row"><!--09-->
      <div class="col-12">
        <h6>III.9 Nivel jerarquico en el trabajo </h6>
        <table class=" "> 
          <thead> 
            <tr class="">
              <th scope="col"></th>
              <th scope="col">Tecnico</th>
              <th scope="col">Supervisor</th>
              <th scope="col">Jefe de Area</th>
              <th scope="col">Funcionario</th>
              <th scope="col">Directivo</th>              
              <th scope="col">Empresario</th>
              <th scope="col">Total</th>
            </tr>
          </thead>
          <tbody>        
            <tr>
               <td><strong>Total</strong></td>
              <td><?php echo $tec ?></td>
              <td><?php echo $sup ?></td>
              <td><?php echo $jda ?></td>
              <td><?php echo $fun ?></td>
              <td><?php echo $dir ?></td>              
              <td><?php echo $emp ?></td>              
              <td><?php echo $tup9 ?></td>              
            </tr>
          </tbody>
        </table>
      </div>       
    </div><br>

    <div class="row"><!--10-->
      <div class="col-12">
        <h6>III.10 Condiciones de trabajo </h6>
        <table class=" "> 
          <thead> 
            <tr class="">
              <th scope="col"></th>
              <th scope="col">Base</th>
              <th scope="col">Eventual</th>
              <th scope="col">Contrato</th>
              <th scope="col">Otro</th>            
              <th scope="col">Total</th>
            </tr>
          </thead>
          <tbody>        
            <tr>
               <td><strong>Total</strong></td>
              <td><?php echo $ba ?></td>
              <td><?php echo $ev ?></td>
              <td><?php echo $co ?></td>
              <td><?php echo $otro ?></td>
              <td><?php echo $tup10 ?></td>                           
            </tr>
          </tbody>
        </table>
      </div>       
    </div><br>

    <div class="row"><!--11-->
      <div class="col-12">
        <h6>III.11 Relacion del trabajo con su area de formacion </h6>
        <table class=" "> 
          <thead> 
            <tr class="">
              <th scope="col"></th>
              <th scope="col">0%</th>
              <th scope="col">20%</th>
              <th scope="col">40%</th>
              <th scope="col">60%</th>            
              <th scope="col">80%</th>            
              <th scope="col">100%</th>               
              <th scope="col">Total</th>               
            </tr>
          </thead>
          <tbody>        
            <tr>
               <td><strong>Total</strong></td>
              <td><?php echo $cer ?></td>
              <td><?php echo $vei ?></td>
              <td><?php echo $cua ?></td>
              <td><?php echo $ses ?></td>
              <td><?php echo $och ?></td>                           
              <td><?php echo $cie ?></td>                           
              <td><?php echo $tup11 ?></td>                           
            </tr>
          </tbody>
        </table>
      </div>
    </div><br>

    <div class="row"><!--13-->
      <div class="col-12">
        <h6>III.13 Sector economico de la empresa u organizacion </h6>
        <table class=" "> 
          <thead> 
            <tr class="">
              <th scope="col"></th>
              <th scope="col">Sector Primario</th>
              <th scope="col">Sector Secundario</th>
              <th scope="col">Sector Terciario (Servicios)</th>                        
              <th scope="col">Total</th>               
            </tr>
          </thead>
          <tbody>        
            <tr>
               <td><strong>Total</strong></td>
              <td><?php echo $pri ?></td>
              <td><?php echo $sec ?></td>
              <td><?php echo $ter ?></td>
              <td><?php echo $tup13 ?></td>                                    
            </tr>
          </tbody>
        </table>
      </div>
    </div><br>

    <div class="row"><!--14-->
      <div class="col-12">
        <h6>III.14 Tamaño de la empresa u organizacion</h6>
        <table class=" "> 
          <thead> 
            <tr class="">
              <th scope="col"></th>
              <th scope="col">Microempresa (1-30)</th>
              <th scope="col">Pequeña (31-100)</th>
              <th scope="col">Mediana (101-500)</th>                        
              <th scope="col">Grande (mas de 500)</th>               
            </tr>
          </thead>
          <tbody>        
            <tr>
               <td><strong>Total</strong></td>
              <td><?php echo $mic ?></td>
              <td><?php echo $peq ?></td>
              <td><?php echo $med ?></td>
              <td><?php echo $gra ?></td>                                                 
            </tr>
          </tbody>
        </table>
      </div>
    </div><br><br>
    
  
  

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
