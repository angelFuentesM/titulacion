<?php
error_reporting(E_ALL ^ E_NOTICE);
require 'conexion.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilosheader.css">
  <link rel="stylesheet" href="css/estilosf.css">
  <link rel="stylesheet" href="css/tablab.css">
  <link rel="stylesheet" href="fonts/style.css">
  <link rel="stylesheet" href="css/impresion.css" media="print">
</head>

<body>

  <div class="text-center">
    <header>
      <div class="logo">
        <img src="imagenes/bannerb.png" width="1024" class="logo">
      </div>    
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

          <li class="nav-item active">
            <a class="nav-link active" href="Ad_egresados.php">Egresados <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="Ad_admon.php">Administrador</a>
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
      </div>
    </nav>
  </div>
  </header>
  <br>

  <!-- Termina Barra de Navegacion-->

  <!--contenedor general-->
  <div class="container" >
    <div id="egresado">
      <div class="row">
        <div class="col-md-12">
          <fieldset>
            <legend class="leyenda"><span class="numero">E</span>INGRESE DATOS DEL EGRESADO</legend>


            <!--Inicia Formulario-->
            <form action="re_egresados.php" method="POST" class="form-horizontal" id="guardar">
              <input type="text" value="guardar" name="opc" hidden>
              <input type="text" value="1" name="privilegio" hidden>
              <input type="text" value="no" name="status" hidden>
              <input type="text" value="No" name="statusCorreo" hidden>

              <div class="row iconprint">
                <div class="form-group col-md-3">
                 <input type="text" name="Upaterno" class="form-control form-control-sm" id="Upaterno" placeholder="Apellido Paterno" required>
               </div>

               <div class="form-group col-md-3">
                 <input type="text" name="Umaterno" class="form-control form-control-sm" id="Umaterno" placeholder="Apellido Materno" required>
               </div>

               <div class="form-group col-md-3">
                 <input type="text" name="Unombre" class="form-control form-control-sm" id="Unombre" placeholder="Nombre (s)" required>
               </div>

               <div class="form-group col-md-3">
                <input type="text" name="nucontrol" pattern="[0-9]{8}" title="8 caracteres Numericos" class="form-control form-control-sm" id="nucontrol" placeholder="No. de Control" onkeypress="return solonumero(event)" onpaste="return false" required>
              </div>

            </div>
          </div>
        </div>

        <div class="row ">
          <div class="col-md-12">
           <div class="row iconprint">

            <div class="form-group col-md-3">
             <select class="custom-select custom-select-sm " id="Ucarrera" name="Ucarrera">
              <option value="">Asigne la Carrera</option>

              <?php
              $consultacarrera = "SELECT * FROM carrera";
              $resultadocarrera = $conexion->query($consultacarrera);

              while ($regCarrera = $resultadocarrera->fetch_array(MYSQLI_BOTH)) {
                echo '<option value="' . $regCarrera['nombreCarrera'] . '">' . $regCarrera['nombreCarrera'] . '</option>';}
                ?>
              </select>
            </div>

            <div class="form-group col-md-3">
             <select class="custom-select custom-select-sm " id="Uciclo" name="Uciclo">
              <option value="">Asigne Ciclo</option>

              <?php
              $consultaciclo = "SELECT * FROM ciclos";
              $resultadociclos = $conexion->query($consultaciclo);

              while ($regCiclos = $resultadociclos->fetch_array(MYSQLI_BOTH)) {
                echo '<option value="' . $regCiclos['ciclo'] . '">' . $regCiclos['ciclo'] . '</option>';}
                ?>

              </select>
            </div>

            <div class="form-group col-md-3">
              <input type="email" name="Ucorreo"  class="form-control form-control-sm" id="Ucorreo" placeholder="e-mail" required>
            </div>

            <div class="form-group col-md-2 ">
              <button type="submit" class="btn btn-primary btn-lg btn-block btn-sm">Registrar</button>
            </div>
          </div>

          <div class="row"> 
            <div class="col-12  ">

             <table>
              <thead> 
               <tr>
                 <th scope="col">No.</th>
                 <th scope="col">Nombre</th>
                 <th scope="col">Control</th>
                 <th scope="col">Carrera</th>                      
                 <th scope="col">e-mail</th>                       
                 <th scope="col">Ciclo</th>                       
                 <th scope="col">Acciones</th>
               </tr>
             </thead>               

             <tbody>

              <?php

              try {

                $consultausuarios = "SELECT * FROM usuarios WHERE privilegio=1";
                $resultadousuarios = $conexion->query($consultausuarios);
                $i=1;
                while ($mostrarusuarios = mysqli_fetch_array($resultadousuarios)) {           
                  ?>


                  <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $mostrarusuarios['Upaterno']." ". $mostrarusuarios['Umaterno']." ".$mostrarusuarios['Unombre'];?></td>                    
                    <td><?php echo $mostrarusuarios['nucontrol']; ?></td>
                    <td><?php echo $mostrarusuarios['Ucarrera']; ?></td>
                    <td><?php echo $mostrarusuarios['Ucorreo']; ?></td>
                    <td><?php echo $mostrarusuarios['Uciclo']; ?></td>
                    <td>
                      <span  class="modificar icon-write" style=" color:#2DBDA8; cursor: pointer;" id="<?php echo $mostrarusuarios['usuariosId']; ?>">
                      </span >
                      |
                      <span class="eliminar icon-cross" style="color:red; cursor: pointer;" id="<?php echo $mostrarusuarios['usuariosId']; ?>">
                      </span>
                      
                    </td>

                  </tr>

                  <?php
                }
              } catch (Exception $ex) {
                print "¡Error!: " . $ex->getMessage() . "<br/>";
                die();
              }
              ?>

            </tbody>
          </table>
        </div>
      </form>

      <!-- Modal -->
      <div class="modal fade" id="modificar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modificar Egresado</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body datos">  
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- fin Modal -->

  </div>
</div>
</div>
</div>
</div>

<div class="iconprint row text-center">
  <div class="col-12">
   <a onclick = "imprimir()" href="" style="color:gray; font-size: 18px "><span class="icon-printer" style="color:black; margin-right:5px"></span>Imprimir</a>
 </div>
</div>

<footer>
  <h6>Instituto Tecnologico Superior de Puerto Peñasco</h6>
</footer>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/valores.js"></script>
<script src="js/ocultar.js"></script>
<script src="js/solonumero.js"></script><!--/activo-->
<script>
 $(".eliminar").click(function(){
  var clave = $(this).attr("id");
  $.ajax({
    url : "re_egresados.php",
    data : "opc=eliminar&clave="+clave,
    type : "POST",
    success: function()
    {
      location.reload();
    }
  })
});

 $(".modificar").click(function(){
  var clave = $(this).attr("id");
  $.ajax({
    url : "re_egresados.php",
    data : "opc=modificar-form&clave="+clave,
    type : "post",
    success: function($datos)
    {
      $(".datos").html($datos);
    }
  })
  $('#modificar').modal('show');
});
</script>
<script>
  function imprimir(){
    window.print();
  }
</script>

</body>

</html>