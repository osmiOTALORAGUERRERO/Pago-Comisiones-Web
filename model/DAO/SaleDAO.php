<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/Pago-Comisiones-Web/model/dataSource/DataBaseConection.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'/Pago-Comisiones-Web/model/interfaces/InterfaceSale.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'/Pago-Comisiones-Web/model/transferObject/Sale.php';
  /**
   *
   */
  class SaleDAO implements InterfaceSale
  {

    public function insertSale($sale){}
    public function selectSalesBySeller($idSeller){}
    public function selectSumTotalBySeller($idSeller){}
  }

?>
