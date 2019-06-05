<?php
  session_start();
  include_once '../../model/DAO/ProductDAO.php';//includes del modelo necesarios para las funcionalidades
  include_once '../../model/transferObject/Product.php';
  include_once '../../model/DAO/SaleDAO.php';
  include_once '../../model/tranferObject/Sale.php';

  $sales = array();

  if (isset($_SESSION['emailCoordinator'])) {
    // Logica para la funcionalidad entre el modelo y la vista
    $productDAO = new ProductDAO();

    $sale = new SaleDAO();

  } else {
    header('location: ../../index.php');
  }

  require_once '../../view/coordinator/productsReport.php';
?>
