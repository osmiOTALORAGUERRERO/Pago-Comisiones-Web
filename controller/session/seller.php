<?php
  ini_set('display_errors', 1);
  error_reporting(-1);
  session_start();
  include_once '../../model/DAO/SellerDAO.php';
  include_once '../../model/transferObject/Seller.php';

  $actor;
  $error = '';
  if (isset($_SESSION['emailSeller'])) {
    header('location: ../seller/home.php');
  } else {
    $actor = 'Vendedor';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $email = $_POST['email'];
      $password = $_POST['password'];

      $sellerDao = new SellerDAO();
      $seller = $sellerDao -> selectSellerByEmail($email);

      if($seller != null){
          if(password_verify($password, $sellerDao->selectPasswordById($seller->getId()))){
            $_SESSION['emailSeller'] = $email;
            header('location: ../seller/home.php');
          }else {
            $error .= '<i>wrong password</i>';
          }
      }else {
        $error .= '<i>this seller doesn`t exist</i>';
      }
    }
  }

  require_once '../../view/session/login.php';
?>
