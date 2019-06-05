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
        <a class="navbar-brand" href="#">Yo</a>

        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto nav-tabs">
            <li class="nav-item">
              <a class="nav-item nav-link" href="sellersLocation.php">Ubicación vendedores<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-item nav-link" href="salesReport.php">Reporte de ventas</a>
            </li>
            <li class="nav-item">
              <a class="nav-item nav-link" href="productsReport.php">Reporte de productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-item nav-link" href="notifications.php">Notificaciones</a>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
          <a class="nav-item nav-link" href="../session/logout.php">Salir</a>
        </ul>
      </nav>
    </header>

    <div class="container">
      <div class="row">
        <h1>Información</h1>
      </div>
      <div class="row">
        <?php for ($i=0; $i < count($coordinador); $i++) {?>
        <ul>
          <li>Nombre: <?php echo $coordinador[$i] ->getName(); ?></li>
          <li>Correo: <?php echo $coordinador[$i] ->getEmail(); ?></li>
          <li>Numero de contacto: <?php echo $coordinador[$i] ->getContactNumber(); ?></li>
        </ul>
        <?php } ?>
      </div>
      <div class="row">
        <h1>Mis vendedores</h1>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">id</th>
              <th scope="col">nombre</th>
              <th scope="col">email</th>
              <th scope="col">numero de contacto</th>
              <th scope="col">tipo de contrato</th>
              <th scope="col">funciones</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <!-- Se rellena deacuerdo a la Información en la base de datos -->
            <?php for ($i=0; $i < count($sellers); $i++) {?>
              <tr>
                <th scope="row"><?php echo $i ?></th>
                <td><?php echo $sellers[$i] ->getName(); ?></td>
                <td><?php echo $sellers[$i] ->getEmail(); ?></td>
                <td><?php echo $sellers[$i] ->getContactNumber(); ?></td>
                <td><?php echo $sellers[$i] ->getRecruitment(); ?></td>
                <td><?php echo $sellers[$i] ->getFunctions(); ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
