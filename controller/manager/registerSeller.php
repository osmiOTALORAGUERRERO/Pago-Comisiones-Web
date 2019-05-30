<?php
  session_start();
  include_once '../../model/DAO/SellerDAO.php'; //includes del modelo necesarios para las funcionalidades
  include_once '../../model/transferObject/Seller.php';

  if (isset($_SESSION['emailManager'])) {
    // Logica para la funcionalidad entre el modelo y la vista
    if($_SERVER["REQUEST_METHOD"] == 'POST'){
      $seller = new Seller();
      $seller  -> setName($_POST['name']);
      $seller  -> setEmail($_POST['email']);
      $seller  -> setContactNumber($_POST['contactNumber']);
      $seller  -> setFunctions($_POST['function']);
      $seller  -> setRecruitment($_POST['recruitment']);
      //contraseña
      $sellerDAO = new sellerDAO();
      if ($sellerDAO -> insertSeller($seller, $password)) {
        $message ='registro Exitoso';
      }else {
        $message= ' el registro no se ejecuto correctamente';
      }
    }
  } else {
    header('location: ../../index.php');
  }
  require_once '../../view/manager/registerSeller.php';
?>
