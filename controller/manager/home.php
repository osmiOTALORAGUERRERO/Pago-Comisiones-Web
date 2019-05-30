<?php
  session_start();
  include_once '../../model/DAO/ManagerDAO.php'; //includes del modelo necesarios para las funcionalidades
  include_once '../../model/DAO/CompanyDAO.php';
  include_once '../../model/DAO/SellerDAO.php';
  include_once '../../model/DAO/CoordinatorDAO.php';
  include_once '../../model/transferObject/Seller.php';
  include_once '../../model/transferObject/Coordinator.php';

  $coordinators= array();
  $sellers = array();
  if (isset($_SESSION['emailManager'])) {
      $sellerDAO = new SellerDAO();
      $sellers= $sellerDAO -> selectSellers() ;
      $coordinatorDAO= new CoordinatorDAO();
      $coordinators = $coordinatorDAO -> selectCoordinators();
  } else {
    header('location: ../../index.php');
  }
  require_once '../../view/manager/managerHome.php';
?>
