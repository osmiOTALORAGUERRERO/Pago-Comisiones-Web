<?php
  ini_set('display_errors', 1);
  error_reporting(-1);
  session_start();
  include_once '../../model/DAO/ManagerDAO.php';
  include_once '../../model/transferObject/Manager.php';

  $actor;
  $error = '';
  if (isset($_SESSION['emailManager'])) {
    header('location: ../coordinator/home.php');
  } else {
    $actor = 'Gerente';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $email = $_POST['email'];
      $password = $_POST['password'];

      $managerDao = new ManagerDAO();
      $manager = $managerDao -> selectManagerByEmail($email);

      if($manager != null){
        if($managerDao->selectPasswordById($manager->getId()) != ''){
          if (password_verify($password, $managerDao->selectPasswordById($manager->getId()))) {
            $_SESSION['emailManager'] = $email;
            header('location: ../manager/home.php');
          }else {
            $error .= '<i>Wrong Password </i>';
          }
        }
      }else {
        $error .= '<i>this manager doesn`t exist</i>';
      }
    }
  }

  require_once '../../view/session/login.php';
?>
