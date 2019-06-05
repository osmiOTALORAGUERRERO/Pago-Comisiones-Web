<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Control principal para la simulacion</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../../view/js/jquery-3.4.1.min.js" charset="utf-8"></script>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="home.php"><span class="glyphicon glyphicon-home"></span>Compañia</a>

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
              <a class="nav-link active text-dark" href="#">Control simulador</a>
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
        <h1>Controlador del simulador</h1>
      </div>
      <?php if(!empty($info)): ?>
        <div class="alert alert-info" role="alert">
          <?php echo $info; ?>
        </div>
      <?php endif; ?>
      <div class="row justify-content-center">
          <?php if (!$active): ?>
            <form class="form" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="post">
              <div id="body-season" class="">
                <label for="Mes">Temporada que desea ejecutar para la simulacion:</label>
                <select id="seasons" class="form-control" name="season">
                  <option disabled selected>Selecciona una opción</option>
                  <?php
                  for ($i=0; $i < count($seasons); $i++) {
                    echo '<option value="'.$seasons[$i] -> getId().'">'.$seasons[$i] -> getSeason().' -> '.$seasons[$i] -> getMonth().'</option>';
                  }
                  ?>
                </select>
              </div>
              <div id="body" class="">

              </div>
            <input type="hidden" name="control" value="start">
            <button type="submit" class="btn btn-primary" name="button">Iniciar simulacion</button>
          </form>
          <?php else: ?>
            <div class="container">
              <div class="row justify-content-center">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item active">Mes: <?php echo $seasonActive -> getMonth(); ?></li>
                  <li class="list-group-item">Festividad: <?php echo $seasonActive -> getSeason(); ?></li>
                  <li class="list-group-item">Numero de vendedores: <?php echo $seasonActive -> getNumberSellers(); ?></li>
                  <li class="list-group-item">Porcentaje de productos: <?php echo $seasonActive -> getPorcentageProducts(); ?></li>
                  <li class="list-group-item">En ejecucion</li>
                </ul>
              </div>
              <div class="row justify-content-center">
                <form class="form" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="post">
                  <input type="hidden" name="control" value="end">
                  <button type="submit" class="btn btn-primary" name="button">Terminar Temporada</button>
                </form>
              </div>
            </div>
          <?php endif; ?>
      </div>
    </div>
    <script src="../../view/js/manager/simulatorController.js" language="javascript"></script>
  </body>
</html>
