<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>seller</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Me</a>

        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto nav-tabs">
            <li class="nav-item">
              <a class="nav-item nav-link" href="registerClient.php">Register Client <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-item nav-link" href="makeSale.php">Make sale</a>
            </li>
            <li class="nav-item">
              <a class="nav-item nav-link" href="notifications.php">Notifications</a>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
          <a class="nav-item nav-link" href="../session/logout.php">logout</a>
        </ul>
      </nav>
    </header>
    <div class="container">
      <div class="row">
        <h1>Information</h1>
      </div>
      <div class="row">
        <ul class="list-group">
          <li class="list-group-item">Name: <?php echo $seller->getName(); ?></li>
          <li class="list-group-item">Email: <?php echo $seller->getEmail(); ?></li>
          <li class="list-group-item">Job: <?php echo $seller->getFunctions(); ?></li>
          <li class="list-group-item">Coordinator: <?php echo $seller->getCoordinator(); ?></li>
        </ul>
      </div>
    </div>
  </body>
</html>
