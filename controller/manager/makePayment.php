<?php
  ini_set('display_errors', 1);
  error_reporting(-1);
  session_start();
  include_once '../../model/DAO/SellerDAO.php'; //includes del modelo necesarios para las funcionalidades
  include_once '../../model/transferObject/Seller.php';

  $sellers = array();
  $info = '';
  if (isset($_SESSION['emailManager'])) {
    $sellerDao = new SellerDAO();
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
      $seller = new Seller();
      $seller -> setId($_POST['seller']);
      $seller -> setBaseBalance($_POST['balance']);
      $seller -> setLastCommission($_POST['commission']);

      if($sellerDao -> insertPayment($seller)){
        $info = '<i>Payment successful</i>';
      }else {
        $info = '<i>Payment couldn`t be done</i>';
      }
    }
    $sellers = $sellerDao -> selectSellersActiveSeason();
  } else {
    header('location: ../../index.php');
  }
  require_once '../../view/manager/makePayment.php';
?>
