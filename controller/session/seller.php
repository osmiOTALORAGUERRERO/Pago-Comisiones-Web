<?php
  session_start();
  include_once '../model/DAO/SellerDAO.php';
  include_once '../model/transferObject/Seller.php';

  $actor;
  if (isset($_SESSION['emailCoordinator'])) {
    header('location: ../coordinator/home.php');
  } else {
    $actor = 'Vendedor';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // code...
    }
  }


  require_once '../../view/session/login.php';
?>
