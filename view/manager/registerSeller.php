<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>registrar vendedor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="managerHome.php"><span class="glyphicon glyphicon-home"></span>Compañia</a>

        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto nav-tabs">
            <li class="nav-item">
              <a class="nav-link active text-dark" href="#">Registrar empleado <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-item nav-link" href="registerCoordinator.php">Registrar coordinador <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-item nav-link" href="makePayment.php">Realizar pago</a>
            </li>
            <li class="nav-item">
              <a class="nav-item nav-link" href="registerProducts.php">Registrar productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-item nav-link" href="setSeasons.php">Establecer temporadas</a>
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
        <h1>Registrar vendedor</h1>
      </div>
      <div class="row justify-content-center">
        <form class="form" action="index.html" method="post">
          <div class="form-group row">
            <label for="name">Nombre</label>
            <input type="text" name="name" class="form-control">
          </div>
          <div class="form-group row">
            <label for="email">Correo</label>
            <input type="email" name="email" class="form-control">
          </div>
          <div class="form-group row">
            <label for="contactNumber">Numero de contacto</label>
            <input type="number" name="contactNumber" class="form-control">
          </div>
          <div class="form-group row">
            <label for="functions">Funciones</label>
            <input type="text" name="functions" class="form-control">
          </div>
          <div class="form-group row">
            <label for="contrato">Tipo de contrato</label>
            <select class="form-control" name="contrato" required>
              <option disabled selected>Selecciona una opción</option>
              <option value="1">Fijo</option>
              <option value="2">Indefinido</option>
            </select>
          </div>
          <div class="form-group row">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" required>
          </div>
          <div class="form-group row">
            <button type="submit" name="registrar" class="btn btn-primary btn-lg btn-block">Registrar</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
