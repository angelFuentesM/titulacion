<?php
$nstatus = $_POST['nstatus'] ;
$paterno = $_POST['paterno'] ;
$materno = $_POST['materno'];
$nombre  = $_POST['nombre'];
$control = $_POST['control'];
$fecha   = $_POST['fecha'];
$curp    = $_POST['curp'];
$sexo    = $_POST['sexo'];
$civil   = $_POST['civil'];
$calle = $_POST['calle'];
$numero = $_POST['numero'];
$colonia = $_POST['colonia'];
$postal = $_POST['postal'];
$ciudad = $_POST['ciudad'];
$municipio = $_POST['municipio'];
$estado = $_POST['estado'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$telPaterno = $_POST['telPaterno'];
$carrera = $_POST['carrera'];
$especialidad = $_POST['especialidad'];
$egreso = $_POST['egreso'];
$titulado = $_POST['titulado'];
$idioma = $_POST['idioma'];
$otroIdioma = $_POST['otroIdioma'];
$ofimatica = $_POST['ofimatica'];
$ciclo = $_POST['ciclo'];
$pp1 = $_POST['pp1'];//pertenencia
$pp2 = $_POST['pp2'];
$pp3 = $_POST['pp3'];
$pp4 = $_POST['pp4'];
$pp5 = $_POST['pp5'];
$pp6 = $_POST['pp6'];
$up1 = $_POST['up1'];//ubicacion
$ups1 = $_POST['ups1'];
$up2 = $_POST['up2'];
$up3 = $_POST['up3'];
$ups3 = $_POST['ups3'];
$up4 = $_POST['up4'];
$ups4 = $_POST['ups4'];
$up5 = $_POST['up5'];
$ups5 = $_POST['ups5'];
$up61 = $_POST['up61'];
  $up62 = $_POST['up62'];
  $up63 = $_POST['up63'];
  $up64 = $_POST['up64'];
  $up7 = $_POST['up7'];
  $ups7 = $_POST['ups7'];
  $up8 = $_POST['up8'];
  $up9 = $_POST['up9'];
  $up10 = $_POST['up10'];
  $ups10 = $_POST['ups10'];
  $up11 = $_POST['up11'];
  $up13 = $_POST['up13'];
  $ups13 = $_POST['ups13'];
  $up14 = $_POST['up14'];
  $comentario= $_POST['comentario'];//comentario
  $dp1 = $_POST['dp1'];//desenpeño
  $dp2 = $_POST['dp2'];
  $dp3 = $_POST['dp3'];
  $dpp1 = $_POST['dpp1'];//desenpeño 2
  $dpp2 = $_POST['dpp2'];
  $dpp3 = $_POST['dpp3'];
  $dpp4 = $_POST['dpp4'];
  $dpp5 = $_POST['dpp5'];
  $dpp6 = $_POST['dpp6'];
  $dpp7 = $_POST['dpp7'];
  $dpp8 = $_POST['dpp8'];
  $dpp9 = $_POST['dpp9'];
  $dpp10 = $_POST['dpp10'];
  $e01 = $_POST['e01'];//actualizacion
  $e02 = $_POST['e02'];
  $e03 = $_POST['e03'];
  $e04 = $_POST['e04'];
  $ap1 = $_POST['ap1'];//participacion
  $aps1 = $_POST['aps1'];
  $ap2 = $_POST['ap2'];
  $aps2 = $_POST['aps2'];
  $ap3 = $_POST['ap3'];
  $giro= $_POST['giro'];//empresa
  $girob = $_POST['girob'];
  $razonSocial = $_POST['razonSocial'];
  $domicilioE = $_POST['domicilioE'];
  $coloniaE = $_POST['coloniaE'];
  $postalE = $_POST['postalE'];
  $municipioE = $_POST['municipioE'];
  $estadoE = $_POST['estadoE'];
  $telefonoE = $_POST['telefonoE'];
  $extencion = $_POST['extencion'];
  $correoE = $_POST['correoE'];
  $web = $_POST['web'];
  $jefe = $_POST['jefe'];
  $puesto = $_POST['puesto'];

  require('conexion.php');

   ///Modificacion de status///
    $mod = "UPDATE usuarios SET status = '$nstatus' WHERE nucontrol = '$control' ";
    mysqli_query($conexion, $mod);
 
  //consulta para insertar
   $insertar1 = "INSERT INTO egresado SET paterno='$paterno',materno='$materno',nombre='$nombre',control='$control',
   fecha='$fecha', curp='$curp', sexo='$sexo', civil='$civil', calle='$calle', numero='$numero', colonia='$colonia',
   postal='$postal', ciudad='$ciudad', municipio='$municipio', estado='$estado', telefono= '$telefono', correo='$correo',
   telPaterno='$telPaterno', carrera='$carrera', especialidad='$especialidad', egreso='$egreso', titulado='$titulado',
   idioma='$idioma', otroIdioma='$otroIdioma', ofimatica='$ofimatica', ciclo='$ciclo'";
   mysqli_query($conexion,$insertar1) or die ("Error al Registrar el Producto");

   //recupera el valor Autoincrementable
   $egresadoId = mysqli_insert_id($conexion);

   //insercion de informacion en las distintas tablas

     $insertar2 = "INSERT INTO Pertenencia SET egresadoId='$egresadoId', pp1='$pp1',pp2='$pp2',pp3='$pp3',pp4='$pp4',pp5='$pp5',pp6='$pp6'";
     mysqli_query($conexion,$insertar2);


     $insertar3 = "INSERT INTO ubicacion SET egresadoId='$egresadoId', up1='$up1', ups1='$ups1', up2='$up2', up3='$up3',ups3='$ups3', up4='$up4', ups4='$ups4', up5='$up5', ups5='$ups5', up61='$up61', up62='$up62', up63='$up63', up64='$up64', up7='$up7', ups7='$ups7',up8='$up8', up9='$up9', up10='$up10', ups10='$ups10', up11='$up11', up13='$up13', ups13='$ups13',up14='$up14', giro='$giro'";
     mysqli_query($conexion,$insertar3);
     $ubicacionId = mysqli_insert_id($conexion);


     $insertar4 = "INSERT INTO comentario SET egresadoId='$egresadoId', comentario='$comentario'";
     mysqli_query($conexion,$insertar4);

     $insertar5 = "INSERT INTO desenpeno SET egresadoId='$egresadoId', dp1='$dp1', dp2='$dp2', dp3='$dp3'";
     mysqli_query($conexion,$insertar5);

     $insertar6 = "INSERT INTO desenpeno2 SET egresadoId='$egresadoId', dpp1='$dpp1', dpp2='$dpp2', dpp3='$dpp3', dpp4='$dpp4', dpp5='$dpp5', dpp6='$dpp6', dpp7='$dpp7', dpp8='$dpp8', dpp9='$dpp9', dpp10='$dpp10'";
     mysqli_query($conexion,$insertar6);


     $insertar7 = "INSERT INTO actualizacion SET egresadoId='$egresadoId', e01='$e01', e02='$e02', e03='$e03', e04='$e04'";
     mysqli_query($conexion,$insertar7);


     $insertar8 = "INSERT INTO participacion SET egresadoId='$egresadoId', ap1='$ap1', aps1='$aps1', ap2='$ap2', aps2='$aps2', ap3='$ap3'";
     mysqli_query($conexion,$insertar8);


     $insertar9 = "INSERT INTO empresa SET egresadoId='$egresadoId', giro='$giro', girob='$girob', razonSocial ='$razonSocial', domicilioE='$domicilioE', coloniaE='$coloniaE', postalE ='$postalE', municipioE ='$municipioE',  estadoE ='$estadoE', telefonoE ='$telefonoE', extencion ='$extencion', correoE ='$correoE', web ='$web', jefe ='$jefe', puesto ='$puesto'";
     mysqli_query($conexion,$insertar9);

    

    header("refresh:0; url=cerrar_s.php");     
    echo '<script language="javascript">alert("FORMULARIO ENVIADO, MUCHAS GRACIAS POR TU GENTIL COLABORACION");</script>';
  

  

  
