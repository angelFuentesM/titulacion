<?php

$alert = '';
if (!empty($_POST)) {
  if (empty($_POST['Ucorreo']) || empty($_POST['nucontrol'])) {
    $alert = 'Falta informacion en tus credenciales !';
  } else {
    require 'conexion.php';
    $Ucorreo = $_POST['Ucorreo'];
    $nucontrol = $_POST['nucontrol'];

    $query = "SELECT * FROM egresado WHERE control='$nucontrol'";
    $result = mysqli_query($conexion, $query);
    $rows = mysqli_fetch_array($result, MYSQLI_NUM);
    if ($rows > 1) {
      $alert = 'Solo puedes contestar el formulario una vez en este ciclo, Gracias. !';
    } else {
      $consulta = "SELECT * FROM usuarios WHERE Ucorreo='$Ucorreo' AND nucontrol='$nucontrol'";
      $resultado = mysqli_query($conexion, $consulta);
      $row = mysqli_fetch_array($resultado, MYSQLI_NUM);

      if ($row > 0 and $row[6] == 0) {
        session_start();
        $_SESSION['nucontrol'] = $_POST['nucontrol'];
        header('location:/formulario/Admon.php');
      } elseif ($row > 0 and $row[6] == 1) {
        session_start();
        $_SESSION['nucontrol'] = $_POST['nucontrol'];
        header('location:/formulario/index.php');
      } else {
        $alert = "No existe usuario o contraseña !";
      }

      mysqli_free_result($resultado);
      mysqli_free_result($result);
      mysqli_close($conexion);
    }
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>login</title>
  <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilosf.css">
  <link rel="stylesheet" href="css/estilosheader.css">
</head>

<body>

  <div class="text-center">
    <header>
      <div>
        <img src="imagenes/bannerb.png" width="1024" class="logo">
      </div>
    </header>
  </div>

  <div class="container">
    <img src="imagenes/if_users-10_984119.png" class="photo">

    <div class="row">
      <div class="col">
      </div>

      <div class="col-sm">
        <form action="" method="post">
          <!--Inicia formulario-->
          <div class="form-group">
            <label for="Ucorreo"></label>
            <input type="email" name="Ucorreo" class="form-control" id="Ucorreo" placeholder="e-mail">
          </div>

          <div class="form-group">
            <input type="password" name="nucontrol" class="form-control" title="caracteres Numericos" onkeypress="return solonumero(event)" onpaste="return false" requiredid="password" placeholder="No de control / NIP">

            <span style="color:gray; cursor: pointer;" data-toggle="modal" data-target="#exampleModal"><i>Olvidaste la contraseña?</i></span>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-success">Ingresar</button>
          </div>

          <p class="text-danger text-center">
            <?php echo isset($alert) ? $alert : ""; ?>
          </p>


        </form>
        <!--Termina formulario-->

        <!--Inicia modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Recuperar Contraseña</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" action="recupera_pass.php">
                  <!--Inicia formulario Modal-->
                  <div class="form-group">
                    <input type="email" name="Ucorreo" class="form-control" id="Ucorreo" placeholder="e-mail">
                  </div>

                  <button type="submit" class="btn btn-primary" name="login" value="Enviar">Enviar</button>
                </form>
              </div>
              <div class="modal-footer">
              </div>
            </div>
          </div>
        </div>
        <!--termina modal-->
      </div>

      <div class="col">
      </div>

    </div>
  </div>

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/valores.js"></script>
  <script src="js/ocultar.js"></script>
  <script src="js/solonumero.js"></script>
  <!--/activo-->

</body>

</html>