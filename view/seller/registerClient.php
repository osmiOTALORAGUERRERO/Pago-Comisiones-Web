<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register user</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="home.php">Me</a>

        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto nav-tabs">
            <li class="nav-item">
              <a class="nav-item nav-link active text-dark" href="#">Register Client <span class="sr-only">(current)</span></a>
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
      <div class="row justify-content-center">
        <h1>Register Client</h1>
      </div>
      <?php if ($active): ?>
        <?php if (!empty($info)): ?>
          <div class="alert alert-info" role="alert">
            <?php echo $info; ?>
          </div>
        <?php endif; ?>
        <div class="row justify-content-center">
          <form class="form" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="post">
            <div class="form-group row">
              <label for="nit">Numero de identificacion</label>
              <input type="number" name="nit" class="form-control" required>
            </div>
            <div class="form-group row">
              <label for="">Name</label>
              <input type="text" name="nombre" class="form-control" required>
            </div>
            <div class="form-group row">
              <label for="">Emails</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-default">Email 1</span>
                </div>
                <input type="email" class="form-control" name="email[0]" required>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-default">Email 2</span>
                </div>
                <input type="email" class="form-control" name="email[1]">
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-default">Email 3</span>
                </div>
                <input type="email" class="form-control" name="email[2]">
              </div>
            </div>
            <div class="form-group row">
              <label for="">Contact Numbers</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-default">number 1</span>
                </div>
                <input type="number" class="form-control" name="number[0]" required>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-default">number 2</span>
                </div>
                <input type="number" class="form-control" name="number[1]">
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-default">number 3</span>
                </div>
                <input type="number" class="form-control" name="number[2]">
              </div>
            </div>
            <div class="form-group row">
              <button type="submit" name="registrar" class="btn btn-primary btn-lg btn-block">Register</button>
            </div>
          </form>
        </div>
      <?php else: ?>
        <div class="alert alert-info" role="alert">
          You are not working this season <br>
          Option not available
        </div>
      <?php endif; ?>
    </div>
  </body>
</html>
