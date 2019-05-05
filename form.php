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
    <div class="col text-right font-weight-light text-muted">
      <h7>BIENVENIDO</h7>
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

    <form action="registrar.php" method="POST" class="form-horizontal"> <!--Inicia Formulario-->


    <div class="row">
      <div class="form-group col-md-3">
        <label for="paterno" class="control-label "> Nombre:</label>
        <input type="text" name="paterno" class="form-control form-control-sm text-uppercase" id="paterno" placeholder="Apellido Paterno" required>
      </div>

      <div class="col-12">
  <button type="submit" class="btn btn-primary  btn-block btn btn-outline-danger">ENVIAR FORMULARIO</button>
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
<script src="js/solonumero.js"></script><!--/activo-->

</body>

</html>
