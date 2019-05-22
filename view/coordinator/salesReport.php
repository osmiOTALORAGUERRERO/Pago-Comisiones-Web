<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Reporte de ventas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="coordinatorHome.php">Yo</a>

        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto nav-tabs">
            <li class="nav-item">
              <a class="nav-item nav-link" href="sellersLocation.php">Ubicación vendedores<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-item nav-link text-dark active" href="#">Reporte de ventas</a>
            </li>
            <li class="nav-item">
              <a class="nav-item nav-link" href="productsReport.php">Reporte de productos</a>
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
        <h1>Reporte de ventas de cada vendedor</h1>

        <p>Mes en venta actual: <?php //aqui el mes que se esta ejecutando ?></p>
      </div>
      <div class="row justify-content-center">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">nombre</th>
              <th scope="col">correo</th>
              <th scope="col">numero de ventas</th>
              <th scope="col">valor vendido</th>
              <th scope="col">cantidad de productos vendidos</th>
            </tr>
          </thead>
          <tbody>
            <!-- Se rrellena con la información de la base de datos -->
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
