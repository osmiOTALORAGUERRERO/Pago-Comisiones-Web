<?php
  session_start();
  include_once '../../model/DAO/SellerDAO.php'; //includes del modelo necesarios para las funcionalidades
  include_once '../../model/tranferObject/Seller.php';
  include_once '../../model/DAO/CoordinatorDAO.php';
  include_once '../../model/tranferObject/Coordinator.php';

  $sellers = array();
  if (isset($_SESSION['emailCoordinator'])) {
    $sellersDAO = new SellerDAO();
    $sellers = $sellersDAO ->selectSellersByCoordinator($idCoordinator);
  } else {
    header('location: ../../index.php');
  }

  require_once '../../view/coordinator/sellersLocation.php';
?>
