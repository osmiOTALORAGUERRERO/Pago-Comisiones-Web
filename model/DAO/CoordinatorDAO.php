<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/Pago-Comisiones-Web/model/dataSource/DataBaseConection.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'/Pago-Comisiones-Web/model/interfaces/InterfaceCoordinator.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'/Pago-Comisiones-Web/model/transferObject/Coordinator.php';
  /**
   *
   */
  class CoordinatorDAO implements InterfaceCoordinator
  {
    public function selectCoordinators()
    {
      $dataBase = new DataBaseConection();
      $result = $dataBase -> executeQuery('SELECT id_coordinator, name, email, contact_number FROM Coordinator');
      $coordinators = array();
      if ($result != false) {
        for ($i=0; $i < count($result); $i++) {
          $coordinator = new Coordinator();
          $coordinator -> setId($result[$i]['id_coordinator']);
          $coordinator -> setName($result[$i]['name']);
          $coordinator -> setEmail($result[$i]['email']);
          $coordinator -> setContactNumber($result[$i]['contact_number']);
          array_push($coordinators, $coordinator);
        }
      }
      return $coordinators;
    }
    public function selectCoordinatorBySeller($idSeller='')
    {
      // code...
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
