<?php
  session_start();
  include_once '../../model/DAO/CoordinadorDAO.php'; //includes del modelo necesarios para las funcionalidades

  if (isset($_SESSION['emailManager'])) {
    $sellerDao = new SellerDAO();
    if ($_SERVER['REQUEST_METHOD']== '') {
      

    }


  } else {
    header('location: ../../index.php');
  }
  require_once '../../view/manager/registerCoordinator.php';
?>
