<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'Pago-Comisiones-Web/model/dataSource/DataBaseConection.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'Pago-Comisiones-Web/model/interfaces/InterfaceTracking.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'Pago-Comisiones-Web/model/transferObject/Tracking.php';
  /**
   *
   */
  class TrackingDAO implements InterfaceTracking
  {

    function __construct()
    {
      // code...
    }
  }

?>
