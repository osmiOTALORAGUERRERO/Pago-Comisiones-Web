<?php
  session_start();
  include_once 'model/DAO/SeasonDAO.php';//includes del modelo necesarios para las funcionalidades
  include_once 'model/DAO/SellerDAO.php';
  include_once 'model/DAO/SaleDAO.php';


  if (isset($_SESSION['emailCoordinator'])) {
    // Logica para la funcionalidad entre el modelo y la vista
  } else {
    header('location: ../../index.php');
  }

  require_once '../../view/coordinator/sellersLocation.php';
?>
