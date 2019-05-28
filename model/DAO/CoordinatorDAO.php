<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'Pago-Comisiones-Web/model/dataSource/DataBaseConection.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'Pago-Comisiones-Web/model/interfaces/InterfaceCoordinator.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'Pago-Comisiones-Web/model/transferObject/Coordinator.php';
  /**
   *
   */
  class CoordinatorDAO implements InterfaceCoordinator
  {

    function __construct()
    {
      // code...
    }

    public function selectCoordinatorBySeller($idSeller){
      $dataBase = new DataBaseConection();
      $sql = 'SELECT id_coordinator FROM Coordinator WHERE id_seller = :id_seller';
      $result = $dataBase -> executeQuery($sql, array(':id_seller'=>$idSeller));
      $coordinator = null;
      if($result != false){
        $coordinator = new Coordinator();
        $coordinator -> setId($result[0]['id_coordinator']);
      }
      return $coordinator;
    };
  }

?>
