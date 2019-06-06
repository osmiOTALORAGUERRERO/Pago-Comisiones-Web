<?php
ini_set('display_errors', 1);
error_reporting(-1);
session_start();

include_once '../../model/DAO/ClientDAO.php'; //includes del modelo necesarios para las funcionalidades
include_once '../../model/transferObject/Client.php';
include_once '../../model/DAO/SellerDAO.php';
include_once '../../model/transferObject/Seller.php';

$active = false;
$info = '';
if (isset($_SESSION['emailSeller'])) {
  $sellerDAO = new SellerDAO();
  $sellers = $sellerDAO -> selectSellersActiveSeason();
  for ($i=0; $i <count($sellers) ; $i++) {
    if(strcmp($sellers[$i]->getEmail(), $_SESSION['emailSeller']) == 0){
      $active = true;
      break;
    }
  }
  if ($active) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $clientDAO = new ClientDAO();
      $client = new Client();
      $client -> setNit($_POST['nit']);
      $client -> setName($_POST['nombre']);
      $client -> setEmail($_POST['email']);
      $client -> setContactNumber($_POST['number']);
      $result = $clientDAO -> insertClient($client);
      if ($result != false) {
        $info = 'El cliente se ha registrado exitosamente';
      } else {
        $info = 'Error en el registro del cliente';
      }
    }
  }
} else {
  header('location: ../../index.php');
}


require_once '../../view/seller/registerClient.php';
?>
