<?php
  session_start();
  include_once 'file'; //includes del modelo necesarios para las funcionalidades

  if (isset($_SESSION['emailManager'])) {
    // Logica para la funcionalidad entre el modelo y la vista
  } else {
    header('location: ../../index.php');
  }
  require_once '../../view/manager/registerSeller.php';
?>
