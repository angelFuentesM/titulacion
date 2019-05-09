<?php
require 'conexion.php';

  if (isset($_POST['buscar'])) {      
      $filtro = $_POST['ciclo'];      
    }
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
  <link rel="stylesheet" href="css/tablac.css">
  <link rel="stylesheet" href="fonts/style.css">
  <link rel="stylesheet" href="css/impresion.css" media="print">
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
              <a class="dropdown-item" href="encuestados.php" active >Encuestados</a>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="cerrar_s.php">Cerrar secion</a>
          </li>
        </ul>

        <form class="form-inline my-2 my-lg-0" method="POST" action="encuestados.php">
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

     <div class="col-6">

      <p>Egresados a los que se le envio el formulario en el ciclo:<b><i><?php echo " "."$filtro";?></i></b></p>

      <table>
        <thead> 
         <tr>
           <th scope="col">No. </th>                       
           <div class="col-4"><th scope="col">Nombre del egresado</th></div>                       
           <div class="col-4"><th scope="col">No. de control</th></div>                       
           <div class="col-4"><th scope="col">Correo</th></div>                       
         </tr>
       </thead>

       <?php

       try {

         $query = "SELECT * FROM usuarios WHERE Uciclo = '$filtro'";
         $result = $conexion->query($query);
         $i=1;         
         while ($row = $result->fetch_array(MYSQLI_BOTH)) { 
          ?>

          
          <tr>      
            <td><?php echo $i++;?></td>     
            <td><?php echo $row['Upaterno']."  ".$row['Umaterno']."  ".$row['Unombre'];?></td>        
            <td><?php echo $row['nucontrol'];?></td>                         
            <td><?php echo $row['Ucorreo'];?></td>         
          </tr>

        
          <?php
        }
      } catch (Exception $ex) {
        print "¡Error!: " . $ex->getMessage() . "<br/>";
        die();
      }
      ?>    

    </table>
  </div>


  <div class="col-6">

      <p>Egresados que no han respondido el formulario en el ciclo:<b><i><?php echo  " "."$filtro";?></i></b></p>

      <table>
        <thead> 
         <tr>

           <div class="col-4"><th scope="col">No.</th></div>                       
           <div class="col-4"><th scope="col">Nombre del egresado</th></div>                       
           <th scope="col">No. de control</th>                       
         </tr>
       </thead>

       <?php

       try {

         $query = "SELECT * FROM usuarios WHERE status= 'no' AND Uciclo = '$filtro'";
         $result = $conexion->query($query);  
         $j=1;       
         while ($row = $result->fetch_array(MYSQLI_BOTH)) { 
          ?>
          
          <tr>  
            <td><?php echo $j++;?></td>                   
            <td><?php echo $row[2]."  ".$row[3]."  ".$row[4];?></td>        
            <td><?php echo $row[1];?></td>                         
          </tr>

          <?php
        }
      } catch (Exception $ex) {
        print "¡Error!: " . $ex->getMessage() . "<br/>";
        die();
      }
      ?>    
      
    </table>
  </div>  

</div>
 
</div> <!--Containers-->


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