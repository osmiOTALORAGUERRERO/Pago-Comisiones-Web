<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../../view/js/jspdf.plugin.autotable.min.js" charset="utf-8"></script>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="home.php"><span class="glyphicon glyphicon-home"></span>Financial</a>

        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto nav-tabs">
            <li class="nav-item">
              <a class="nav-link active text-dark" href="#">Set commission</a>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
          <a class="nav-item nav-link" href="../session/logout.php">sign up</a>
        </ul>
      </nav>
    </header>
    <div class="container">
        <div class="row justify-content-center">
          <h1>Establecer teporadas</h1>
        </div>
        <?php if (!empty($message)): ?>
          <div class="alert alert-info" role="alert">
            <?php echo $message; ?>
          </div>
        <?php endif; ?>
        <div id="info" class="" role="alert">

        </div>
        <div class="row justify-content-center">
          <form class="form" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="post">
            <div class="form-group">
              <label for="">Seller</label>
              <select id="seller" class="form-control" name="mes" required>
                <?php for ($i=0; $i < count($sellers); $i++) : ?>
                  <option value=<?php echo $sellers[$i]->getId(); ?>><?php echo $sellers[$i]->getName(); ?></option>
                <?php endfor; ?>
              </select>
            </div>
            <div class="form-group">
              <label for="">Base balance</label>
              <input id="baseBalance" type="number" class="form-control" name="baseBalance" min="1" value="" required>
            </div>
            <div class="form-group">
              <label for="">percentage Commission</label>
              <input id="percentageCommission" type="number" class="form-control" name="percentageCommission" min="0" max="100" value="" required>
            </div>
            <button id='calculateCommission' type="button" name="button" class="btn btn-primary btn-lg btn-block">Asignar temporada</button>
          </form>
        </div> <br>
        <div class="row justify-content-center">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Seller#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Sales number</th>
                <th scope="col">Total sales</th>
                <th scope="col">Base balance</th>
                <th scope="col">Commission</th>
              </tr>
            </thead>
            <tbody>
              <?php for ($i=0; $i < count($sellers); $i++) {?>
                <tr id=<?php echo $sellers[$i] ->getId(); ?>>
                  <th scope="row"><?php echo $i+1 ?></th>
                  <td scope="row"><?php echo $sellers[$i] ->getName(); ?></td>
                  <td scope="row"><?php echo $sellers[$i] ->getEmail(); ?></td>
                  <td scope="row"><?php echo salesNumber($sellers[$i] ->getId()); ?></td>
                  <td scope="row"><?php echo totalSales($sellers[$i] ->getId()); ?></td>
                  <td scope="row"> null </td>
                  <td scope="row"> null </td>
                </tr>
              <?php } ?>
            </tbody>
          </table> <br>
          <input id="genPDF" type="button" name="pdf" class="btn btn-primary btn-lg btn-block" value="generate report">
        </div>
    </div>
    <script src="../../view/js/financial/setSalaries.js" language="javascript"></script>
  </body>
</html>
