<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>login <?php echo $actor ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Bienvenido</a>
      </nav>
    </header>
    <div class="container">
      <h1>Login <?php echo $actor ?></h1>
      <div class="row justify-content-md-center p-3 mb-2 bg-light text-dark">
        <div class="col-8">
          <form class="form" action="index.html" method="post">
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" name="correo" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input type="password" name="password" class="form-control">
            </div>
            <button type="submit" name="button" class="btn btn-primary btn-lg btn-block">Login</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
