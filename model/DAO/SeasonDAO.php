<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/Pago-Comisiones-Web/model/dataSource/DataBaseConection.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'/Pago-Comisiones-Web/model/interfaces/InterfaceSeason.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'/Pago-Comisiones-Web/model/transferObject/Season.php';
  /**
   *
   */
  class SeasonDAO implements InterfaceSeason
  {

    public function updateSeason($season)
    {
      $dataBase = new DataBaseConection();
      $sql = 'UPDATE Seasons SET name_season=:name_season, number_sellers=:number_sellers, porcentage_products=:porcentage_products WHERE id_season=:id_season';
      $result = $dataBase -> executeUpdate($sql, array(
        ':name_season'=> $season->getSeason(),
        ':number_sellers'=> $season->getNumberSellers(),
        ':porcentage_products'=> $season->getPorcentageProducts(),
        ':id_season'=> $season->getId()
      ));
      return $result;
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
    public function selectSeasonById($idSeason='')
    {
      $dataBase = new DataBaseConection();
      $sql = 'SELECT * FROM Seasons WHERE id_season = :idSeason';
      $result = $dataBase -> executeQuery($sql, array(':idSeason'=>$idSeason));
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
    public function updateSeaosonToActive($idSeason)
    {
      $dataBase = new DataBaseConection();
      $sql = 'UPDATE Seasons SET active = 1 WHERE id_season = :id_season';
      $result = $dataBase -> executeUpdate($sql, array(':id_season'=>$idSeason));
      return $result;
    }
    public function insertSeasonBySeller($idSeason, $idSeller)
    {
      $dataBase = new DataBaseConection();
      $sql = 'INSERT INTO SeasonBySeller (id_season, id_seller) VALUES (:id_season, :id_seller)';

      $result = $dataBase -> executeInsert($sql, array(
        ':id_season'=>$idSeason, ':id_seller'=>$idSeller
      ));
      return $result;
    }
  }

?>
