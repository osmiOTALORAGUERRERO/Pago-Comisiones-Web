<?php
  session_start();
  include_once '../../model/DAO/SeasonDAO.php'; //includes del modelo necesarios para las funcionalidades
  include_once '../../model/DAO/CoordinatorDAO.php';
  include_once '../../model/DAO/sellerDAO.php';
  include_once '../../model/transferObject/Season.php';
  include_once '../../model/transferObject/Coordinator.php';
  include_once '../../model/transferObject/Seller.php';

  $seasons = array();
  $coordinators = array();
  $sellers = array();
  $estado = '';
  if (isset($_SESSION['emailManager'])) {
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $seasonChose = $_POST['season'];
      $sellersByCoordinator = $_POST['seller'];
    } else {
      $seasonDao = new SeasonDAO();
      if($seasonDao -> selectActiveSeason() != null){
        $coordinatorDao = new CoordinatorDAO();
        $sellersDao = new SellersDAO();
        $seasons = $seasonDao -> selectSeasons();
        $coordinators = $coordinatorDao -> selectCoordinators();
        $sellers = $sellersDao -> selectSellers();
        
      }
    }
  } else {
    header('location: ../../index.php');
  }
  require_once '../../view/manager/notifications.php';
?>
