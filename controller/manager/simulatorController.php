<?php
ini_set('display_errors', 1);
error_reporting(-1);
  session_start();
  include_once '../../model/DAO/SeasonDAO.php'; //includes del modelo necesarios para las funcionalidades
  include_once '../../model/DAO/CoordinatorDAO.php';
  include_once '../../model/DAO/SellerDAO.php';
  include_once '../../model/transferObject/Season.php';
  include_once '../../model/transferObject/Coordinator.php';
  include_once '../../model/transferObject/Seller.php';

  $seasons = array();
  $coordinators = array();
  $sellers = array();
  $estado = '';
  if (isset($_SESSION['emailManager'])) {
    $seasonDao = new SeasonDAO();
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
      $sellersByCoordinator = $_POST['seller'];

    } elseif ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['idSeason'])) {
      $seasonChoose = $_GET['idSeason'];
      $coordinatorDao = new CoordinatorDAO();
      $sellersDao = new SellerDAO();

      $coordinators = $coordinatorDao -> selectCoordinators();
      $sellers = $sellersDao -> selectSellers();
      $season = $seasonDao -> selectSeasonById($seasonChoose);
      $sellersResponse = array();
      for ($i=0; $i < count($sellers); $i++) {
        $seller = array('id'=>$sellers[$i]->getId(), 'name'=>$sellers[$i]->getName());
        array_push($sellersResponse, $seller);
      }
      $coordinatorsResponse = array();
      for ($i=0; $i < count($coordinators); $i++) {
        $coordinator = array('id'=>$coordinators[$i]->getId(), 'name'=>$coordinators[$i]->getName());
        array_push($coordinatorsResponse, $coordinator);
      }
      echo json_encode(array('sellers'=>$sellersResponse, 'coordinators'=>$coordinatorsResponse, 'number-sellers'=>$season->getNumberSellers(), 'success'=>true));
      return;
    } else {
      if($seasonDao -> selectActiveSeason() == null){
        $seasons = $seasonDao -> selectSeasons();
      }
    }
  } else {
    header('location: ../../index.php');
  }
  require_once '../../view/manager/simulatorController.php';
?>
