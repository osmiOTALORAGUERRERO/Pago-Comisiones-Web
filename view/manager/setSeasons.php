<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>set seasons</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="home.php"><span class="glyphicon glyphicon-home"></span>Company</a>

        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto nav-tabs">
            <li class="nav-item">
              <a class="nav-item nav-link" href="registerSeller.php">Register seller<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-item nav-link" href="registerCoordinator.php">Register coordinator<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-item nav-link" href="makePayment.php">Make payments</a>
            </li>
            <li class="nav-item">
              <a class="nav-item nav-link" href="registerProducts.php">Register products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-dark" href="#">Set seasons</a>
            </li>
            <li class="nav-item">
              <a class="nav-item nav-link" href="simulatorController.php">Control simulator</a>
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
          <h1>Set seasons</h1>
        </div>
        <?php if (!empty($message)): ?>
          <div class="alert alert-info" role="alert">
            <?php echo $message; ?>
          </div>
        <?php endif; ?>
        <div class="row justify-content-center">
          <form class="form" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="post">
            <div class="form-group">
              <label for="">Month</label>
              <select class="form-control" name="mes" required>
                <?php for ($i=0; $i < count($months); $i++) : ?>
                  <option value=<?php echo $months[$i]->getId(); ?>><?php echo $months[$i]->getMonth(); ?></option>
                <?php endfor; ?>
              </select>
            </div>
            <div class="form-group">
              <label for="">Festivity</label>
              <input type="text" class="form-control" name="festividad" value="" required>
            </div>
            <div class="form-group">
              <label for="">Number of employees</label>
              <input type="number" class="form-control" name="numeroEmpleados" min="1" value="" required>
            </div>
            <div class="form-group">
              <label for="">Percent of products of season</label>
              <p>If the price increase write the normal number, if discount the price use the <b>sign "-"</b></p>
              <input type="number" name="porcentajeProductos" class="form-control" value="" required>
            </div>
            <button type="submit" name="button" class="btn btn-primary btn-lg btn-block">Set seasons</button>
          </form>
        </div>
    </div>
  </body>
</html>
