<?php
ini_set('display_errors', 1);
error_reporting(-1);
  session_start();
  include_once '../../model/DAO/ProductDAO.php'; //includes del modelo necesarios para las funcionalidades
  include_once '../../model/transferObject/Product.php';
  $message = '';
  if (isset($_SESSION['emailManager'])) {
    if($_SERVER["REQUEST_METHOD"] == 'POST'){
      $product = new Product();
      $product -> setProduct($_POST['name']);
      $product -> setPrice($_POST['price']);
      $product -> setCategory($_POST['category']);
      $ProductDAO = new ProductDAO();

      if ($ProductDAO -> insertProduct($product)) {
        $message ='register Successful';
      }else {
       $message= ' the register couldn`t be done';
      }
    }
  } else {
    header('location: ../../index.php');
  }
  require_once '../../view/manager/registerProducts.php';
?>
