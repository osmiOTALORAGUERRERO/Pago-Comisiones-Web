<?php
ini_set('display_errors', 1);
error_reporting(-1);
  session_start();
  include_once '../session/seller.php';
  include_once '../registerSeller.php';
  include_once '../../model/DAO/$sellerDao.php'


   //includes del modelo necesarios para las funcionalidades

  if (isset($_SESSION['emailSeller'])) {
    // Logica para la funcionalidad entre el modelo y la vista
  } else {
    header('location: ../../index.php');
  }


  require_once '../../view/seller/sellerHome.php';
?>
