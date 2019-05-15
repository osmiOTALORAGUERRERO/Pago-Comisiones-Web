<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registrar producto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="gerenteHome.php"><span class="glyphicon glyphicon-home"></span>Compañia</a>

        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto nav-tabs">
            <li class="nav-item">
              <a class="nav-item nav-link" href="registrarEmpleado.php">Registrar empleado <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-item nav-link" href="realizarPago.php">Realizar pago</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-dark" href="#">Registrar productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-item nav-link" href="establecerTemporadas.php">Establecer temporadas</a>
            </li>
            <li class="nav-item">
              <a class="nav-item nav-link" href="notificaciones.php">Notificaciones</a>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
          <a class="nav-item nav-link" href="#">Salir</a>
        </ul>
      </nav>
    </header>
    <div class="container">
      <div class="row justify-content-center">
        <h1>Registrar producto</h1>
      </div>
      <div class="row justify-content-center">
        <form class="form" action="index.html" method="post">
          <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="nombre" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Precio</label>
            <input type="number" name="precio" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Categoria</label>
            <select class="form-control" name="categoria">
            </select>
          </div>
          <button type="submit" name="button" class="btn btn-primary btn-lg btn-block">Registrar</button>
        </form>
      </div>
    </div>
  </body>
</html>
