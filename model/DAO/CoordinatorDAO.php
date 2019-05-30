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
    public function selectCoordinatorBySeller($id_coordinator)
    {
      $dataBase = new DataBaseConection();
      $sql = 'SELECT * FROM Coordinator WHERE id_coordinator = :id_coordinator';
      $result = $dataBase -> executeQuery($sql, array(':id_coordinator'=>$id_coordinator));

      $coordinator = new Coordinator();
      if($result != false){
        $coordinator = new Coordinator();
        $coordinator -> setId($result[0]['id_coordinator']);
        $coordinator -> setName($result[0]['name']);
      }
      return $coordinator;
    }
    public function selectCoordinatorByEmail($email='')
    {
      $dataBase = new DataBaseConection();
      $sql = 'SELECT id_coordinator FROM Coordinator WHERE email = :email';
      $result = $dataBase -> executeQuery($sql, array(':email'=>$email));

      $coordinator = null;
      if($result != false){
        $coordinator = new Coordinator();
        $coordinator -> setId($result[0]['id_coordinator']);
        $coordinator -> setName($result[0]['name']);
      }
      return $coordinator;
    }
    public function selectPasswordById($id='')
    {
      $password = '';
      $dataBase = new DataBaseConection();
      $sql = 'SELECT password FROM Coordinator WHERE id_coordinator = :id_coordinator';

      $result = $dataBase -> executeQuery($sql, array(':id_coordinator'=>$id));

      if($result != false){
        $password = $result[0]['password'];
      }
      return $password;
    }
  }

?>
