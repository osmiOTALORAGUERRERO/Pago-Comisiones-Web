<?php
ini_set('display_errors', 1);
error_reporting(-1);
session_start();
include_once '../../model/DAO/FinancialDAO.php';
include_once '../../model/transferObject/Financial.php';

$actor;
$error = '';
if (isset($_SESSION['emailFinancial'])) {
  header('location: ../coordinator/home.php');
} else {
  $actor = 'financial';
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $financialDao = new FinancialDAO();
    $financial = $financialDao -> selectFinancialByEmail($email);

    if($financial != null){
        if(password_verify($password, $financialDao->selectPasswordById($financial->getId()))){
          $_SESSION['emailFinancial'] = $email;
          header('location: ../financial/setSalaries.php');
        }else {
          $error .= '<i>Contraseña incorrecta</i>';
        }
    }else {
      $error .= '<i>El coordinador no existe</i>';
    }
  }
}

require_once '../../view/session/login.php';
?>
