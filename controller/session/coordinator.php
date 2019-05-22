<?php
  session_start();
  include_once '../model/DAO/CoordinatorDAO.php';
  include_once '../model/transferObject/Coordinator.php';

  $actor;
  if (isset($_SESSION['emailCoordinator'])) {
    header('location: ../coordinator/home.php');
  } else {
    $actor = 'cordinador';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $email = $_POST['email'];
      $password = $_POST['password'];


    }
  }

  require_once '../../view/session/login.php';
?>
