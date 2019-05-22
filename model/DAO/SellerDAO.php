<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'Pago-Comisiones-Web/model/dataSource/DataBaseConection.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'Pago-Comisiones-Web/model/interfaces/InterfaceSeller.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'Pago-Comisiones-Web/model/transferObject/Seller.php';
  /**
   *
   */
  class SellerDAO implements InterfaceSeller
  {

    function __construct(){}

    public function insertSeller($seller, $password)
    {
      $dataBase = new DataBaseConection();
      $sql = 'INSERT INTO Sellers (id_seller, name, email, contact_number, ext, functions, password, id_coordinator, id_recruitment) VALUES
        (NULL, :name, :email, :contactNumber, :ext, :functions, :password, NULL, :recruitment)';

      $result = $dataBase -> executeInsert($sql, array(
        ':name'=>$seller->getName(),
        ':email'=>$seller->getEmail(),
        ':contactNumber'=>$seller->getContactNumber(),
        ':ext'=>5,
        ':functions'=>$seller->getFunctions(),
        ':password'=>$password,
        ':recruitment'=>$seller->getRecruitment()
      ));
      return $result;
    }
    public function selectSellerByEmail($email)
    {

    }
    public function selectSellersByCoordinator($idCoordinator)
    {

    }
    public function selectSellers()
    {

    }
  }

?>
