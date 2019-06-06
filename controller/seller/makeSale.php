<?php
ini_set('display_errors', 1);
error_reporting(-1);
session_start();
include_once '../../model/DAO/SellerDAO.php';
include_once '../../model/DAO/ClientDAO.php';
include_once '../../model/DAO/SaleDAO.php';
include_once '../../model/DAO/ProductDAO.php'; //includes del modelo necesarios para las funcionalidades
include_once '../../model/transferObject/Product.php';
include_once '../../model/transferObject/Seller.php';
include_once '../../model/transferObject/Client.php';
include_once '../../model/transferObject/Sale.php';

$products = array();
$clients = array();
$active = false;
if (isset($_SESSION['emailSeller'])) {
  $sellerDAO = new SellerDAO();
  $sellers = $sellerDAO -> selectSellersActiveSeason();
  $seller = null;
  for ($i=0; $i <count($sellers) ; $i++) {
    if(strcmp($sellers[$i]->getEmail(), $_SESSION['emailSeller']) == 0){
      $seller = $sellers[$i];
      $active = true;
      break;
    }
  }
  if ($active) {
    $productDAO = new ProductDAO();
    $clientDAO = new ClientDAO();
    $products = $productDAO-> selectProducts();
    $clients = $clientDAO -> selectClients();
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      $saleDAO = new SaleDAO();
      $sale = new Sale();
      $sale -> setSaleDatail($_POST['detalle']);
      $sale -> setDate(date('y-m-d'));
      $sale -> setTotalSale($_POST['valor-venta']);
      $sale -> setSeller($seller -> getId());
      $sale -> setClient($_POST['cliente']);
      $sale -> setSoldProducts(json_decode($_POST['productos']));
      $result = $saleDAO -> insertSale($sale);
      if ($result != false) {
        echo json_encode(array('success'=>true));
      } else {
        echo json_encode(array('success'=>false, 'productos'=>$sale->getSoldProducts()));
      }
      return;
    }
  }
} else {
  header('location: ../../index.php');
}
require_once '../../view/seller/makeSale.php';


?>
