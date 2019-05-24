<?php
  ini_set('display_errors', 1);
  error_reporting(-1);
  session_start();
  include_once '../../model/DAO/CoordinatorDAO.php';
  include_once '../../model/transferObject/Coordinator.php';

  $actor;
  $error = '';
  if (isset($_SESSION['emailCoordinator'])) {
    header('location: ../coordinator/home.php');
  } else {
    $actor = 'cordinador';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $email = $_POST['email'];
      $password = $_POST['password'];

      $coordinatorDao = new CoordinatorDAO();
      $coordinator = $coordinatorDao -> selectCoordinatorByEmail($email);

      if($coordinator != null){
          if(password_verify($password, $coordinatorDao->selectPasswordById($coordinator->getId()))){
            $_SESSION['emailCoordinator'] = $email;
            header('location: ../coordinator/home.php');
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
