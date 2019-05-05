<?php 
  require('conexion.php');
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

    <br>
    <div class="container" > <!--contenedor general-->

      <div class="text-center col-md-12">
        
        <button type="button" name="agregar" onclick="mostraregresado()" value="" id="radioegresado" class="btn btn-outline-danger" checked >Egresado</button> 

        <button type="button" name="agregar" onclick="mostraradmon()" value="" id="radioadmon" class="btn btn-outline-danger">Administrador</button>


        <button type="button" name="agregar" onclick="mostrarciclo()" value="" id="radiociclo" class="btn btn-outline-danger">Ciclo</button>

        <button type="button" name="agregar" onclick="mostrarcarrera()" value="" id="radiocarrera" class="btn btn-outline-danger">Carrera</button>

        <button type="button" name="indicadores" onclick="direccionar()" id="enviar" class="btn btn-warning">Indicadores</button>

    <script>
    function direccionar() {
    window.open("perfil.php");
    }
    </script>

      
      </div>
      <hr>


      <div id="egresado" style="display:none;">
        <div class="row">
          <div class="col-md-12">
            <fieldset>
              <legend class="leyenda"><span class="numero">E</span>INGRESE LOS DATOS DEL EGRESADO</legend>

              <form action="registra2.php" method="POST" class="form-horizontal" id="guardar"> 
              <input type="text" value="guardar" name="opc" hidden>
                <!--Inicia Formulario-->

                <div class="row">
                  <div class="form-group col-md-3">
                    <label for="paterno" class="control-label "> Apellido Paterno:</label>
                    <input type="text" name="Upaterno" class="form-control form-control-sm" id="Upaterno" placeholder="Apellido Paterno" required>
                  </div>

                  <div class="form-group col-md-3">
                    <label for="materno" class="control-label">Apellido Materno:</label>
                    <input type="text" name="Umaterno" class="form-control form-control-sm" id="Umaterno" placeholder="Apellido Materno" required>
                  </div>

                  <div class="form-group col-md-3">
                    <label for="Unombre" class="control-label">Nombre:</label>
                    <input type="text" name="Unombre" class="form-control form-control-sm" id="Unombre" placeholder="Nombre (s)" required>
                  </div>

                  <div class="form-group col-md-3">
                    <label for="control" class="control-label">Numero de control:</label>
                    <input type="text" name="nucontrol" pattern="[0-9]{8}" title="8 caracteres Numericos" class="form-control form-control-sm" id="nucontrol" placeholder="No. de Control" onkeypress="return solonumero(event)" onpaste="return false" required>
                  </div>


                </div>


              </div>
            </div>
          

          <div class="row">
            <div class="col-md-12">
             <div class="row">

      <div class="form-group col-md-3">
      <label for="carrera" class="control-label">Carrera de egreso:</label>
      <select class="custom-select custom-select-sm " id="Ucarrera" name="Ucarrera">
      <option value="">Asigne la Carrera</option>

      <?php 
            $consultacarrera = "SELECT * FROM carrera";
            $resultadocarrera = $conexion->query($consultacarrera);

            while ($regCarrera = $resultadocarrera->fetch_array(MYSQLI_BOTH)) {
            echo'<option value="'.$regCarrera['nombreCarrera'].'">'.$regCarrera['nombreCarrera'].'</option>';}
      ?>

     </select>
      </div>

         <div class="form-group col-md-3">
      <label for="ciclo" class="control-label">Ciclo:</label>
      <select class="custom-select custom-select-sm " id="ciclo" name="ciclo">
      <option value="">Asigne Ciclo</option>

      <?php 
            $consultaciclo = "SELECT * FROM ciclos";
            $resultadociclos = $conexion->query($consultaciclo);

            while ($regCiclos = $resultadociclos->fetch_array(MYSQLI_BOTH)) {
            echo'<option value="'.$regCiclos['ciclo'].'">'.$regCiclos['ciclo'].'</option>';}
      ?>

     </select>
      </div>


      <div class="form-group col-md-3">
                    <label for="control" class="control-label">Correo electronico:</label>
                    <input type="email" name="Ucorreo"  class="form-control form-control-sm" id="Ucorreo" placeholder="e-mail" required>
                  </div>

              <div class="form-group col-md-2 ">
                <label for="paterno" class="control-label ">Registrar</label>
                <button type="submit" class="btn btn-primary btn-lg btn-block btn-sm">Registrar</button>
              </div>


  <table class="table">
  <thead class="thead-light">
    <tr>

      <th scope="col">No.</th>
      <th scope="col">Nombre</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col">No. Control</th>  
      <th scope="col">Carrera</th>   
      <th scope="col">e-mail</th>  
      <th scope="col">Acciones</th> 
    </tr>
  </thead>
  <tbody>



    <?php

    try {

     $consultausuarios = "SELECT * FROM usuarios WHERE privilegio=0";
     $resultadousuarios = $conexion->query($consultausuarios);

     while ($mostrarusuarios=mysqli_fetch_array($resultadousuarios)) {
     
    ?>

     <tr>
      <td><?php echo $mostrarusuarios ['usuariosId']?></td>
      <td><?php echo $mostrarusuarios ['Upaterno']?></td>
      <td><?php echo $mostrarusuarios ['Umaterno']?></td>
      <td><?php echo $mostrarusuarios ['Unombre']?></td>
      <td><?php echo $mostrarusuarios ['nucontrol']?></td>
      <td><?php echo $mostrarusuarios ['Ucarrera']?></td>
      <td><?php echo $mostrarusuarios ['Ucorreo']?></td>
      <td> 
        <span  class="Modificar" style="color:green; cursor: pointer;" id="<?php echo $mostrarusuarios['usuariosId']?>">Editar</span >
        <span class="eliminar" style="color:red; cursor: pointer;" id="<?php echo $mostrarusuarios['usuariosId']?>">Borrar</span>

        
   
        </td>
    </tr>
        
  <?php
      }
      }
       catch(Exception $ex)
      {
      print "¡Error!: " . $ex->getMessage() . "<br/>";
      die();
      }
  ?>
  
   </tbody>
</table>  

               </form> 

               <!-- Modal -->
<div class="modal fade" id="modificar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body datos">  <!-- se ingresa datos del formulario --> 
     </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>      
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



      <!--/ADMINISTRADOR REGISTRA1_______________________________________________________________________________________-->

      <div class="container" > 
        <div id="administrador" style="display:none;">
          <div class="row">
            <div class="col-md-12">
              <fieldset>
                <legend class="leyenda"><span class="numero">A</span>INGRESE LOS DATOS DEL ADMINISTRADOR</legend>

                <form action="registra1.php" method="POST" class="form-horizontal"> 


                  <div class="row">

                    <div class="form-group col-md-3">
                      <label for="paterno" class="control-label "> Apellido Paterno:</label>
                      <input type="text" name="Upaterno" class="form-control form-control-sm text-uppercase" id="Upaterno" placeholder="Apellido Paterno" required>
                    </div>

                    <div class="form-group col-md-3">
                      <label for="Umaterno" class="control-label">Apellido Materno:</label>
                      <input type="text" name="Umaterno" class="form-control form-control-sm text-uppercase" id="Umaterno" placeholder="Apellido Materno" required>
                    </div>

                    <div class="form-group col-md-3">
                      <label for="nombre" class="control-label">Nombre:</label>
                      <input type="text" name="Unombre" class="form-control form-control-sm text-uppercase" id="Unombre" placeholder="Nombre (s)" required>
                    </div>

                    <div class="form-group col-md-3">
                      <label for="control" class="control-label">Numero de Acceso:</label>
                      <input type="text" name="nucontrol" pattern="[0-9]{4}" title="4 caracteres Numericos" class="form-control form-control-sm" id="nucontrol" placeholder="No. de Control" onkeypress="return solonumero(event)" onpaste="return false" required>
                    </div>


                  </div>

                    


                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                 <div class="row">

                  


                  <div class="form-group col-md-2 ">
                    <label for="paterno" class="control-label ">Registrar</label>
                    <button type="submit" class="btn btn-primary btn-lg btn-block btn-sm">Registrar</button>
                  </div>

                  <div style="opacity: 0">                      
                      <input type="text" name="privilegio" id="privilegio" value="1">
                  </div>



                </form>


                </div>


              </div>
            </div>
          </div>
        </div> 
      <!--/CICLO_______________________________________________________________________________________-->
        
      <div class="container" > 

        <div id="ciclos" style="display:none;">
          <div class="row">
            <div class="col-md-12">
              <fieldset>
                <legend class="leyenda"><span class="numero">C</span>INGRESE EL NUEVO CICLO</legend>
                <P>El ciclo tendra que ingresarse con el siguientes formato año-año-periodo</P>

                <form action="registra3.php" method="POST" class="form-horizontal"> 

                  <div class="row">

                    <div class="form-group col-md-3">
                      <label for="ciclo" class="control-label "> Nuevo Ciclo:</label>
                      <input type="text" name="ciclo" class="form-control form-control-sm text-uppercase" id="ciclo" required>
                    </div>

                    <div class="form-group col-md-2 ">
                      <label for="registrar" class="control-label ">Registrar ciclo</label>
                      <button type="submit" class="btn btn-primary btn-lg btn-block btn-sm">Registrar Ciclo</button>
                    </div>

                  </form>

                </div>

              </div>
            </div>


          </div>
        </div>

        <!--/CICLO_______________________________________________________________________________________-->

        <div class="container" > 
          <div id="carreras" style="display:none;" >
            <div class="row">
              <div class="col-md-12">
                <fieldset>
                  <legend class="leyenda"><span class="numero">C</span>INGRESE LA CARRERA</legend>
                  <P></P>

                  <form action="registra4.php" method="POST" class="form-horizontal"> 
                    
                    <div class="row">
                      <div class="form-group col-md-3">
                        <label for="nombrecarrera" class="control-label "> Nueva Carrera:</label>
                        <input type="text" name="nombreCarrera" class="form-control form-control-sm " id="nombrecarrera" placeholder="Nombre de la Carrera" required>
                      </div>

                      <div class="form-group col-md-2 ">
                        <label for="nombrecarrera" class="control-label ">Registrar carrera</label>
                        <button type="submit" class="btn btn-primary btn-lg btn-block btn-sm">Registrar</button>
                      </div>

  <table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">No. Carrera</th>
      <th scope="col">Nombre de Carrera</th>      
    </tr>
  </thead>
  <tbody>
    
    <?php
     $consultacarrera = "SELECT * FROM carrera";
     $resultadocarrera = $conexion->query($consultacarrera);

     while ($mostrarcarrera=mysqli_fetch_array($resultadocarrera)) {
     
    ?>

     <tr>
      <td><?php echo $mostrarcarrera ['IdCarrera']?></td>
      <td><?php echo $mostrarcarrera ['nombreCarrera']?></td>
      <td> 
      <a class="text-success" href="editarcarrera.php?IdCarrera-<?php echo $mostrarcarrera['IdCarrera']; ?>">Editar</a>
      <a class="text-danger" href="eliminarcarrera.php?IdCarrera-<?php echo $mostrarcarrera['IdCarrera']; ?>">Eliminar</a>
      </td>
    </tr>

  <?php
    }
  ?>
  

   </tbody>
</table>                

                    </div>
                  </div>
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
<script src="js/solonumero.js"></script><!--/activo-->
<script>
     $(".eliminar").click(function(){
        var clave = $(this).attr("id");
        $.ajax({
          url : "registra2.php",
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
          url : "registra2.php",
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

</script>

</body>

</html>