<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Realizar Venta</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="home.php">Yo</a>

        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto nav-tabs">
            <li class="nav-item">
              <a class="nav-item nav-link" href="registerClient.php">Registrar Cliente <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-item nav-link active text-dark" href="#">Realizar venta</a>
            </li>
            <li class="nav-item">
              <a class="nav-item nav-link" href="notifications.php">Notificaciones</a>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
          <a class="nav-item nav-link" href="../session/logout.php">Salir</a>
        </ul>
      </nav>
    </header>
    <div class="container">
      <div class="row justify-content-center">
        <h1>Venta</h1>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <h3>Productos</h3>
      </div>
      <div class="row">

        <div class="container">
          <div class="row justify-content-center">
            <h1>Lista de productos</h1>
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">producto#</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Categoria</th>
                  <th scope="col">Precio</th>
                  <th scope="col">Escoger</th>
                </tr>
              </thead>
              <tbody>
                <?php for ($i=0; $i < count($products); $i++) {?>
                  <tr>
                    <td ><?php echo $products[$i] ->getId(); ?></td>
                    <td ><?php echo $products[$i] ->getProduct(); ?></td>
                    <td ><?php echo $products[$i] ->getCategory(); ?></td>
                    <td ><?php echo $products[$i] ->getPrice(); ?></td>
                    <td> <input type="button" name="" value="Añadir"> </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>

        </div>
        <!-- Productos traidos desde la base de datos -->
      </div>
    </div>
      <div class="container">
        <div class="row">
          <h3>Realizar venta</h3>
        </div>
        <form class="form" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="post">
          <div class="form-group">
            <label for="">Productos escogidos</label>
            <input type="number" readonly name="productos" class="form-control" value="0">
          </div>
          <div class="form-group">
            <label for="">Valor venta</label>
            <input type="number" readonly name="valor-venta" class="form-control" value="0">
          </div>
          <button type="submit" name="button" class="btn btn-primary btn-lg btn-block">Vender !!!</button>
        </form>
      </div>
  </body>
</html>
