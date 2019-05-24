<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/Pago-Comisiones-Web/model/dataSource/DataBaseConection.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'/Pago-Comisiones-Web/model/interfaces/InterfaceCoordinator.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'/Pago-Comisiones-Web/model/transferObject/Coordinator.php';
  /**
   *
   */
  class CoordinatorDAO implements InterfaceCoordinator
  {
    public function selectCoordinators($value='')
    {
      // code...
    }
    public function selectCoordinatorBySeller($idSeller='')
    {
      // code...
    }
    public function selectCoordinatorByEmail($email='')
    {
      // code...
    }
    public function selectPasswordById($id='')
    {
      // code...
    }
  }

?>
