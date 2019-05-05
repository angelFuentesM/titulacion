<?php

require 'conexion.php';

switch ("$_POST[opc]") {
  case "guardar":

  try {

    $sql = $conexion->prepare ("INSERT INTO carrera(nombreCarrera)
      VALUES('".$_POST['nombreCarrera']."')");        
    $sql->execute();   

    header("location:Ad_carrera.php"); 

  } catch (PDOException $e) {
    print "¡Error al guardar!: " . $e->getMessage() . "<br/>";
    die();
  }
  break;

  case "eliminar":
  try {

    $sql = "DELETE FROM carrera WHERE IdCarrera=" . $_POST['clave'];
    mysqli_query($conexion, $sql);

  } catch (PDOException $e) {
    print "¡Error al Eliminar!: " . $e->getMessage() . "<br/>";
    die();
  }
  break;

  case "modificar-form":
  try {
   $sql = $conexion->prepare("SELECT * FROM carrera WHERE IdCarrera=".$_POST['clave']);
   $sql->execute();
   if ($fila = $sql->fetch()) 
   {
    ?>

    <!--Inicia formulario modal-->
    <form action="reg_carrera.php.php" method="post" id="modificar">

      <input type="text" value="modificar" name="opc" hidden>
      <input type="text" value="<?php echo $_POST['clave']?>" name="clave" hidden>

      <div class="form-group">
        <input type="text" name="nombreCarrera" class="form-control form-control-sm" id="nombreCarrera" placeholder="Modifica ciclo"value="<?php echo $fila['nombreCarrera']; ?>" required>
      </div>           

      <div class="form-group">
      <button type="submit" class="btn btn-info">Modificar</button>

      </form>
    <!--Termina formulario modal-->

            <?php
          }
        }
        catch (PDOException $e) {
          print "¡Error al guardar!: " . $e->getMessage() . "<br/>";
          die();
        }
        break;

       case "modificar":
        try {
         $sql = $conexion->prepare ("UPDATE carrera SET nombreCarrera='".$_POST['nombreCarrera']."'WHERE IdCarrera=".$_POST['clave']);       
         $sql->execute();  
         header("location:Ad_carrera.php");

       } catch (PDOException $e) {
        print "¡Error al guardar!: " . $e->getMessage() . "<br/>";
        die();
      }
      break;
    }
    ?>
