<?php
ini_set('display_errors', 1);
error_reporting(-1);
  session_start();
  include_once '../../model/DAO/SeasonDAO.php'; //includes del modelo necesarios para las funcionalidades
  include_once '../../model/DAO/CoordinatorDAO.php';
  include_once '../../model/DAO/SellerDAO.php';
  include_once '../../model/DAO/SaleDAO.php';
  include_once '../../model/transferObject/Season.php';
  include_once '../../model/transferObject/Coordinator.php';
  include_once '../../model/transferObject/Seller.php';
  include_once '../../model/transferObject/Sale.php';

  $seasons = array();
  $coordinators = array();
  $sellers = array();
  $info = '';
  $active = false;
  if (isset($_SESSION['emailManager'])) {

    $seasonDao = new SeasonDAO();
    $coordinatorDao = new CoordinatorDAO();
    $sellerDao = new SellerDAO();
    $coordinators = $coordinatorDao -> selectCoordinators();
    $sellers = $sellerDao -> selectSellers();

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
      if ($_POST['control'] == 'start') {
        $sellersByCoordinator = $_POST['seller'];
        $seasonChoose = $_POST['season'];
        for ($i=0; $i < count($sellersByCoordinator); $i++) {
          for ($j=0; $j < count($sellersByCoordinator[$i]); $j++) {
            $result = $sellerDao -> updateCoordinatorSeller(intval($sellersByCoordinator[$i][$j]), intval($coordinators[$i]->getId()));
            $result2 = $seasonDao -> insertSeasonBySeller(intval($seasonChoose), intval($sellersByCoordinator[$i][$j]));
          }
        }
        $seasonDao -> updateSeaosonToActive($seasonChoose, 1);
        $info = 'season chossen in performance';
        $active = true;
      } else {
        $saleDAO = new SaleDAO();
        $sellersActive = $sellerDao -> selectSellersActiveSeason();
        $seasonDao -> updateSeaosonToActive($_POST['season'], 0);
        $seasonDao -> deleteSeasonsBySeller($_POST['season']);
        for ($i=0; $i < count($sellersActive); $i++) {
          $saleDAO -> deleteSales($sellersActive[$i] -> getId());
        }
      }
    } elseif ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['idSeason'])) {
      $seasonChoose = $_GET['idSeason'];

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
    }
    $seasonActive = $seasonDao -> selectActiveSeason();
    if($seasonActive == null){
      $seasons = $seasonDao -> selectSeasonsSet();
    }else {
      $info = 'there is an active season';
      $active = true;
    }
  } else {
    header('location: ../../index.php');
  }
  require_once '../../view/manager/simulatorController.php';
?>
