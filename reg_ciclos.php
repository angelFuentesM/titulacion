<?php

require 'conexion.php';

switch ("$_POST[opc]") {
  case "guardar":

  try {

    $sql = $conexion->prepare ("INSERT INTO ciclos(ciclo)
      VALUES('".$_POST['ciclo']."')");        
    $sql->execute();   

    header("location:Ad_ciclos.php"); 

  } catch (PDOException $e) {
    print "¡Error al guardar!: " . $e->getMessage() . "<br/>";
    die();
  }
  break;

  case "eliminar":
  try {

    $sql = "DELETE FROM ciclos WHERE cicloId=" . $_POST['clave'];
    mysqli_query($conexion, $sql);

  } catch (PDOException $e) {
    print "¡Error al Eliminar!: " . $e->getMessage() . "<br/>";
    die();
  }
  break;

  case "modificar-form":
  try {
   $sql = $conexion->prepare("SELECT * FROM ciclos WHERE cicloId=".$_POST['clave']);
   $sql->execute();
   if ($fila = $sql->fetch()) 
   {
    ?>

    <!--Inicia formulario modal-->
    <form action="reg_ciclos.php" method="post" id="modificar">

      <input type="text" value="modificar" name="opc" hidden>
      <input type="text" value="<?php echo $_POST['clave']?>" name="clave" hidden>

      <div class="form-group">
        <input type="text" name="ciclo" class="form-control form-control-sm" id="ciclo" placeholder="Modifica ciclo"value="<?php echo $fila['ciclo']; ?>" required>
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
         $sql = $conexion->prepare ("UPDATE ciclos SET ciclo='".$_POST['ciclo']."'WHERE cicloId=".$_POST['clave']);       
         $sql->execute();  
         header("location:Ad_ciclos.php");

       } catch (PDOException $e) {
        print "¡Error al guardar!: " . $e->getMessage() . "<br/>";
        die();
      }
      break;
    }
    ?>