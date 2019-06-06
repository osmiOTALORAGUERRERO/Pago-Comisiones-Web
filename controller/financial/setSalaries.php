<?php

ini_set('display_errors', 1);
error_reporting(-1);
session_start();

include_once '../../model/DAO/SellerDAO.php';
include_once '../../model/DAO/SaleDAO.php';
include_once '../../model/transferObject/Seller.php';
include_once '../../model/transferObject/Sale.php';

if (isset($_SESSION['emailFinancial'])) {

} else {
  header('location: ../../index.php');
}

require_once '../../view/financial/setSalaries.php';
?>
