<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'Pago-Comisiones-Web/model/dataSource/DataBaseConection.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'Pago-Comisiones-Web/model/interfaces/InterfaceFinancial.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'Pago-Comisiones-Web/model/transferObject/Financial.php';
  /**
   *
   */
  class FinancialDAO implements InterfaceFinancial
  {

    function __construct()
    {
      // code...
    }
  }

?>
