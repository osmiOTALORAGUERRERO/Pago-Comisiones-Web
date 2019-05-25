<?php
  ini_set('display_errors', 1);
  error_reporting(-1);
  session_start();
  include_once '../../model/DAO/SellerDAO.php';
  include_once '../../model/transferObject/Seller.php';

  $actor;
  $error = '';
  if (isset($_SESSION['emailCoordinator'])) {
    header('location: ../coordinator/home.php');
  } else {
    $actor = 'Vendedor';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $email = $_POST['email'];
      $password = $_POST['password'];

      $sellerDao = new SellerDAO();
      $seller = $sellerDao -> selectSellerByEmail($email);

      if($seller != null){
          if(password_verify($password, $sellerDao->selectPasswordById($seller->getId()))){
            $_SESSION['emailCoordinator'] = $email;
            header('location: ../seller/home.php');
          }else {
            $error .= '<i>Contraseña incorrecta</i>';
          }
      }else {
        $error .= '<i>El vendedor no existe</i>';
      }
    }
  }

  require_once '../../view/session/login.php';
?>
