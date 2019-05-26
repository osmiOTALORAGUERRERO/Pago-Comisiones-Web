<?php
  session_start();
  include_once '../model/DAO/CoordinadorDAO.php';//includes del modelo necesarios para las funcionalidades
  include_once '../model/DAO/SellerDAO.php';
  include_once '../model/DAO/ProductDAO.php';

  if (isset($_SESSION['emailCoordinator'])) {
    // Logica para la funcionalidad entre el modelo y la vista
  } else {
    header('location: ../../index.php');
  }

  require_once '../../view/coordinator/coordinatorHome.php';
?>
