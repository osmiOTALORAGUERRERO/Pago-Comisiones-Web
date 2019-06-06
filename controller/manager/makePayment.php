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
    $seller = new Seller();
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
      $seller -> setId($_POST['seller']);
      $seller -> setBaseBalance($_POST['balance']);
      $seller -> setLastCommission($_POST['commission']);
      $result = $sellerDao -> insertPayment($seller);
      if($result != false){
        $info = '<i>Payment could be done successful</i>';
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
