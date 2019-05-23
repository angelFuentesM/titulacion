<?php
error_reporting(E_ALL ^ E_NOTICE);
require 'conexion.php';

if (isset($_POST['buscar'])) {
$filtro = $_POST['id'];

$query = "SELECT eg.paterno, eg.materno, eg.nombre, eg.control, eg.fecha, eg.curp, eg.sexo, eg.civil, eg.calle,              eg.numero,eg.colonia, eg.postal, eg.ciudad, eg.municipio, eg.estado, eg.telefono, eg.correo, eg.telPaterno,              eg.carrera, eg.especialidad, eg.egreso, eg.titulado, eg.idioma, eg.otroIdioma, eg.idioma, eg.ofimatica,              eg.ciclo, 
                 pe.pp1, pe.pp2, pe.pp3, pe.pp4, pe.pp5, pe.pp6,
                 ub.up1, ub.ups1, ub.up2, ub.up3, ub.ups3, ub.up4, ub.ups4, ub.up5, ub.ups5, ub.up61, ub.up62, ub.up63,     ub.up64, ub.up7, ub.ups7, ub.up8, ub.up9, ub.up10, ub.ups10, ub.up11, ub.up13, ub.ups13, ub.up14,
                 co.comentario,
                 de.dp1, de.dp2, de.dp3,
                 des.dpp1, des.dpp2, des.dpp3, des.dpp4, des.dpp5, des.dpp6, des.dpp7, des.dpp8, des.dpp9, des.dpp10, 
                 ac.e01, ac.e02, ac.e03, ac.e04, 
                 pa.ap1, pa.aps1, pa.ap2, pa.aps2, pa.ap3, 
                 em.giro, em.girob, em.razonSocial, em.domicilioE, em.coloniaE, em.postalE,em.municipioE,  em.estadoE, em.telefonoE, em.extencion, em.correoE, em.web, em.jefe, em.puesto
          FROM egresado eg
          INNER JOIN pertenencia pe ON eg.egresadoId = pe.egresadoId
          INNER JOIN ubicacion ub ON eg.egresadoId = ub.egresadoId
          INNER JOIN comentario co ON eg.egresadoId = co.egresadoId
          INNER JOIN desenpeno de ON eg.egresadoId = de.egresadoId
          INNER JOIN desenpeno2 des ON eg.egresadoId = des.egresadoId
          INNER JOIN actualizacion ac ON eg.egresadoId = ac.egresadoId
          INNER JOIN participacion pa ON eg.egresadoId = pa.egresadoId
          INNER JOIN empresa em ON eg.egresadoId = em.egresadoId
          WHERE control = '$filtro'";
 
          $result = mysqli_query($conexion, $query);
          $row = mysqli_fetch_array($result);

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
  <link rel="stylesheet" href="fonts/style.css">
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

        <form class="form-inline my-2 my-lg-0" method="POST" action="form_ind.php">
         <input type="text" name="id" class="form-control mr-sm-2" placeholder="No. de control">
         <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="filtrar" name="buscar">
        </form>

        </div>
    </nav>
    <br>
  <!-- Termina Barra de Navegacion-->
    
    <div class="row">
      <div class="col-12">
      <h5 class="text-center">Cuestionario de Seguimiento de egresados</h5>
      </div>
    </div>
    <br><br>
  

    <div class="row">
      <div class="col-10"> <!--columna Titulo-->
        <legend class="leyenda"><span class="numero">I</span>Perfil del egresado</legend>
      </div> 

    <div class="iconprint row text-center">
      <div class="col-2">
    <a onclick = "imprimir()" href="" style="color:gray; font-size: 18px "><span class="icon-printer" style="color:black; margin-right:5px"></span>Imprimir</a>
    </div>
    </div>


    </div>

    <div class="row">
    <div class="col-md-6">         
       <p class= "estparrafo">Nombre </p>
      </div> 

       <div class="col-md-2">         
       <p class="estparrafo">Numero de control</p>
      </div>

      <div class="col-md-2">         
       <p class="estparrafo">Fecha de nacimiento</p>
      </div>

       <div class="col-md-2">         
       <p class="estparrafo">CURP</p>
      </div>

    </div>

    <div class="row"> 
      <div class="col-md-6">   <!--nombre-->      
        <input type="text" class="estilo" value="<?php echo $row[0]." ".$row[1]. " ".$row[2]?>"  readonly>
      </div>           

      <div class="col-md-2"> <!--Numero de control-->
        <input type="text" class="estilo" value="<?php echo $row[3]?>"readonly>
      </div>

      <div class="col-md-2"> <!--Fecha de nacimiento-->
        <input type="text" class="estilo" value="<?php echo $row[4]?>" readonly>
      </div>

      <div class="col-md-2"> <!--curp-->
        <input type="text" class="estilo" value="<?php echo $row[5]?>" readonly>
      </div>

    </div>

     <div class="row">
    <div class="col-md-2">         
       <p class="estparrafo">Sexo </p>
      </div> 

       <div class="col-md-2">         
       <p class="estparrafo">Estado Civil</p>
      </div>

      <div class="col-md-6">         
       <p class="estparrafo">Direccion</p>
      </div>

       <div class="col-md-2">         
       <p class="estparrafo">C.P.</p>
      </div>

    </div>

    <div class="row"> 
      <div class="col-md-2"> <!--Sexo-->        
        <input type="text" class="estilo" value="<?php echo $row[6]?>"  readonly>
      </div>   

      <div class="col-md-2"> <!--estado civil-->  
        <input type="text" value="<?php echo $row[7]?>" class="estilo" readonly>
      </div> 

      <div class="col-md-2"> <!--calle-->  
        <input type="text" class="estilo" value="<?php echo "Calle"." ". $row[8]?>" readonly>
      </div>   

      <div class="col-md-2"> <!--numero--> 
        <input type="text" class="estilo" value="<?php echo "Numero"." ". $row[9]?>" readonly>
      </div>

      <div class="col-md-2"> <!--colonia--> 
        <input type="text" class="estilo" value="<?php echo "Col."." ".$row[10]?>" readonly>
      </div>

      <div class="col-md-2"> <!--c.p.--> 
        <input type="text" class="estilo" value="<?php echo $row[11]?>" readonly>
      </div>

    </div>

    <div class="row">
    <div class="col-md-2">         
       <p class="estparrafo">Ciudad </p>
      </div> 

       <div class="col-md-2">         
       <p class="estparrafo">Municipio</p>
      </div>

      <div class="col-md-2">         
       <p class="estparrafo">Estado</p>
      </div>

       <div class="col-md-2">         
       <p class="estparrafo">Telefono</p>
      </div>

      <div class="col-md-2">         
       <p class="estparrafo">e-mail</p>
      </div>

       <div class="col-md-2">         
       <p class="estparrafo">Tel. casa paterna</p>
      </div>

    </div>

    <div class="row"> 
      <div class="col-md-2">     <!--ciudad-->     
        <input type="text" class="estilo" value="<?php echo $row[12]?>"  readonly>
      </div>   

      <div class="col-md-2"> <!--municipio-->
        <input type="text" class="estilo" value="<?php echo $row[13]?>" readonly>
      </div> 

      <div class="col-md-2"> <!--estado-->
        <input type="text" class="estilo" value="<?php echo $row[14]?>" readonly>
      </div>   

      <div class="col-md-2"> <!--telefono-->
        <input type="text" class="estilo" value="<?php echo $row[15]?>" readonly>
      </div>

      <div class="col-md-2"> <!--e-mail-->
        <input type="text" class="estilo" value="<?php echo $row[16]?>" readonly>
      </div>

      <div class="col-md-2"> <!--telefono casa paterna-->
        <input type="text" class="estilo" value="<?php echo $row[17]?>" readonly>
      </div>

    </div>

     <div class="row">
    <div class="col-md-3">         
       <p class="estparrafo">Carrera de egreso </p>
      </div> 

       <div class="col-md-2">         
       <p class="estparrafo">Especialidad</p>
      </div>

      <div class="col-md-2">         
       <p class="estparrafo">Mes y año de egreso</p>
      </div>

       <div class="col-md-1">         
       <p class="estparrafo">Titulado</p>
      </div>

      <div class="col-md-2">         
       <p class="estparrafo">Dominio del idioma extrangero</p>
      </div>

       <div class="col-md-2">         
       <p class="estparrafo">Otro Idioma</p>
      </div>

    </div>

       <div class="row"> 
      <div class="col-md-3">  <!--carrera-->       
        <input type="text" class="estilo" value="<?php echo $row[18]?>"  readonly>
      </div>   

      <div class="col-md-2"> <!--especialidad--> 
        <input type="text" class="estilo" value="<?php echo $row[19]?>" readonly>
      </div> 

      <div class="col-md-2"> <!--Mes y a;o de egreso--> 
        <input type="text" class="estilo" value="<?php echo $row[20]?>" readonly>
      </div>   

      <div class="col-md-1"> <!--Titulaco--> 
        <input type="text" class="estilo" value="<?php echo $row[21]?>" readonly>
      </div>

      <div class="col-md-2"> <!--Dominio del idioma--> 
        <input type="text" class="estilo" value="<?php echo $row[22]?>"readonly>
      </div>

      <div class="col-md-2"> <!--otro idioma--> 
        <input type="text" class="estilo" value="<?php echo $row[23]?>"readonly>
      </div>

    </div>

    <div class="row">
    <div class="col-md-12">         
       <p class="estparrafo">Manejo de paquetes de Computacion:</p>
      </div> 
    </div>

    <div class="row"> 
      <div class="col-md-12"> <!--ofimatica-->         
        <input type="text" class="estilo" value="<?php echo $row[25]?>"  readonly>
      </div> 
    </div>

    <br><br>

     <div class="row">
      <div class="col-12"> 
        <legend class="leyenda"><span class="">II</span> PERTINENCIA Y DISPONIBILIDAD DE MEDIOS Y RECURSOS PARA EL APRENDIZAJE</legend>
      </div> 
     </div>

      <div class="row">
      <div class="col-4"> 
        <p class="estparrafo">II.1 Calidad de los docentes</p>
      </div>

      <div class="col-2">   <!--pp1-->      
        <input type="text" class="estilo" value="<?php echo $row[27]?>"  readonly>
      </div>

      <div class="col-4"> 
        <p class="estparrafo">II.4 Enfasis en que se le presentaba a la investigacion dentro del proceso de enseñanza</p>
      </div>

      <div class="col-2">   <!--pp4-->       
        <input type="text" class="estilo" value="<?php echo $row[30]?>"  readonly>
      </div>

      </div> 

       <div class="row">
      <div class="col-4">  
        <p class="estparrafo">II.2 Plan de Estudios</p>
      </div>

      <div class="col-2">   <!--pp2-->    
        <input type="text" class="estilo" value="<?php echo $row[28]?>"  readonly>
      </div>

      <div class="col-4"> 
        <p class="estparrafo">II.5 Satisfaccio con las condiciones de estudio (Infraestructura)</p>
      </div>

      <div class="col-2">    <!--pp5-->    
        <input type="text" class="estilo" value="<?php echo $row[31]?>"  readonly>
      </div>
      </div>

          <div class="row">
      <div class="col-4"> 
        <p class="estparrafo">II.3 Oportunidad de participar en proyectos de investigacion y desarrollo</p>
      </div>

      <div class="col-2">     <!--pp3-->      
        <input type="text" class="estilo" value="<?php echo $row[29]?>"  readonly>
      </div>

      <div class="col-4"> 
        <p class="estparrafo">II.6 Experiencia obtenida a travez de la residencia profesional</p>
      </div>

      <div class="col-2">     <!--pp6-->      
        <input type="text" class="estilo" value="<?php echo $row[32]?>"  readonly>
      </div>
      </div>

      <br><br>

       <div class="row">
      <div class="col-12"> 
        <legend class="leyenda"><span class="numero">III</span>UBICACION LABORAL DE LOS EGRESADOS</legend>
      </div> 
     </div>

     <div class="row">
      <div class="col-4"> 
        <p class="estparrafo">III.1 Actividad a la que se dedica actualmente:</p>
      </div>

      <div class="col-2">  <!--up1-->       
        <input type="text" class="estilo" value="<?php echo $row[33]?>"  readonly>
      </div>

      <div class="col-3"> 
        <p class="estparrafo">Si estudia, indicar si es: </p>
      </div>

      <div class="col-3">  <!--ups1-->        
        <input type="text" class="estilo" value="<?php echo $row[34]?>"  readonly>
      </div>


      </div> 

      <div class="row">
        <div class="col-4"> 
          <p class="estparrafo">III.2 En caso de trabajar: Tiempo transcurrido para obtener el primer empleo.</p>
        </div>

        <div class="col-2">  <!--up2-->        
          <input type="text" class="estilo" value="<?php echo $row[35]?>"  readonly>
        </div>      
      </div>

      <div class="row">
      <div class="col-4"> 
        <p class="estparrafo">III.3 Medio para obtener el empleo</p>
      </div>

      <div class="col-2">  <!--up3-->        
        <input type="text" class="estilo" value="<?php echo $row[36]?>"  readonly>
      </div>

      <div class="col-3"> 
        <p class="estparrafo">En caso de ser otro especifique:</p>
      </div>

      <div class="col-3">   <!--ups3-->      
        <input type="text" class="estilo" value="<?php echo $row[37]?>"  readonly>
      </div>
      </div>

          <div class="row">
      <div class="col-4"> 
        <p class="estparrafo">III.4 Requisitos de contratacion</p>
      </div>

      <div class="col-2">     <!--up4-->    
        <input type="text" class="estilo" value="<?php echo $row[38]?>"  readonly>
      </div>

      <div class="col-2"> 
        <p class="estparrafo">Especificar:</p>
      </div>

      <div class="col-4">   <!--ups4-->      
        <input type="text" class="estilo" value="<?php echo $row[39]?>"  readonly>
      </div>
      </div>

      <div class="row">
      <div class="col-4"> 
        <p class="estparrafo">III.5 Idioma que utiliza en su trabajo</p>
      </div>

      <div class="col-2">  <!--up5-->        
        <input type="text" class="estilo" value="<?php echo $row[40]?>"  readonly>
      </div>

      <div class="col-2"> 
        <p class="estparrafo">Especificar otro idioma:</p>
      </div>

      <div class="col-4">  <!--ups5-->       
        <input type="text" class="estilo" value="<?php echo $row[41]?>"  readonly>
      </div>
      </div>

    <div class="row"> 
      <div class="col-4"> 
        <p class="estparrafo">III.6 En que proporcion utiliza en el desempeño de sus actividades laborales cada una de las habiliades del idioma extranjero</p>
      </div>  
      
      <div class="col-1"> 
        <p class="estparrafo">Hablar:</p>
      </div>

      <div class="col-1"> <!--up61-->        
        <input type="text" class="estilo" value="<?php echo $row[42]?>"  readonly>
      </div>

      <div class="col-1"> <!--up62-->
        <p class="estparrafo">Escribir:</p>
      </div>

      <div class="col-1">         
        <input type="text" class="estilo" value="<?php echo $row[43]?>"  readonly>
      </div>

      <div class="col-1"> <!--up63-->
        <p class="estparrafo">Leer:</p>
      </div>

      <div class="col-1">         
        <input type="text" class="estilo" value="<?php echo $row[44]?>"  readonly>
      </div>

       <div class="col-1"> <!--up64-->
        <p class="estparrafo">Escuchar:</p>     
      </div>

      <div class="col-1">         
        <input type="text" class="estilo" value="<?php echo $row[45]?>"  readonly>
      </div>

    </div>

    <div class="row"> 
      <div class="col-4"> <!--up7-->
        <p class="estparrafo">III.7 Antiguedad en el empleo</p>
      </div>

      <div class="col-2">         
        <input type="text" class="estilo" value="<?php echo $row[46]?>"  readonly>
      </div>

      <div class="col-4"> 
        <p class="estparrafo">Año de ingreso</p>
      </div>

      <div class="col-2">  <!--ups7-->       
        <input type="text" class="estilo" value="<?php echo $row[47]?>"  readonly>
      </div>

    </div>

    <div class="row"> 
      <div class="col-4"> 
        <p class="estparrafo">III.8 Ingreso (salario minimo diario)</p>
      </div>

      <div class="col-2">         
        <input type="text" class="estilo" value="<?php echo $row[48]?>"  readonly>
      </div>

      <div class="col-4"> 
        <p class="estparrafo">III.9 Nivel jerarquico en el trabajo</p>
      </div>

      <div class="col-2">         
        <input type="text" class="estilo" value="<?php echo $row[49]?>"  readonly>
      </div>

    </div>

    <div class="row"> 
      <div class="col-4"> 
        <p class="estparrafo">III.10 Condicion de Trabajo</p>
      </div>

      <div class="col-2">         
        <input type="text" class="estilo" value="<?php echo $row[50]?>"  readonly>
      </div>

      <div class="col-4"> 
        <p class="estparrafo">Especificar otra condicion laboral</p>
      </div>

      <div class="col-2">         
        <input type="text" class="estilo" value="<?php echo $row[51]?>"  readonly>
      </div>

    </div>

    <div class="row"> 
      <div class="col-4"> 
        <p class="estparrafo">III.11 Relacion de trabajo con su area de formacion</p>
      </div>

      <div class="col-2">         
        <input type="text" class="estilo" value="<?php echo $row[52]?>"  readonly>
      </div> 

    </div>

    <div class="row"> 
      <div class="col-12"> 
        <p class="estparrafo">III.12 DATOS DE LA EMPRESA U ORGANISMO</p>
      </div>
    </div>

    <div class="row"> 
      <div class="col-4"> 
        <p class="estparrafo">Organismo</p>
      </div>

      <div class="col-2"> <!--giro-->        
        <input type="text" class="estilo" value="<?php echo $row[79]?>"  readonly>
      </div> 

       <div class="col-4"> 
        <p class="estparrafo">Giro o actividad principal de la empresa</p>
      </div>

      <div class="col-2"> <!--girob-->        
        <input type="text" class="estilo" value="<?php echo $row[80]?>"  readonly>
      </div>

    </div>

    <div class="row"> 
      <div class="col-2"> 
        <p class="estparrafo">Razon Social</p>
      </div>

      <div class="col-4">         
        <input type="text" class="estilo" value="<?php echo $row[81]?>"  readonly>
      </div> 

       <div class="col-1"> 
        <p class="estparrafo">Calle</p>
      </div>

      <div class="col-2">         
        <input type="text" class="estilo" value="<?php echo $row[82]?>"  readonly>
      </div>

       <div class="col-1"> 
        <p class="estparrafo">Colonia</p>
      </div>

      <div class="col-2">         
        <input type="text" class="estilo" value="<?php echo $row[83]?>"  readonly>
      </div>
    </div>

    <div class="row"> 
      <div class="col-3"> 
        <p class="estparrafo">Codigo Postal</p>
      </div>      

       <div class="col-3"> 
        <p class="estparrafo">Ciudad</p>
      </div>

      <div class="col-3"> 
        <p class="estparrafo">Municipio</p>
      </div>

       <div class="col-3"> 
        <p class="estparrafo">Estado</p>
      </div>    
    </div>

    <div class="row"> 
      <div class="col-3"> <!--codigo postal-->
        <input type="text" class="estilo" value="<?php echo $row[84]?>"  readonly>
      </div>      

       <div class="col-3"> <!--ciudad-->
        <input type="text" class="estilo" value="<?php echo $row[85]?>"  readonly>
      </div>

      <div class="col-3"> <!--Municipio-->
        <input type="text" class="estilo" value="<?php echo $row[85]?>"  readonly>
      </div>

       <div class="col-3"> <!--Estado-->
        <input type="text" class="estilo" value="<?php echo $row[86]?>"  readonly>
      </div>    
    </div>

    <div class="row"> 
      <div class="col-3"> 
        <p class="estparrafo">Telefono</p>
      </div>      

       <div class="col-3"> 
        <p class="estparrafo">Extencion</p>
      </div>

      <div class="col-3"> 
        <p class="estparrafo">e-mail</p>
      </div>

       <div class="col-3"> 
        <p class="estparrafo">Pagina web</p>
      </div>    
    </div>

     <div class="row"> 
      <div class="col-3"> <!--telefono-->
        <input type="text" class="estilo" value="<?php echo $row[87]?>"  readonly>
      </div>      

       <div class="col-3"> <!--Extencion-->
        <input type="text" class="estilo" value="<?php echo $row[88]?>"  readonly>
      </div>

      <div class="col-3"> <!--email-->
        <input type="text" class="estilo" value="<?php echo $row[89]?>"  readonly>
      </div>

       <div class="col-3"> <!--pagina-->
        <input type="text" class="estilo" value="<?php echo $row[90]?>"  readonly>
      </div>    
    </div>

     <div class="row"> 
      <div class="col-3"> 
        <p class="estparrafo">Nombre del Jefe inmediato</p>
      </div>       

      <div class="col-3"> 
        <p class="estparrafo">Puesto del Jefe inmediato</p>
      </div>          
    </div>

    <div class="row"> 
      <div class="col-3"> <!--nombre jefe-->
        <input type="text" class="estilo" value="<?php echo $row[91]?>"  readonly>
      </div>      

       <div class="col-3"> <!--puesto jefe-->
        <input type="text" class="estilo" value="<?php echo $row[92]?>"  readonly>
      </div>         
    </div>
    <br>

    <div class="row"> 
      <div class="col-3"> 
        <p class="estparrafo">III.13 Sector Economico de la Empresa u Organizacion</p>
      </div>       

      <div class="col-2"> <!--up13-->
        <input type="text" class="estilo" value="<?php echo "Sector"." ".$row[53]?>"  readonly>
      </div>  

      <div class="col-2"> <!--ups13-->
        <input type="text" class="estilo" value="<?php echo $row[54]?>"  readonly>
      </div>        

     <div class="col-3"> 
        <p class="estparrafo">III.14 Tamaño de la empresa u organizacion</p>
      </div>       

      <div class="col-2"> <!--up14-->
        <input type="text" class="estilo" value="<?php echo $row[55]?>"  readonly>
      </div>
    </div>

    <br><br>

     <div class="row">
      <div class="col-12"> <!--columna Titulo-->
        <legend class="leyenda"><span class="numero">IV</span>DESENPEÑO PROFESIONAL DE LOS EGRESADOS (COHERENCIA ENTRE LA FORMACION Y EL TIPO DE EMPLEO)</legend>
      </div> 
     </div>

     <div class="row"> 
      <div class="col-4"> 
        <p class="estparrafo">IV.I Eficiencia para realizar las actividades laborales, en relacion con su formacion academica:</p>
      </div>       

      <div class="col-2"> <!--dp1-->
        <input type="text" class="estilo" value="<?php echo $row[57]?>"  readonly>
      </div>               

     <div class="col-4"> 
        <p class="estparrafo">IV.II Como califica su formacion academica con respecto a su desempeño laboral:</p>
      </div>       

      <div class="col-2"> <!--dp2-->
        <input type="text" class="estilo" value="<?php echo $row[58]?>"  readonly>
      </div>
    </div>

    <br><br>

     <div class="row"> 
      <div class="col-4"> 
        <p class="estparrafo">IV.III Utilidad de las residencias profesionales o practicas profesionales para su desarrollo laboral y profesional:</p>
      </div>       

      <div class="col-2"> <!--dp3-->
        <input type="text" class="estilo" value="<?php echo $row[59]?>"  readonly>
      </div>     
    </div>

     <div class="row"> 
      <div class="col-6"> 
        <p class="estparrafo">IV.4 Aspectos que valora la empresa u organismo para la contratacion de egresados :</p>
      </div>  

      <div class="col-6"> 
        <p class="estparrafo">Donde 1=Poco y 5=Mucho </p>
      </div>       
    </div>

    <div class="row"> 
      <div class="col-3"> 
        <p class="estparrafo">1.Area o campo de Estudio</p>
      </div>

      <div class="col-1"> <!--dpp-->        
        <input type="text" class="estilo" value="<?php echo $row[60]?>"  readonly>
      </div> 

       <div class="col-2"> 
        <p class="estparrafo">2. Titulacion</p>
      </div>

      <div class="col-1">         
        <input type="text" class="estilo" value="<?php echo $row[61]?>"  readonly>
      </div>

       <div class="col-4"> 
        <p class="estparrafo">3.Experiencia laboral / practica (antes de egresar)</p>
      </div>

      <div class="col-1">         
        <input type="text" class="estilo" value="<?php echo $row[62]?>"  readonly>
      </div>      
    </div>

    <div class="row"> 
      <div class="col-6"> 
        <p class="estparrafo">4. Competencia laboral: Habilidad para resolver problemas, capacidad de analisis, habilidad para el aprendizaje, administracion del tiempo, capacidad de negociacion, habilidades manuales, trabajo en equipo, iniciativa, honestidad, persistencia, etc.</p>
      </div>

      <div class="col-1">         
        <input type="text" class="estilo" value="<?php echo $row[63]?>"  readonly>
      </div> 

       <div class="col-4"> 
        <p class="estparrafo">5. Posicionamiento de la institucion de egreso</p>
      </div>

      <div class="col-1">         
        <input type="text" class="estilo" value="<?php echo $row[64]?>"  readonly>
      </div>

           
    </div>

    <div class="row"> 
      <div class="col-3"> 
        <p class="estparrafo">6. Conocimiento del idioma extranjero</p>
      </div>

      <div class="col-1">         
        <input type="text" class="estilo" value="<?php echo $row[65]?>"  readonly>
      </div> 

       <div class="col-3"> 
        <p class="estparrafo">7. Recomendaciones / Referencias</p>
      </div>

      <div class="col-1">         
        <input type="text" class="estilo" value="<?php echo $row[66]?>"  readonly>
      </div>

       <div class="col-3"> 
        <p class="estparrafo">8. Personalidad / Actitudes</p>
      </div>

      <div class="col-1">         
        <input type="text" class="estilo" value="<?php echo $row[67]?>"  readonly>
      </div>           
    </div>

    <div class="row"> 
      <div class="col-3"> 
        <p class="estparrafo">9. Capacidad de liderango</p>
      </div>

      <div class="col-1">         
        <input type="text" class="estilo" value="<?php echo $row[68]?>"  readonly>
      </div> 

      <div class="col-3"> 
        <p class="estparrafo">10. Otros</p>
      </div>

      <div class="col-1">         
        <input type="text" class="estilo" value="<?php echo $row[69]?>"  readonly>
      </div>                
    </div>

    <br><br>

    <div class="row">
      <div class="col-12"> 
        <legend class="leyenda"><span class="numero">V</span>EXPECTATIVAS DE DESARROLLO, SUPERACION PROFESIONAL Y DE ACTUALIZACION </legend>
      </div> 
    </div>

    <div class="row"> 
      <div class="col-8"> 
        <p class="estparrafo">V.I ACTUALIZACION DE CONOCIMIENTOS</p>
      </div>
    </div>

    <div class="row"> 
      <div class="col-4"> 
        <p class="estparrafo">Le gustaria tomar cursos de actualizacion</p>
      </div>

      <div class="col-1"> <!--e01-->      
        <input type="text" class="estilo" value="<?php echo $row[70]?>"  readonly>
      </div> 

      <div class="col-2"> 
        <p class="estparrafo">Cuales?</p>
      </div>

      <div class="col-5">  <!--e02-->        
        <input type="text" class="estilo" value="<?php echo $row[71]?>"  readonly>
      </div>                
    </div>

    <div class="row"> 
      <div class="col-4"> 
        <p class="estparrafo">Le gustaria tomar un posgrado</p>
      </div>

      <div class="col-1">  <!--e03-->       
        <input type="text" class="estilo" value="<?php echo $row[72]?>"   readonly>
      </div> 

      <div class="col-2"> 
        <p class="estparrafo">Cual?</p>
      </div>

      <div class="col-5">  <!--e04-->        
        <input type="text" class="estilo" value="<?php echo $row[73]?>"   readonly>
      </div>                
    </div>

    <br><br>

     <div class="row">
      <div class="col-12"> 
        <legend class="leyenda"><span class="numero">VI</span>PARTICIPACION SOCIAL DE LOS EGRESADOS</legend>
      </div> 
    </div>   

    <div class="row"> 
      <div class="col-4"> 
        <p class="estparrafo">VI.1 Pertenece a organizacion social:</p>
      </div>

      <div class="col-1">  <!--ap1-->        
        <input type="text" class="estilo" value="<?php echo $row[74]?>"  readonly>
      </div> 

      <div class="col-2"> 
        <p class="estparrafo">Cuales?</p>
      </div>

      <div class="col-5">    <!--aps1-->     
        <input type="text" class="estilo" value="<?php echo $row[75]?>"  readonly>
      </div>                
    </div>

    <div class="row"> 
      <div class="col-4"> 
        <p class="estparrafo">VI.2 Pertenece organismo de profesionales</p>
      </div>

      <div class="col-1">  <!--ap2-->       
        <input type="text" class="estilo" value="<?php echo $row[76]?>"  readonly>
      </div> 

      <div class="col-2"> 
        <p class="estparrafo">Cual?</p>
      </div>

      <div class="col-5">    <!--aps2-->      
        <input type="text" class="estilo" value="<?php echo $row[77]?>"  readonly>
      </div>                
    </div>

    <div class="row"> 
      <div class="col-4"> 
        <p class="estparrafo">VI.3 Pertenece a la asociasion de egresados</p>
      </div>

      <div class="col-1"> <!--ap3-->         
        <input type="text" class="estilo" value="<?php echo $row[78]?>"  readonly>
      </div> 

      <div class="col-2"> 
        <p class="estparrafo">Cual?</p>
      </div>                      
    </div>

    <br><br>

    <div class="row">
      <div class="col-12"> 
        <legend class="leyenda"><span class="numero">VII</span>COMENTARIOS Y SUGERENCIAS
      </div>   
    </div>

    <div class="row"> 
      <div class="col-12"> 
        <p class="estparrafo">Opinion o recomendacion para mejorar la formacion profesional de un egresado de su carrera
        </p>
      </div>
    </div>

    <div class="row"> 
      <div class="col-12"> <!--comentarios-->
       <input type="text" class="estilo" value="<?php echo $row[56]?>"  readonly> 
      </div>
    </div>

<br><br>
  </div><!--Contenedor general-->
<br>

  <footer>
    <h6>Instituto Tecnologico Superior de Puerto Peñasco</h6>
  </footer>

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/valores.js"></script>
  <script src="js/ocultar.js"></script>
  <script src="js/solonumero.js"></script>
  <script>
    function imprimir(){
      window.print();
    }
  </script>

</body>
</html>
