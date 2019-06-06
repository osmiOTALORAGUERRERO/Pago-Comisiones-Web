<?php

ini_set('display_errors', 1);
error_reporting(-1);
session_start();

include_once '../../model/DAO/SellerDAO.php';
include_once '../../model/DAO/SaleDAO.php';
include_once '../../model/transferObject/Seller.php';
include_once '../../model/transferObject/Sale.php';

$sellers = array();
if (isset($_SESSION['emailFinancial'])) {
  $sellerDAO = new SellerDAO();
  $sellers = $sellerDAO -> selectSellersActiveSeason();
  function totalSales($idSeller)
  {
    $saleDAO = new SaleDAO();
    return $saleDAO -> selectSumTotalBySeller($idSeller);
  }
  function salesNumber($idSeller)
  {
    $saleDAO = new SaleDAO();
    return $saleDAO -> selectSalesNumber($idSeller);
  }
} else {
  header('location: ../../index.php');
}

require_once '../../view/financial/setSalaries.php';
?>
