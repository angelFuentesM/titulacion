<?php
session_start();
$varsesion = $_SESSION['nucontrol'];
if ($varsesion == null || $varsesion = '') {
header("location:/formulario/login.php");
die();
}
require 'conexion.php';

$consulta = "SELECT * FROM usuarios WHERE nucontrol =" .$_SESSION['nucontrol'];
$resultado = mysqli_query($conexion, $consulta);
$filas = mysqli_fetch_array($resultado);
$ciclo_s = $filas[8];
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

    <div class="container">
  <div class="row">
    <div class="col">
    </div>
      </div>
  </div>
  </div>

    <br>
    <div class="container" > <!--contenedor general-->

      <div class="col-md-12">
        <h3 class="text-center" >Cuestionario de Seguimiento de egresados</h3>
      </div>
      <hr>

    <div class="row">
    <div class="col-md-12">
    <fieldset>
    <legend class="leyenda"><span class="numero">I</span>PERFIL DEL EGRESADO</legend>
    
     <!--Inicia Formulario-->
    <form action="registrar.php" method="POST" class="form-horizontal" name="formulario">
      <input type="text" name="ciclo" id="ciclo" value="<?php echo $filas[8]?>" hidden>
      <input type="text" name="nstatus" value="si" hidden>

    <div class="row">
      <div class="form-group col-md-3">
        <label for="paterno" class="control-label "> Nombre:</label>
        <input type="text" name="paterno" class="form-control form-control-sm text-uppercase" id="paterno" placeholder="Apellido Paterno" value="<?php echo $filas[2] ?>" readonly>
      </div>


      <div class="form-group col-md-3">
        <label for="materno" class="control-label"></label>
        <input type="text" name="materno" class="form-control my-2 form-control-sm text-uppercase" id="materno" placeholder="Apellido Materno" value="<?php echo $filas[3] ?>" readonly>
      </div>

      <div class="form-group col-md-3">
        <label for="nombre" class="control-label"></label>
        <input type="text" name="nombre" class="form-control my-2 form-control-sm text-uppercase" id="nombre" value="<?php echo $filas[4] ?>" readonly >
      </div>

      <div class="form-group col-md-3">
        <label for="control" class="control-label">Numero de control:</label>
        <input type="text" value="<?php echo $_SESSION['nucontrol'] ?>" name="control" pattern="[0-9]{8}" title="8 caracteres Numericos" class="form-control form-control-sm" id="control" readonly="readonly">
      </div>
   </div>

    <div class="row">
      <div class="form-group col-md-3">
        <label for="fecha" class="control-label">Fecha de Nacimiento:</label>
        <input type="date" name="fecha" class="form-control form-control-sm" id="fecha">
      </div>


      <div class="form-group col-md-3">
        <label for="curp" class="control-label">CURP:</label>
        <input type="text" name="curp" class="form-control form-control-sm" id="curp" placeholder="CURP" >
      </div>

      <div class="form-group col-md-6 my-4">
        <label class="control-label col-md-3">Sexo:</label>
        <label>
          Hombre <input type="radio" name="sexo" value="Masculino" id="sexo" class="mx-3 " checked>
        </label>
        <label class="radio-inline">
         Mujer <input type="radio" name="sexo" value="Femenino" id="sexo" class="mx-3 ">
       </label>
     </div>
   </div>

    <div class="row">
      <div class="form-group col-md-6 my-4" >
      <label for="civil" class="control-label mx-3"> Estado Civil:</label>

      <label>
      Casado (a): <input type="radio" name="civil" value="Casado" id="civil" class="mx-3" checked>
      </label>

      <label>
      Soltero (a): <input type="radio" name="civil" value="Soltero" id="civil" class="mx-3">
      </label>

      <label>
      Otro: <input type="radio" name="civil" value="Otro" id="civil" class="mx-3">
      </label>
      </div>

      <div class="form-group col-md-4">
        <label for="calle" class="control-label">Domicilio:</label>
        <input type="text" name="calle" class="form-control form-control-sm" id="calle" placeholder="Calle">
      </div>

    <div class="form-group col-md-2">
        <label for="numero" class="control-label">Numero:</label>
        <input type="text" name="numero" class="form-control form-control-sm" id="numero" placeholder="No. Exterior">
      </div>
    </div>

  <div class="row">
    <div class="form-group col-md-3">
        <label for="colonia" class="control-label">Colonia:</label>
        <input type="text" name="colonia" class="form-control form-control-sm" id="colonia" placeholder="Colonia">
    </div>

    <div class="form-group col-md-3">
        <label for="postal" class="control-label">Codigo Postal:</label>
        <input type="text" name="postal" min="5" pattern="[0-9]{5}" class="form-control form-control-sm" id="postal" placeholder="Codigo Postal" title="5 numeros del codigo postal">
    </div>

    <div class="form-group col-md-3">
        <label for="ciudad" class="control-label">Ciudad:</label>
        <input type="text" name="ciudad" class="form-control form-control-sm" id="ciudad" placeholder="Ciudad">
    </div>

    <div class="form-group col-md-3">
        <label for="municipio" class="control-label">Municipio:</label>
        <input type="text" name="municipio" class="form-control form-control-sm" id="municipio" placeholder="Municipio">
    </div>

  </div>

  <div class="row">
        <div class="form-group col-md-3">
        <label for="estado" class="control-label">Estado:</label>
        <input type="text" name="estado" class="form-control form-control-sm" id="estado" placeholder="Estado">
        </div>


        <div class="form-group col-md-3">
        <label for="telefono" class="control-label">Telefono:</label>
        <input type="tel" name="telefono" class="form-control form-control-sm" id="telefono" placeholder="Numero Telefonico">
        </div>



        <div class="form-group col-md-3">
        <label for="correo" class="control-label">e-mail:</label>
        <input type="email" name="correo" class="form-control form-control-sm" id="correo" placeholder=" user@example.com">
        </div>

        <div class="form-group col-md-3">
        <label for="telefono" class="control-label">Tel. casa Paterna:</label>
        <input type="tel" name="telPaterno" class="form-control form-control-sm" id="telefono" placeholder="Telefono Casa Paterna">
        </div>
    </div>

    <div class="row">

      <div class="form-group col-md-3">
      <label for="carrera" class="control-label">Carrera de egreso:</label>
      <select class="custom-select custom-select-sm " id="carrera" name="carrera">
      <option value="">Seleccione su Carrera</option>

      <?php
      require 'conexion.php';

      $consultacarrera = "SELECT * FROM carrera";
      $resultadocarrera = $conexion->query($consultacarrera);

      while ($regCarrera = $resultadocarrera->fetch_array(MYSQLI_BOTH)) {
        echo '<option value="' . $regCarrera['nombreCarrera'] . '">' . $regCarrera['nombreCarrera'] . '</option>';}
        ?>

      </select>
      </div>

    <div class="form-group col-md-3">
      <label for="especialidad" class="control-label">Espesialidad:</label>
      <input type="text" name="especialidad" class="form-control form-control-sm" id="especialidad" placeholder="Especialidad de Carrera">
    </div>


    <div class="form-group col-md-3">
      <label for="egreso" class="control-label">Mes y Año de Egreso:</label>
      <input type="month" name="egreso" class="form-control form-control-sm" id="egreso" placeholder="M/A Egreso">
    </div>

    <div class="form-group col-md-3 my-4">
      <label class="control-label">Titulado(a):</label>
      <label>
        Si <input type="radio" name="titulado" value="Si" id="titulado" class="control-label mx-4" >
      </label>
      <label class="radio-inline">
        No <input type="radio" name="titulado" value="No" id="titulado" class="control-label mx-4" checked >
      </label>
    </div>

  </div>

  <div class="row">
        <div class="form-group col-md-3">
        <label for="idioma" class="control-label">Dominio de Idioma Extrangero:</label>
        <input type="text" name="idioma" class="form-control form-control-sm" id="Idioma" placeholder="Indicar porcentaje del idioma Ingles">
        </div>


        <div class="form-group col-md-3">
        <label for="otroIdioma" class="control-label">Otro Idioma:</label>
        <input type="text" name="otroIdioma" class="form-control form-control-sm" id="otroIdioma" placeholder="% de otro Idioma">
        </div>



        <div class="form-group col-md-6">
        <label for="ofimatica" class="control-label">Manejo de paquetes de Computacion:</label>
        <input type="text" name="ofimatica" class="form-control form-control-sm" id="ofimatica" placeholder="Especificar (separar con ,)">
        </div>


  </div>

  <hr>

  <div class="row">
    <legend class="leyenda"><span class="numero">II</span>PERTINENCIA Y DISPONIBILIDAD DE MEDIOS Y RECURSOS PARA EL APRENDIZAJE</legend>
    <p class="text-justify">Califique la calidad de la educacion profesional proporcionada por el personal docente, asi como el plan de estudios de la
    carrera que curso y las condiciones del plantel en cuanto infraestructura</p>

    <div class="col-6">
      <div class="form-group">
        <label for="pp1" class="control-label"><strong>II.1 Calidad de los docentes</strong></label><br>
        <label>Muy buena: <input type="radio" name="pp1" value="Muy Buena" id="pp1" class="mx-3"></label>
        <label>Buena: <input type="radio" name="pp1" value="Buena" id="pp1" class="mx-3"></label>
        <label>Regular: <input type="radio" name="pp1" value="Regular" class="mx-3"></label>
        <label>Mala: <input type="radio" name="pp1" value="Mala" id="pp1" class="mx-3"></label>
      </div>

      <div class="form-group">
        <label for="pp2" class="control-label"><strong>II.2 Plan de Estudios</strong></label><br>
        <label>Muy buenos: <input type="radio" name="pp2" value="Muy Buenos" id="pp2" class="mx-2"></label>
        <label>Buenos: <input type="radio" name="pp2" value="Buenos" id="pp2" class="mx-2"></label>
        <label>Regulares: <input type="radio" name="pp2" value="Regulares" id="pp2" class="mx-2"></label>
        <label>Malos: <input type="radio" name="pp2" value="Malos" id="pp2" class="mx-2"></label>
      </div>

      <div class="form-group">
        <label for="pp3" class="control-label"><strong>II.3 Oportunidad de participar en proyectos de investigacion y desarrollo</strong></label><br>
        <label>Muy buena: <input type="radio" name="pp3" value="Muy Buena" id="pp3" class="mx-3"></label>
        <label>Buena: <input type="radio" name="pp3" value="Buena" id="pp3" class="mx-3"></label>
        <label>Regular: <input type="radio" name="pp3" value="Regular" id="pp3" class="mx-3"></label>
        <label>Mala: <input type="radio" name="pp3" value="Mala" id="pp3" class="mx-3"></label>
      </div>
    </div>

    <div class="col-6">
      <div class="form-group">
        <label for="pp4" class="control-label"><strong>II.4 Enfasis en que se le presentaba a la investigacion dentro del proceso de enseñanza</strong></label><br>
        <label>Muy buena: <input type="radio" name="pp4" value="Muy Buena" id="pp4" class="mx-3"></label>
        <label>Buena: <input type="radio" name="pp4" value="Buena" id="pp4" class="mx-3"></label>
        <label>Regular: <input type="radio" name="pp4" value="Regular" id="pp4" class="mx-3"></label>
        <label>Mala: <input type="radio" name="pp4" value="Mala" id="pp4" class="mx-3"></label>
      </div>

      <div class="form-group">
        <label for="pp5" class="control-label"><strong>II.5 Satisfaccio con las condiciones de estudio (Infraestructura)</strong></label><br>
        <label>Muy buena: <input type="radio" name="pp5" value="Muy Buena" id="pp5" class="mx-3"></label>
        <label>Buena: <input type="radio" name="pp5" value="Buena" id="pp5" class="mx-3"></label>
        <label>Regular: <input type="radio" name="pp5" value="Regular" id="pp5" class="mx-3"></label>
        <label>Mala: <input type="radio" name="pp5" value="Mala" id="pp5" class="mx-3"></label>
      </div>

      <div class="form-group">
        <label for="pp6" class="control-label"><strong>II.6 Experiencia obtenida a travez de la residencia profesional</strong></label><br>
        <label>Muy buena: <input type="radio" name="pp6" value="Muy Buena" id="pp6" class="mx-3"></label>
        <label>Buena: <input type="radio" name="pp6" value="Buena" id="pp6" class="mx-3"></label>
        <label>Regular: <input type="radio" name="pp6" value="Regular" id="pp6" class="mx-3"></label>
        <label>Mala: <input type="radio" name="pp6" value="Mala" id="pp6" class="mx-3"></label>
      </div>

    </div>
</div>

  <hr>

  <div class="row">

    <legend class="leyenda"><span class="numero">III</span>UBICACION LABORAL DE LOS EGRESADOS</legend>
    <p class="text-justify">Indique a cual de los siguientes puntos corresponde su situacion actual:</p>

    <div class="col-12">

      <div class="form-group">
        <label for="up1" class="control-label"><strong>III.1 Actividad a la que se dedica actualmente:</strong></label><br>
        <label>Trabaja <input type="radio" name="up1" value="Trabaja" id="up1" class="mx-3"></label>
        <label>Estudia <input type="radio" name="up1" value="Estudia" id="up1" class="mx-3"></label>
        <label>Estudia y Trabaja <input type="radio" name="up1" value="Estudia y Trabaja" id="up1" class="mx-3"></label>
       <label>No estudia Ni Trabaja <input type="radio" name="up1" onclick="ocultar()" value="No estudia Ni Trabaja" id="noni" class="mx-3"></label>
      </div>

      <div id="nini">
        <div class="form-group">
          <label for="ups1" class="control-label"><strong>Si estudia, indicar si es:</strong></label><br>
                <input type="text" name="ups1" class="form-control form-control-sm" id="ups1" placeholder="ESPECIALIDAD, MAESTRIA, DOCTORADO,IDIOMAS, U OTRA:">
        </div>

        <div class="form-group">
          <label for="up2" class="control-label"><strong>III.2 En caso de trabajar: Tiempo transcurrido para obtener el primer empleo</strong></label><br>
          <label>Antes de egresar <input type="radio" name="up2" value="Antes de egresar" id="up2" class="mx-3"></label>
          <label>Menos de seis meses<input type="radio" name="up2" value="Menos de seis meses" id="up2" class="mx-3"></label>
          <label>Entre seis y un año<input type="radio" name="up2" value="Entre seis un año" id="up2" class="mx-3"></label>
          <label>Mas de un año<input type="radio" name="up2" value="Mas de un año" id="mas de año" class="mx-3"></label>
        </div>

        <div class="form-group">
          <label for="up3" class="control-label"><strong>III.3 Medio para obtener el empleo</strong></label><br>
          <label>Bolsa de trabajo del plantel <input type="radio" name="up3" value="Bolsa ITSPP" id="up31" class="mx-3"></label>
          <label>Contactos personales<input type="radio" name="up3" value="Contactos" id="up32" class="mx-3"></label>
          <label>Residencia Profesional<input type="radio" name="up3" value="Residencias" id="up33" class="mx-3"></label>
          <label>Medios macivos de comunicacion<input type="radio" name="up3" value="Medios" id="up34" class="mx-3"></label>
          <label>otro<input type="radio" name="up3" value="Otro" id="up35" class="mx-3" ></label>

          <input type="text" name="ups3" checked class="form-control form-control-sm" id="ups1" placeholder="En caso de ser otro especifique:" >
        </div>

        <div class="form-group">
          <label for="up4" class="control-label"><strong>III.4 Requisitos de contratacion</strong></label><br>
          <label>Competencias laborales<input type="radio" name="up4" value="Competencias" id="up4" class="mx-3"></label>
          <label>Titulo profesional<input type="radio" name="up4" value="Titulo" id="up4" class="mx-3"></label>
          <label>Examen de seleccion<input type="radio" name="up4" value="Examen" id="up4" class="mx-3"></label>
          <label>Idioma extranjero<input type="radio" name="up4" value="Idioma" id="up4" class="mx-3"></label>
          <label>Actitudes y habilidades socio-economicas (principios y valores)<input type="radio" name="up4" value="actitudes" id="up3" class="mx-3"></label>
          <label>Otros<input type="radio" name="up4" value="Otro" id="up4" class="mx-3"></label>
          <input type="text" name="ups4" class="form-control form-control-sm" id="ups4" placeholder="Especificar:">
        </div>

        <div class="form-group">
          <label for="up5" class="control-label"><strong>III.5 Idioma que utiliza en su trabajo</strong></label><br>
          <label>ingles<input type="radio" name="up5" value="Ingles" id="up5" class="mx-3"></label>
          <label>Frances<input type="radio" name="up5" value="Frances" id="up5" class="mx-3"></label>
          <label>Aleman<input type="radio" name="up5" value="Aleman" id="up5" class="mx-3"></label>
          <label>Japones<input type="radio" name="up5" value="Japones" id="up5" class="mx-3"></label>
          <label>Otros<input type="radio" name="up5" value="Otro" id="up5" class="mx-3"></label>
          <input type="text" name="ups5" class="form-control form-control-sm" id="ups5" placeholder="Especificar otro idioma">
        </div>

        <div class="row">
          <div class="form-group col-12">
          <label class="control-label"><strong>III.6 En que proporcion utiliza en el desempeño de sus actividades laborales cada una de las habiliades del idioma extranjero</strong></label><br>
          </div>
          <div class="form-group col">
          <input type="number" name="up61" class="form-control form-control-sm" id="up61" placeholder="% Hablar" max="100">
          </div>
          <div class="form-group col">
          <input type="number" name="up62" class="form-control form-control-sm" id="up62" placeholder="% Escribir" max="100">
          </div>
          <div class="form-group col">
          <input type="number" name="up63" class="form-control form-control-sm" id="up63" placeholder="% Leer" max="100">
          </div>
          <div class="form-group col">
          <input type="number" name="up64" class="form-control form-control-sm" id="up64" placeholder="% Escuchar" max="100">
          </div>
        </div>

        <div class="form-group">
          <label for="up7" class="control-label"><strong>III.7 Antiguedad en el empleo</strong></label><br>
          <label>Menos de un año<input type="radio" name="up7" value="Menos 1 año" id="up7" class="mx-3"></label>
          <label>Un año<input type="radio" name="up7" value="Un año" id="up7" class="mx-3"></label>
          <label>Dos años<input type="radio" name="up7" value="2 años" id="up7" class="mx-3"></label>
          <label>Tres años<input type="radio" name="up7" value="3 años" id="up7" class="mx-3"></label>
          <label>Mas de tres años<input type="radio" name="up7" value="Mas 3 años" id="up7" class="mx-3"></label><br>
          <label for="paterno" class="control-label"> Año de ingreso</label>
          <input type="date" name="ups7" class="form-control form-control-sm" id="ups7" placeholder="Año de ingreso">
        </div>

        <div class="form-group">
          <label for="up8" class="control-label"><strong>III.8 Ingreso (salario minimo diario)</strong></label><br>
          <label>Menos de cinco<input type="radio" name="up8" value="Menos de cinco" id="up8" class="mx-3"></label>
          <label>Entre cinco y siete<input type="radio" name="up8" value="Entre cinco y siete" id="up8" class="mx-3"></label>
          <label>entre ocho y diez<input type="radio" name="up8" value="Entre ocho y diez" id="up8" class="mx-3"></label>
          <label>mas de diez<input type="radio" name="up8" value="Mas de diez" id="up8" class="mx-3"></label>
        </div>

        <div class="form-group">
          <label for="up9" class="control-label"><strong>III.9 Nivel jerarquico en el trabajo</strong></label><br>
          <label>Tecnico<input type="radio" name="up9" value="Tecnico" id="up9" class="mx-3"></label>
          <label>Supervisor<input type="radio" name="up9" value="Supervisor" id="up9" class="mx-3"></label>
          <label>Jefe de area<input type="radio" name="up9" value="Jefe de area" id="up9" class="mx-3"></label>
          <label>Funcionario<input type="radio" name="up9" value="Funcionario" id="up9" class="mx-3"></label>
          <label>Directivo<input type="radio" name="up9" value="Directivo" id="up9" class="mx-3"></label>
          <label>Empresario<input type="radio" name="up9" value="Empresario" id="up9" class="mx-3"></label>
        </div>

        <div class="form-group">
          <label for="up10" class="control-label"><strong>III.10 Condicion de Trabajo</strong></label><br>
          <label>Base<input type="radio" name="up10" value="Base" id="up10" class="mx-3"></label>
          <label>Eventual<input type="radio" name="up10" value="Eventual" id="up10" class="mx-3"></label>
          <label>Contrato<input type="radio" name="up10" value="Contrato" id="up10" class="mx-3"></label>
          <label>Otro<input type="radio" name="up10" value="Otro" id="up10" class="mx-3"></label>
          <input type="text" name="ups10" class="form-control form-control-sm" id="ups10" placeholder="Especificar Otra condicion laboral">
        </div>

        <div class="form-group">
          <label for="up11" class="control-label"><strong>III.11 Relacion de trabajo con su area de formacion</strong></label><br>
          <label>0%<input type="radio" name="up11" value="0" id="up11" class="mx-3"></label>
          <label>20 %<input type="radio" name="up11" value="20" id="up11" class="mx-3"></label>
          <label>40 %<input type="radio" name="up11" value="40" id="up11" class="mx-3"></label>
          <label>60 %<input type="radio" name="up11" value="60" id="up11" class="mx-3"></label>
          <label>80 %<input type="radio" name="up11" value="80" id="up11" class="mx-3"></label>
          <label>100 %<input type="radio" name="up11" value="100" id="up11" class="mx-3"></label>
        </div>

        <div class="form-group">
          <label  class="control-label"><strong>III.12 Datos de la empresa u Organismo</strong></label><br>
          <label  class="control-label"><strong>ORGANISMO</strong></label><br>
          <label>Público<input type="radio" name="giro" value="Público" id="giro" class="mx-3"></label>
          <label>Privado<input type="radio" name="giro" value="Privado" id="giro" class="mx-3"></label>
          <label>Social<input type="radio" name="giro" value="Social" id="giro" class="mx-3"></label>

          <input type="text" name="girob" id="girob" class="form-control form-control-sm" placeholder="Giro o actividad principal de la empresa u organismo">
        </div>

        <div class="row">

          <div class="form-group col-md-6">
            <label for="razonSocial" class="control-label"> Razon Social:</label>
            <input type="text" name="razonSocial" class="form-control form-control-sm" id="razonSocial" placeholder="Razon Social de la empresa">
          </div>

          <div class="form-group col-md-3">
            <label class="control-label">Domicilio de la Empresa</label>
            <input type="text" name="domicilioE" class="form-control form-control-sm" id="domicilioE" placeholder="Calle - No.">
          </div>

          <div class="form-group col-md-3">
            <label for="coloniaE" class="control-label">Colonia</label>
            <input type="text" name="coloniaE" class="form-control form-control-sm" id="coloniaE" placeholder="Colonia">
          </div>

        </div>

        <div class="row">

          <div class="form-group col-md-3">
            <label for="postalE" class="control-label"> Codigo Postal</label>
            <input type="text" name="postalE" class="form-control form-control-sm" id="postalE" placeholder="C.P.">
          </div>

          <div class="form-group col-md-3">
            <label for="ciudadE" class="control-label">Ciudad</label>
            <input type="text" name="ciudadE" class="form-control form-control-sm" id="ciudadE" placeholder="Ciudad">
          </div>

          <div class="form-group col-md-3">
            <label for="municipioE" class="control-label">Municipio</label>
            <input type="text" name="municipioE" class="form-control form-control-sm" id="municipioE" placeholder="Municipio">
          </div>

          <div class="form-group col-md-3">
            <label for="estadoE" class="control-label">Estado</label>
            <input type="text" name="estadoE" class="form-control form-control-sm" id="estadoE" placeholder="Estado">
          </div>

        </div>

        <div class="row">

          <div class="form-group col-md-3">
            <label for="telefonoE" class="control-label"> Telefono</label>
            <input type="tel" name="telefonoE" class="form-control form-control-sm" id="telefonoE" placeholder="Telefono de la Empresa">
          </div>

          <div class="form-group col-md-3">
            <label for="extencion" class="control-label">Extencion</label>
            <input type="tel" name="extencion" class="form-control form-control-sm" id="extencion" placeholder="Extencion">
          </div>

          <div class="form-group col-md-3">
            <label for="correoE" class="control-label">E-mail</label>
            <input type="email" name="correoE" class="form-control form-control-sm" id="correoE" placeholder="e-mail de la Empresa">
          </div>

          <div class="form-group col-md-3">
            <label for="web" class="control-label">Pagina Web</label>
            <input type="text" name="web" class="form-control form-control-sm" id="web" placeholder="Pagina Web de la Empresa">
          </div>

        </div>

        <div class="row">

          <div class="form-group col-md-6">
            <label for="jefe" class="control-label"> Nombre de Jefe Inmediato</label>
            <input type="text" name="jefe" class="form-control form-control-sm" id="jefe" placeholder="Nombre de Jefe Inmediato">
          </div>

          <div class="form-group col-md-6">
            <label for="puesto" class="control-label">Puesto de Jefe Inmediato</label>
            <input type="text" name="puesto" class="form-control form-control-sm" id="puesto" placeholder= "Puesto de Jefe Inmediato">
          </div>

        </div>


        <div class="form-group">
        <label for="up11" class="control-label"><strong> III.13 Sector Economico de la Empresa u Organizacion</strong></label>
        </div>


        <div class="row">

          <div class="form-group col-5">
            <label>SECTOR PRIMARIO<input type="checkbox" name="up13" value="Primario" onclick ="habilitaDeshabilita()" id="primario" class="mx-5" ></label><br>
            <label>SECTOR SECUNDARIO<input type="checkbox" name="up13" value="Secundario" onclick ="habilitaDeshabilitas()"id="secundario" class="mx-4" ></label><br>
            <label>SECTOR TERCIARIO<input type="checkbox" name="up13" value="Terciario" onclick ="habilitaDeshabilitat()" id="terciario" class="mx-5"></label>
          </div>


        <div class="form-group col-7" >
          <div id="apmo">
            <label>Agroindustria<input type="radio" name="ups13" value="Agroindustria" id="a" class="mx-3"></label>
            <label>Pesquero<input type="radio" name="ups13" value="Pesquero" id="b" class="mx-3"></label>
            <label>Minero<input type="radio" name="ups13" value="Minero" id="Minero" class="mx-3"></label>
            <label>Otros<input type="radio" name="ups13" value="Otros" id="d" class="mx-3"></label>
          </div>


        <div id="icpo">
          <div >
            <label>Industrial<input type="radio" name="ups13" value="Industrial" id="e" class="mx-3"></label>
            <label>Construccion<input type="radio" name="ups13" value="Construccion" id="f" class="mx-3"></label>
            <label>Petrolero<input type="radio" name="ups13" value="Petrolero" id="g" class="mx-3"></label>
            <label>Otros<input type="radio" name="usp13" value="Otros" id="h" class="mx-3"></label>
          </div>
        </div>

        <div id="etcs">
          <label>Educativo<input type="radio" name="up13" value="Educativo" id="i" class="mx-3"></label>
          <label>Turismo<input type="radio" name="ups13" value="Turismo" id="j" class="mx-3"></label>
          <label>Comercio<input type="radio" name="ups13" value="Comercio" id="k" class="mx-3"></label>
          <label>Servicios Financieros<input type="radio" name="ups13" value="Servicios Financieros" id="l" class="mx-3"></label>
          <label>Otros<input type="radio" name="ups13" value="Otros" id="m" class="mx-3"></label>
        </div>



        </div>

        <div class="form-group">
          <label for="up14" class="control-label"><strong>III.14 Tamaño de la empresa u organizacion</strong></label><br>
          <label>Microempresa (1-30)<input type="radio" name="up14" value="Micro" id="up14" class="mx-3"></label>
          <label>Pequeña (31-100)<input type="radio" name="up14" value="Pequena" id="up14" class="mx-3"></label>
          <label>Mediana (101-500)<input type="radio" name="up14" value="Mediana" class="mx-3"></label>
          <label>Grande (mas de 500)<input type="radio" name="up14" value="Grande" id="up14" class="mx-3"></label>
        </div>

        <hr><br>


           <legend class="leyenda"><span class="numero">IV</span>DESENPEÑO PROFESIONAL DE LOS EGRESADOS (COHERENCIA ENTRE LA FORMACION Y EL TIPO DE EMPLEO)
          </legend>
            <p class="text-justify">Marca los datos que corresponden a tu trayectoria Profesional</p>

            <div >

        <div class="form-group">
          <label for="dp1" class="control-label"><strong>IV.I Eficiencia para realizar las actividades laborales, en relacion con su formacion academica:</strong></label><br>
          <label>Muy eficiente<input type="radio" name="dp1" value="Muy eficiente" id="dp1" class="mx-5"></label>
          <label>Eficiente<input type="radio" name="dp1" value="Eficiente" id="dp1" class="mx-5"></label>
          <label>Poco eficiente<input type="radio" name="dp1" value="Poco eficiente" id="dp1" class="mx-5"></label>
          <label>Deficiente<input type="radio" name="dp1" value="Deficiente" id="dp1" class="mx-5"></label>
        </div>

        <div class="form-group">
          <label for="dp2" class="control-label"><strong>IV.II Como califica su formacion academica con respecto a su desempeño laboral:</strong></label><br>
          <label>Exelente<input type="radio" name="dp2" value="Exelente" id="dp2" class="mx-5"></label>
          <label>Bueno<input type="radio" name="dp2" value="Bueno" id="dp2" class="mx-5"></label>
          <label>Regular<input type="radio" name="dp2" value="Regular" id="dp2" class="mx-5"></label>
          <label>Malo<input type="radio" name="dp2" value="Malo" id="dp2" class="mx-5"></label>
          <label>Pesimo<input type="radio" name="dp2" value="Pesimo" id="dp2" class="mx-5"></label>
        </div>

         <div class="form-group">
          <label for="dp3" class="control-label"><strong>IV.III Utilidad de las residencias profesionales o practicas profesionales para su desarrollo laboral y profesiona3:</strong></label><br>
          <label>Exelente<input type="radio" name="dp3" value="Exelente" id="dp3" class="mx-5"></label>
          <label>Bueno<input type="radio" name="dp3" value="Bueno" id="dp3" class="mx-5"></label>
          <label>Regular<input type="radio" name="dp3" value="Regular" id="dp3" class="mx-5"></label>
          <label>Malo<input type="radio" name="dp3" value="Malo" id="dp3" class="mx-5"></label>
          <label>Pesimo<input type="radio" name="dp3" value="Pesimo" id="dp3" class="mx-5"></label>
        </div>



        <label class="control-label"><strong>IV.4 Aspectos que valora la empresa u organismo para la contratacion de egresados </strong></label><br>

        <label class="control-label font-italic text-info"><strong>donde 1=Poco y 5=Mucho </strong></label><br><hr>

        <div class="row">

          <div class="col-4 range-slider">
            <label class="control-label">1.Area o campo de Estudio</label>
          </div>

          <div class="col-2 range-slider text-center">
            <input class=" form-control range-slider__range" name="dpp1" type="range" min="1" max="5" step="1">
            <span class="range-slider__value">(valor)</span>
          </div>


          <div class="col-4 range-slider">
            <label class="control-label">2. Titulacion</label>
          </div>

          <div class="colrange-slider text-center">
            <input class=" form-control range-slider__range" name="dpp2" type="range" min="1" max="5" step="1">
            <span class="range-slider__value">(valor)</span>
          </div>

        </div>

        <hr>

        <div class="row">

          <div class="col-4 range-slider">
            <label class="control-label">3.Experiencia laboral / practica (antes de egresar)</label>
          </div>

          <div class="col-2 range-slider text-center">
            <input class=" form-control range-slider__range" name="dpp3" type="range" min="1" max="5" step="1">
            <span class="range-slider__value">(valor)</span>
          </div>

          <div class="col-4 range-slider">
            <label class="control-label">4. Competencia laboral: Habilidad para resolver problemas,
              capacidad de analisis, habilidad para el aprendizaje, administracion del tiempo, capacidad
            de negociacion, habilidades manuales, trabajo en equipo, iniciativa, honestidad, persistencia, etc.</label>
          </div>

          <div class="colrange-slider text-center">
            <input class=" form-control range-slider__range" name="dpp4" type="range" min="1" max="5" step="1">
            <span class="range-slider__value">(valor)</span>
          </div>

        </div>

        <hr>

        <div class="row">

          <div class="col-4 range-slider">
            <label class="control-label">5. Posicionamiento de la institucion de egreso</label>
          </div>

          <div class="col-2 range-slider text-center">
            <input class=" form-control range-slider__range" name="dpp5" type="range" min="1" max="5" step="1">
            <span class="range-slider__value">(valor)</span>
          </div>


          <div class="col-4 range-slider">
            <label class="control-label">6. Conocimiento del idioma extranjero</label>
          </div>

          <div class="colrange-slider text-center">
            <input class=" form-control range-slider__range" name="dpp6" type="range" min="1" max="5" step="1">
            <span class="range-slider__value">(valor)</span>
          </div>

        </div>

        <hr>

        <div class="row">

            <div class="col-4 range-slider">
            <label class="control-label">7. Recomendaciones / Referencias</label>
            </div>

            <div class="col-2 range-slider text-center">
            <input class=" form-control range-slider__range" name="dpp7" type="range" min="1" max="5" step="1">
            <span class="range-slider__value">(valor)</span>
            </div>


          <div class="col-4 range-slider">
              <label class="control-label">8. Personalidad / Actitudes</label>
          </div>

          <div class="colrange-slider text-center">
            <input class=" form-control range-slider__range" name="dpp8" type="range" min="1" max="5" step="1">
            <span class="range-slider__value">(valor)</span>
          </div>

        </div>
        <hr>
         <div class="row">

            <div class="col-4 range-slider">
            <label class="control-label">9. Capacidad de liderango</label>
            </div>

            <div class="col-2 range-slider text-center">
            <input class=" form-control range-slider__range" name="dpp9" type="range" min="1" max="5" step="1">
            <span class="range-slider__value">(valor)</span>
            </div>


          <div class="col-4 range-slider">
              <label class="control-label">10. Otros</label>
          </div>

          <div class="colrange-slider text-center">
            <input class=" form-control range-slider__range" name="dpp10" type="range" min="1" max="5" step="1">
            <span class="range-slider__value">(valor)</span>
          </div>

        </div>

        <hr>

          <legend class="leyenda"><span class="numero">V</span>EXPECTATIVAS DE DESARROLLO, SUPERACION PROFESIONAL Y DE ACTUALIZACION </legend>

          <div class="row">

            <div class="col-12">
              <div class="form-group">
                <label for="up1" class="control-label"><strong>V.I ACTUALIZACION DE CONOCIMIENTOS</strong></label><br>
              </div>
            </div>

          </div>


          <div class="row">

            <div class="form-group col-4">
              <label class="control-label">Le gustaria tomar cursos de actualizacion</label>
            </div>

            <div class="form-group col-3">
              <label>SI <input type="radio" name="e01" value="Si"  class="control-label mx-4"></label>
              <label>NO <input type="radio" name="e01" value="No"  class="control-label mx-4" ></label>
            </div>

            <div class="form-group col-5">
              <input type="text" name="e02" class="form-control form-control-sm" placeholder= "Cuales?">
            </div>

          </div>

          <div class="row">

            <div class="form-group col-4">
              <label for="titulado" class="control-label">Le gustaria tomar un posgrado</label>
            </div>

            <div class="form-group col-3">
              <label>SI <input type="radio" name="e03" value="Si" id="titulado" class="control-label mx-4"></label>
              <label>NO <input type="radio" name="e03" value="No" id="titulado" class="control-label mx-4" ></label>
            </div>

            <div class="form-group col-5">
              <input type="text" name="e04" class="form-control form-control-sm"  placeholder= "Cual?">
            </div>

          </div>

            <hr>

          <legend class="leyenda"><span class="numero">VI</span>PARTICIPACION SOCIAL DE LOS EGRESADOS</legend>


          <div class="row">

            <div class="form-group col-4">
              <label class="control-label"> VI.1 Pertenece a organizacion social:</label>
            </div>

            <div class="form-group col-3">
              <label>SI<input type="radio" name="ap1" value="Si" class="control-label mx-4"></label>
              <label>NO<input type="radio" name="ap1" value="No" class="control-label mx-4" ></label>
            </div>

            <div class="form-group col-5">
              <input type="text" name="aps1" class="form-control form-control-sm" placeholder= "Cuales?">
            </div>

          </div>

          <div class="row">

            <div class="form-group col-4">
              <label for="titulado" class="control-label">VI.2 Pertenece  organismo de profesionales</label>
            </div>

            <div class="form-group col-3">
              <label>SI<input type="radio" name="ap2" value="Si"  class="control-label mx-4"></label>
              <label>NO<input type="radio" name="ap2" value="No"  class="control-label mx-4" ></label>
            </div>

            <div class="form-group col-5">
              <input type="text" name="aps2" class="form-control form-control-sm" placeholder= "Cual?">
            </div>

          </div>

          <div class="row">

            <div class="form-group col-4">
              <label for="titulado" class="control-label">VI.3 Pertenece a la asociasion de egresados</label>
            </div>

            <div class="form-group col-3">
              <label>SI<input type="radio" name="ap3" value="Si" class="control-label mx-4"></label>
              <label>NO<input type="radio" name="ap3" value="No" class="control-label mx-4" ></label>
            </div>

          </div>
      </div>

      <hr>

    <hr>

  <div >
    </div class="form-control">
    <legend class="leyenda"><span class="numero">VII</span>COMENTARIOS Y SUGERENCIAS</legend>
    <p class="text-justify">Opinion o recomendacion para mejorar la formacion profesional de un egresado de su carrera</p>

    <div class="col-12">
    <input type="text" name="comentario" class="form-control form-control-sm " id="comentario" placeholder= "Opinion o recomendacion para mejorar la formacion profesional de un egresado de su carrera">
    </div>
  </div>   <br>
  </div>
</div> <!-- div del contenedor de fin de formulario  -->

<div class="col-12">
  <button type="submit" id="btn" class="btn btn-primary  btn-block btn btn-outline-danger"
  >ENVIAR FORMULARIO</button>
  <br><br>
</div>
</form>

<footer>
  <h6>Instituto Tecnologico Superior de Puerto Peñasco</h6>
</footer>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/valores.js"></script>
<script src="js/ocultar.js"></script>
<script src="js/solonumero.js"></script>
<script src="js/validar.js"></script>
</body>

</html>
