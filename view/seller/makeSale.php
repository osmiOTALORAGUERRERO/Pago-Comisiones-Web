<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Make sale</title>
    <script type="text/javascript" src="../../view/js/jquery-3.4.1.min.js" charset="utf-8"></script>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="home.php">Me</a>

        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto nav-tabs">
            <li class="nav-item">
              <a class="nav-item nav-link" href="registerClient.php">Register Client <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-item nav-link active text-dark" href="#">Make sale</a>
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
        <h1>Sale</h1>
      </div>
    </div>
    <?php if ($active): ?>
      <div class="container">
        <div class="row">
          <h3>Products</h3>
        </div>
        <div class="row">

          <div class="container">
            <div class="row justify-content-center">
              <h1>Products list</h1>
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">product#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Price</th>
                    <th scope="col">choose</th>
                  </tr>
                </thead>
                <tbody>
                  <?php for ($i=0; $i < count($products); $i++) :?>
                    <tr>
                      <td><?php echo $i+1; ?></td>
                      <td><?php echo $products[$i] ->getProduct(); ?></td>
                      <td><?php echo $products[$i] ->getCategory(); ?></td>
                      <td><?php echo $products[$i] ->getPrice(); ?></td>
                      <td> <input type="button" class="add" name="" value="Add"> </td>
                    </tr>
                  <?php endfor; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <h3>Make sale</h3>
        </div>
        <div id="info" class="" role="alert">

        </div>
        <form class="form" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="post">
          <div class="form-group">
            <label for="">Products choosen</label>
            <input id="chosenProducts" type="number" readonly name="numero-productos" class="form-control" value="0">
          </div>
          <div class="form-group">
            <label for="">Value sale</label>
            <input id="totalSale" type="number" readonly name="valor-venta" class="form-control" value="0">
          </div>
          <div class="form-group">
            <label for="">Cliente</label>
            <select class="form-control" name="cliente">
              <?php for ($i=0; $i < count($clients); $i++) :?>
                <option value=<?php echo $clients[$i]->getNit(); ?>><?php echo $clients[$i]->getName(); ?></option>
              <?php endfor; ?>
            </select>
          </div>
          <button type="submit" name="button" class="btn btn-primary btn-lg btn-block">Vender !!!</button>
          <button type="reset" name="button" class="btn btn-primary btn-lg btn-block">Realizar nueva venta</button>
        </form>
        <br>
      </div>
      <script src="../../view/js/seller/makeSale.js" language="javascript"></script>
    <?php else: ?>
      <div class="alert alert-info" role="alert">
        You are not working this season <br>
            Option not available
      </div>
    <?php endif; ?>
  </body>
</html>
