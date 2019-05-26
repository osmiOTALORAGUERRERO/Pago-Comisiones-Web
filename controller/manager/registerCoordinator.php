<?php
  session_start();
  include_once '../model/DAO/CoordinadorDAO.php'; //includes del modelo necesarios para las funcionalidades
  include_once '../model/DAO/SellerDAO.php';
  if (isset($_SESSION['emailManager'])) {
    // Logica para la funcionalidad entre el modelo y la vista
  } else {
    header('location: ../../index.php');
  }
  require_once '../../view/manager/registerCoordinator.php';
?>
