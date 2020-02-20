<?php
ini_set('display_errors', 1);
error_reporting(-1);
session_start();

include_once '../../model/DAO/SellerDAO.php';
include_once '../../model/transferObject/Seller.php';
 //includes del modelo necesarios para las funcionalidades

$seller = null;
if (isset($_SESSION['emailSeller'])) {
  $sellerDAO = new SellerDAO();
  $seller = $sellerDAO -> selectSellerByEmail($_SESSION['emailSeller']);
} else {
  header('location: ../../index.php');
}

require_once '../../view/seller/sellerHome.php';
?>
