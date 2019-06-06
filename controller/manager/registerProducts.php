<?php
ini_set('display_errors', 1);
error_reporting(-1);
session_start();
include_once '../../model/DAO/ProductDAO.php'; //includes del modelo necesarios para las funcionalidades
include_once '../../model/transferObject/Product.php';
$message = '';
if (isset($_SESSION['emailManager'])) {
  if($_SERVER["REQUEST_METHOD"] == 'POST'){
    echo "string";
    $product = new Product();
    $productDAO = new ProductDAO();
    $product -> setProduct($_POST['name']);
    $product -> setPrice($_POST['price']);
    $product -> setCategory($_POST['category']);
    $result = $productDAO -> insertProduct($product);
    if ($result != false) {
      $message ='register successful';
    }else {
     $message= ' the register couldn`t be done';
    }
  }
} else {
  header('location: ../../index.php');
}
require_once '../../view/manager/registerProducts.php';
?>
