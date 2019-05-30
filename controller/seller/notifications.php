<?php
session_start();
include_once '../../model/DAO/SellerDAO.php'; //includes del modelo necesarios para las funcionalidades


if (isset($_SESSION['emailSeller'])) {
  // Logica para la funcionalidad entre el modelo y la vista
} else {
  header('location: ../../index.php');
}


require_once '../../view/seller/notifications.php';
?>
