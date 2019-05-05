<?php

require 'conexion.php';

switch ("$_POST[opc]") {
  case "guardar":

  try {

    $sql = $conexion->prepare ("INSERT INTO usuarios(Upaterno,Umaterno,Unombre,nucontrol,Ucarrera,Ucorreo,privilegio,Uciclo)
      VALUES('".$_POST['Upaterno']."','".$_POST['Umaterno']."','".$_POST['Unombre']."','".$_POST['nucontrol']."','".$_POST['Ucarrera']."','".$_POST['Ucorreo']."','".$_POST['privilegio']."','".$_POST['Uciclo']."')");        
    $sql->execute();   

    header("location:Ad_admon.php"); 

  } catch (PDOException $e) {
    print "¡Error al guardar!: " . $e->getMessage() . "<br/>";
    die();
  }
  break;

  case "eliminar":
  try {

    $sql = "DELETE FROM usuarios WHERE usuariosId=" . $_POST['clave'];
    mysqli_query($conexion, $sql);

  } catch (PDOException $e) {
    print "¡Error al Eliminar!: " . $e->getMessage() . "<br/>";
    die();
  }
  break;

  case "modificar-form":
  try {
   $sql = $conexion->prepare("SELECT * FROM usuarios WHERE usuariosId=".$_POST['clave']);
   $sql->execute();
   if ($fila = $sql->fetch()) 
   {
    ?>

    <!--Inicia formulario modal-->
    <form action="re_admon.php" method="post" id="modificar">

      <input type="text" value="modificar" name="opc" hidden>
      <input type="text" value="<?php echo $_POST['clave']?>" name="clave" hidden>

      <div class="form-group">
        <input type="text" name="Upaterno" class="form-control form-control-sm" id="Upaterno" placeholder="Apellido Paterno"value="<?php echo $fila['Upaterno']; ?>" required>
      </div>

      <div class="form-group">
        <input type="text" name="Umaterno" class="form-control form-control-sm" id="Umaterno" placeholder="Apellido Materno"value="<?php echo $fila['Umaterno']; ?>" required>
      </div>

      <div class="form-group">
        <input type="text" name="Unombre" class="form-control form-control-sm" id="Unombre" placeholder="Nombre (s)" value="<?php echo $fila['Unombre']; ?>" required> </div>

          <div class="form-group">
            <input type="email" name="Ucorreo"  class="form-control form-control-sm" id="Ucorreo" placeholder="e-mail" value="<?php echo $fila['Ucorreo']; ?>"required></div>
            
        <div class="form-group">
                <input type="password" name="nucontrol" pattern="[0-9]{4}" title="4 caracteres Numericos" class="form-control form-control-sm" id="nucontrol" placeholder="Ingrese NIP" onkeypress="return solonumero(event)" onpaste="return false" required>
              </div>

            <button type="submit" class="btn btn-info">Modificar</button>
            <div class="form-group">

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
         $sql = $conexion->prepare ("UPDATE usuarios SET Upaterno='".$_POST['Upaterno']."',Umaterno='".$_POST['Umaterno']."',Unombre='".$_POST['Unombre']."',nucontrol='".$_POST['nucontrol']."',Ucorreo='".$_POST['Ucorreo']."' WHERE usuariosId=".$_POST['clave']);       
         $sql->execute();  
         header("location:Ad_admon.php");

       } catch (PDOException $e) {
        print "¡Error al guardar!: " . $e->getMessage() . "<br/>";
        die();
      }
      break;
    }
    ?>