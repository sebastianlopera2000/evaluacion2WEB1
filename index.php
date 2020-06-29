<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TALLER2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body class="bg-dark text-white">
<Header>
<center><h1>REGISTRATE EN <br> NUESTRA WEB</h1></center>
</Header>
<main>
<div class="container" >
<div class="row justify-content-center">
<div class="col-5">
<form action="agregarDatos.php" method="POST">
  <div class="form-group">
    <label for="nombreUsuario">Nombre de usuario</label>
    <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario">
  </div>
  <div class="form-group">
    <label for="correoUsuario">Digite su correo</label>
    <input type="text" class="form-control" id="correoUsuario" name="correoUsuario">
  </div>
  <div class="form-group">
    <label for="contraseña">Digite contraseña</label>
    <input type="password" class="form-control" id="contraseña" name="contraseña">
  </div>
  <button type="submit" class="btn btn-primary" id="btnEnviar" name="btnEnviar">Registrar</button>
  </form>
    <br>
  <form action="buscarDatos.php" method="POST">
  <p>Consultar registro:</p>
  <div class="form-group">
    <label for="buscarUser">Buscar usuario</label>
    <input type="text" class="form-control" id="buscarUser" name="buscarUser">
  </div>
  <button type="submit" class="btn btn-success" id="btnBuscar" name="btnBuscar">Buscar</button>
  </form>
    <br>
  <form action="eliminarDatos.php" method="POST">
  <p>Eliminar registro:</p>
  <div class="form-group">
    <label for="eliminarUser">Eliminar usuario</label>
    <input type="text" class="form-control" id="eliminarUser" name="eliminarUser">
  </div>
  <button type="submit" class="btn btn-danger" id="btnEliminar" name="btnEliminar">Eliminar</button>
  </form>


</div>

</div>

</div>

</main>
<footer>

</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>