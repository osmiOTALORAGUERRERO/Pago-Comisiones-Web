<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/Pago-Comisiones-Web/model/dataSource/DataBaseConection.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'/Pago-Comisiones-Web/model/interfaces/InterfaceManager.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'/Pago-Comisiones-Web/model/transferObject/Manager.php';
  /**
   *
   */
  class ManagerDAO implements InterfaceManager
  {

    public function selectManagerByEmail($email='')
    {
      $dataBase = new DataBaseConection();
      $sql = 'SELECT id_manager, name, email FROM Managers WHERE email = :email';

      $result = $dataBase -> executeQuery($sql, array(':email'=>$email));
      $manager = null;
      if($result != false){
        $manager = new Manager();
        $manager -> setId($result[0]['id_manager']);
        $manager -> setName($result[0]['name']);
        $manager -> setEmail($result[0]['email']);
      }
      return $manager;
    }

    public function selectPasswordById($id='')
    {
      $password = '';

      $dataBase = new DataBaseConection();
      $sql = 'SELECT password FROM Managers WHERE id_manager = :id_manager';

      $result = $dataBase -> executeQuery($sql, array(':id_manager' => $id));
      if ($result != false) {
        $password = $result[0]['password'];
      }

      return $password;
    }

  }

?>
