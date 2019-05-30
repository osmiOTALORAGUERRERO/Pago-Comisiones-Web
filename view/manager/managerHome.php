<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-home"></span>Compañia</a>

        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto nav-tabs">
            <li class="nav-item">
              <a class="nav-item nav-link" href="registerSeller.php">Registrar vendedor <span class="sr-only">(current)</span></a>
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
              <a class="nav-item nav-link" href="simulatorController.php">Control simulador</a>
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
        <h1>Compañia Lista Vendedores</h1>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">vendedor#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Email</th>
              <th scope="col">Celular</th>
            </tr>
          </thead>
          <tbody>
            <?php for ($i=0; $i < count($sellers); $i++) {?>
              <tr>
                <th scope="row"><?php echo $i ?></th>
                <td><?php echo $sellers[$i] ->getName() ?></td>
                <td><?php echo $sellers[$i] ->getEmail() ?></td>
                <td><?php echo $sellers[$i] ->getContactNumber() ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>

    </div>

    <div class="container">
      <div class="row justify-content-center">
        <h1>Compañia Lista  Coordinadores</h1>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">coordinador#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Email</th>
              <th scope="col">Celular</th>
            </tr>
          </thead>
          <tbody>
            <?php for ($i=0; $i < count($coordinators); $i++) {?>
              <tr>
                <th scope="row"><?php echo $i ?></th>
                <td><?php echo $coordinators[$i] ->getName() ?></td>
                <td><?php echo $coordinators[$i] ->getEmail() ?></td>
                <td><?php echo $coordinators[$i] ->getContactNumber() ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>

    </div>

  </body>
</html>
