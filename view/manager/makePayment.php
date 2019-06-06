<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Make payments</title>
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
              <a class="nav-item nav-link" href="registerSeller.php">Register reller <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-item nav-link" href="registerCoordinator.php">Register coordinator  <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-dark" href="#">Make payment</a>
            </li>
            <li class="nav-item">
              <a class="nav-item nav-link" href="registerProducts.php">Products register</a>
            </li>
            <li class="nav-item">
              <a class="nav-item nav-link" href="setSeasons.php">set seasons</a>
            </li>
            <li class="nav-item">
              <a class="nav-item nav-link" href="simulatorController.php">Control simulator</a>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
          <a class="nav-item nav-link" href="../session/logout.php">Leave</a>
        </ul>
      </nav>
    </header>
    <div class="container">
      <div class="row justify-content-center">
        <h1>Make payments to employees</h1>
      </div>
      <div class="row justify-content-center">
        <form class="form" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="post">
          <div class="form-group"
            <label for="seller">Seller</label>
            <select class="form-control" name="seller">
              <?php
                for ($i=0; $i < count($sellers); $i++) {
                  echo '<option value="'.$sellers[i] -> getId().'">'.$sellers[i] -> getName().'</option>';
                }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="balance">$Monto</label>
            <input type="number" name="balance" class="form-control">
          </div>
          <div class="form-group">
            <label for="commission">$comision</label>
            <input type="number" name="commission" class="form-control">
          </div>
          <div class="form-group">
            <button type="submit" name="button" class="btn btn-primary btn-lg btn-block">Realizar pago</button>
            <button type="reset" name="button" class="btn btn-primary btn-lg btn-block">agregar otro pago</button>
          </div>
        </form>
        <?php if(!empty($info)): ?>
          <div class="alert alert-info" role="alert">
            <?php echo $info; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </body>
</html>
