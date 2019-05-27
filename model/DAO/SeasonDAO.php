<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/Pago-Comisiones-Web/model/dataSource/DataBaseConection.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'/Pago-Comisiones-Web/model/interfaces/InterfaceSeason.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'/Pago-Comisiones-Web/model/transferObject/Season.php';
  /**
   *
   */
  class SeasonDAO implements InterfaceSeason
  {

    public function insertSeason($season)
    {

    }
    public function selectSeasons()
    {
      $dataBase = new DataBaseConection();
      $result = $dataBase -> executeQuery('SELECT * FROM Seasons');
      $seasons = array();
      for ($i=0; $i < count($result); $i++) {
        $season = new Season();
        $season -> setId($result[$i]['id_season']);
        $season -> setSeason($result[$i]['name_season']);
        $season -> setNumberSellers($result[$i]['number_sellers']);
        $season -> setPorcentageProducts($result[$i]['porcentage_products']);
        $season -> setMonth($result[$i]['month']);
        array_push($seasons, $season);
      }
      return $seasons;
    }
    public function deleteSeason($idSeason)
    {

    }
    public function selectActiveSeason()
    {
      $dataBase = new DataBaseConection();
      $result = $dataBase -> executeQuery('SELECT * FROM Seasons WHERE active = 1');
      $season = null;
      if ($result != false) {
        $season = new Season();
        $season -> setId($result[0]['id_season']);
        $season -> setSeason($result[0]['name_season']);
        $season -> setNumberSellers($result[0]['number_sellers']);
        $season -> setPorcentageProducts($result[0]['porcentage_products']);
        $season -> setMonth($result[0]['month']);
      }
      return $season;
    }
  }

?>
