<?php
session_start();

require_once $_SERVER['DOCUMENT_ROOT'].'Pago-Comisiones-Web/model/transferObject/Client.php';
require_once $_SERVER['DOCUMENT_ROOT'].'Pago-Comisiones-Web/model/ClientDAO.php';

if (isset($_SESSION['emailSeller'])) {
  $nombre = $_POST["nombre"];
  $nit = $_POST["nit"];
  //Correos
  if ($_POST["correo1"] != "")
  {
    $email[0] = $_POST["correo1"];
  }
  if ($_POST["correo2"] != "") {
    $email[1] = $_POST["correo2"];
  }
  if ($_POST["correo3"] != "") {
    $email[2] = $_POST["correo3"];
  }
  //Numeros
  if ($_POST["numero1"] != "")
  {
    $numero[0] = $_POST["numero1"];
  }
  if ($_POST["numero2"] != "") {
    $numero[1] = $_POST["numero2"];
  }
  if ($_POST["numero3"] != "") {
    $numero[2] = $_POST["numero3"];
  }

  $cliente = new Client();
  $cliente->setNit($nit);
  $cliente->setNombre($nombre);
  $cliente->setEmail($email);
  $cliente->setContactNumber($numero);
  $cliente->setDirection($direccion);
  $cliente->setPosition("");
  //Ni idea que es position
  //$cliente->setPosition($position);


  $cliente_DAO = new ClientDAO();
  $busqueda = $cliente_DAO->searchByNit($nit);
  if (is_null($busqueda) === false) {
    $insert_client = $cliente_DAO->inserClient($cliente);
    echo $insert_client;
  }
  else {
    echo "El cliente ya existe";
  }

} else {
  header('location: ../../index.php');
}
