<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register coordinator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
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
              <a class="nav-item nav-link active text-dark" href="#">Register coordinator <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-item nav-link" href="makePayment.php">Make payments</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link" href="registerProducts.php">Register products </a>
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
          <a class="nav-item nav-link" href="../session/logout.php">Salir</a>
        </ul>
      </nav>
    </header>
    <div class="container">
      <div class="row justify-content-center">
        <h1>Register coordinator</h1>
      </div>
      <?php if (!empty($message)): ?>
        <div class="alert alert-info" role="alert">
          <?php echo $message; ?>
        </div>
      <?php endif; ?>
      <div class="row justify-content-center">
        <form class="form" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="post">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="email">email</label>
            <input type="email" name="email" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="contactNumber">Contact number</label>
            <input type="number" name="contactNumber" class="form-control" value="" required>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" value="" required>
          </div>
          <button type="submit" name="button" class="btn btn-primary btn-lg btn-block">Register</button>
        </form>
      </div>
    </div>

  </body>
</html>
