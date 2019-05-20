<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro usuario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="sellerHome.php">Yo</a>

        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto nav-tabs">
            <li class="nav-item">
              <a class="nav-item nav-link active text-dark" href="#">Registrar Cliente <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-item nav-link" href="makeSale.php">Realizar venta</a>
            </li>
            <li class="nav-item">
              <a class="nav-item nav-link" href="notifications.php">Notificaciones</a>
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
        <h1>Registrar Cliente</h1>
      </div>
      <div class="row justify-content-center">
        <form class="form" action="index.html" method="post">
          <div class="form-group row">
            <label for="">Nombre</label>
            <input type="text" name="nombre" class="form-control">
          </div>
          <div class="form-group row">
            <label for="">Correo</label>
            <input type="email" name="correo" class="form-control">
          </div>
          <div class="form-group row">
            <label for="">Celular</label>
            <input type="number" name="celular" class="form-control">
          </div>
          <div class="form-group row">
            <label for="">Identificacion</label>
            <input type="number" name="Identificacion" class="form-control">
          </div>
          <div class="form-group row">
            <button type="submit" name="registrar" class="btn btn-primary btn-lg btn-block">Registrar</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
