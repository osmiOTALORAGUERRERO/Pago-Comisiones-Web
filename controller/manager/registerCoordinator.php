<?php
  session_start();
  include_once '../../model/DAO/CoordinatorDAO.php'; //includes del modelo necesarios para las funcionalidades
  include_once '../../model/transferObject/Coordinator.php';

  if (isset($_SESSION['emailManager'])) {
    if ($_SERVER['REQUEST_METHOD']== 'POST') {


    }


  } else {
    header('location: ../../index.php');
  }
  require_once '../../view/manager/registerCoordinator.php';
?>
