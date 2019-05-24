<?php
  session_start();
  include_once '../model/DAO/SellerDAO.php';
  include_once '../model/transferObject/Seller.php';

  $actor;
  if (isset($_SESSION['emailCoordinator'])) {
    header('location: ../coordinator/home.php');
  } else {
    $actor = 'Vendedor';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $email = $_POST['email'];
      $password = $_POST['password'];
    }
  }

  echo password_hash('seller0', PASSWORD_BCRYPT);
  require_once '../../view/session/login.php';
?>
