<?php
ini_set('display_errors', 1);
error_reporting(-1);
session_start();
include_once '../../model/DAO/SeasonDAO.php'; //includes del modelo necesarios para las funcionalidades
include_once '../../model/transferObject/Season.php';

$months = array();
$message = '';
if (isset($_SESSION['emailManager'])) {
  $seasonDAO = new SeasonDAO();
  if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $season = new Season();
    $season -> setId($_POST['mes']);
    $season -> setSeason($_POST['festividad']);
    $season -> setNumberSellers($_POST['numeroEmpleados']);
    $season -> setPorcentageProducts($_POST['porcentajeProductos']);
    $result = $seasonDAO -> updateSeason($season);
    if ($result != false) {
      $message = 'Temporada registrada exitosamente';
    }else {
      $message = 'Error al registrar la temporada establecida';
    }
  }
  $months = $seasonDAO -> selectSeasons();
} else {
  header('location: ../../index.php');
}
require_once '../../view/manager/setSeasons.php';
?>
