<?php
  session_start();
  include_once '../../model/DAO/CoordinatorDAO.php';//includes del modelo necesarios para las funcionalidades
  include_once '../../model/tranferObject/Coordinator.php';
  include_once '../../model/DAO/SellerDAO.php';
  include_once '../../model/tranferObject/Seller.php';
  include_once '../../model/DAO/ProductDAO.php';

  $coordinador = array();
  $sellers = array();
  if (isset($_SESSION['emailCoordinator'])) {

    $coordinadorDAO = new CoordinatorDAO();
    $coordinador = $coordinadorDAO ->selectCoordinatorByEmail($email);

    $sellersDAO = new SellerDAO();
    $sellers = $sellersDAO ->selectSellersByCoordinator($idCoordinator);

  } else {
    header('location: ../../index.php');
  }

  require_once '../../view/coordinator/coordinatorHome.php';
?>
