<?php
session_start();

require_once $_SERVER['DOCUMENT_ROOT'].'Pago-Comisiones-Web/model/transferObject/Client.php';
require_once $_SERVER['DOCUMENT_ROOT'].'Pago-Comisiones-Web/model/transferObject/ClientDAO.php';

if (isset($_SESSION['emailSeller'])) {

} else {
  header('location: ../../index.php');
}
$nombre = $_POST["nombre"];
$nit = $_POST["nit"];
$email = array($_POST["correo1"], $_POST["correo2"], $_POST["correo3"]);
$numero = array( $_POST["numero1"], $_POST["numero2"], $_POST["numero3"] );
$direccion = $_POST["direccion"];

$cliente = new Client();
$cliente->setNit($nit);
$cliente->setNombre($nombre);
$cliente->setEmail($email);
$cliente->setContactNumber($numero);
$cliente->setDirection($direccion);
$cliente->setPosition($position);


$cliente_DAO = new ClientDAO();
$insert_client = $cliente_DAO->inserClient($cliente);
echo $insert_client;
