<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/Pago-Comisiones-Web/model/dataSource/DataBaseConection.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'/Pago-Comisiones-Web/model/interfaces/InterfaceCompany.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'/Pago-Comisiones-Web/model/transferObject/Company.php';
  /**
   *
   */
  class CompanyDAO implements InterfaceCompany
  {
    public function insertSeller($seller){}
    public function insertCoordinator($coordinator){}
    public function insertSeason($season){}
  }

?>
