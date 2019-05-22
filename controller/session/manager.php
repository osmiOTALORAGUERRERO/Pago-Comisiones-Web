<?php
  session_start();
  include_once '../model/DAO/Manager.php';
  include_once '../model/transferObject/Manager.php';

  $actor;
  if (isset($_SESSION['emailManager'])) {
    header('location: ../coordinator/home.php');
  } else {
    $actor = 'Gerente';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // code...
    }
  }

  require_once '../../view/session/login.php';
?>
