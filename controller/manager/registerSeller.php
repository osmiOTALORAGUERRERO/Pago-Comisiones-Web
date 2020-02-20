<?php
ini_set('display_errors', 1);
error_reporting(-1);
  session_start();
  include_once '../../model/DAO/SellerDAO.php'; //includes del modelo necesarios para las funcionalidades
  include_once '../../model/transferObject/Seller.php';

  $message = '';
  if (isset($_SESSION['emailManager'])) {
    // Logica para la funcionalidad entre el modelo y la vista
    if($_SERVER["REQUEST_METHOD"] == 'POST'){
      $seller = new Seller();
      $seller  -> setName($_POST['name']);
      $seller  -> setEmail($_POST['email']);
      $seller  -> setContactNumber($_POST['contactNumber']);
      $seller  -> setFunctions($_POST['functions']);
      $seller  -> setRecruitment($_POST['recruitment']);
      $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
      $sellerDAO = new sellerDAO();
      if ($sellerDAO -> insertSeller($seller, $password)) {
        $message ='register successful';
      }else {
        $message= ' the register couldn`t be done';
      }
    }
  } else {
    header('location: ../../index.php');
  }
  require_once '../../view/manager/registerSeller.php';
?>
