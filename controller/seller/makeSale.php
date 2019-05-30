<?php
  session_start();
  include_once '../../model/DAO/SellerDAO.php';
  include_once '../../model/DAO/ProductDAO.php'; //includes del modelo necesarios para las funcionalidades
  include_once '../../model/transferObject/Product.php';

  $products = array();
  if (isset($_SESSION['emailSeller'])) {
    $productDAO = new ProductDAO();
    $products = $productDAO-> selectProducts();;
  } else {
    header('location: ../../index.php');
  }
  require_once '../../view/seller/makeSale.php';


?>
