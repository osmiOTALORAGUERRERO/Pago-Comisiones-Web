<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/Pago-Comisiones-Web/model/dataSource/DataBaseConection.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'/Pago-Comisiones-Web/model/interfaces/InterfaceFinancial.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'/Pago-Comisiones-Web/model/transferObject/Financial.php';
  /**
   *
   */
  class FinancialDAO implements InterfaceFinancial
  {
    public function selectFinancialByEmail($email)
    {
      $dataBase = new DataBaseConection();
      $sql = 'SELECT id_financial FROM Financial WHERE email = :email';
      $result = $dataBase -> executeQuery($sql, array(':email'=>$email));
      $financial = null;
      if($result != false){
        $financial = new Financial();
        $financial -> setId($result[0]['id_financial']);
      }
      return $financial;
    }

    public function selectPasswordById($idFinancial)
    {
      $password = '';
      $dataBase = new DataBaseConection();
      $sql = 'SELECT password FROM Financial WHERE id_financial = :id_financial';

      $result = $dataBase -> executeQuery($sql, array(':id_financial'=>$idFinancial));

      if($result != false){
        $password = $result[0]['password'];
      }
      return $password;
    }
  }

?>
