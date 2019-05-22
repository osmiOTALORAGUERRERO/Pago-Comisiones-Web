<?php
  session_start();
  include_once '../model/DAO/managerDAO.php'; //includes del modelo necesarios para las funcionalidades
  include_once '../model/DAO/CompanyDAO.php';

  if (isset($_SESSION['emailManager'])) {
    // Logica para la funcionalidad entre el modelo y la vista
  } else {
    header('location: ../../index.php');
  }
  require_once '../../view/manager/managerHome.php';
?>
