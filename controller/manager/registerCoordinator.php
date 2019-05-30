<?php
  session_start();
  include_once '../../model/DAO/CoordinatorDAO.php'; //includes del modelo necesarios para las funcionalidades
  include_once '../../model/transferObject/Coordinator.php';

  if (isset($_SESSION['emailManager'])) {
    if($_SERVER["REQUEST_METHOD"] == 'POST'){
      $coordinator = new Coordinator();
      $coordinator -> setName($_POST['name']);
      $coordinator -> setEmail($_POST['email']);
      $coordinator -> setContactNumber($_POST['contactNumber']);
      //contraseña
      $coordinatorDAO = new coordinatorDAO();
      if ($coordinatorDAO -> insertCoordinator($coordinator, $password)) {
        $message ='registro Exitoso';
      }else {
        $message= ' el registro no se ejecuto correctamente';
      }
    }
  } else {
    header('location: ../../index.php');
  }
  require_once '../../view/manager/registerCoordinator.php';
?>
