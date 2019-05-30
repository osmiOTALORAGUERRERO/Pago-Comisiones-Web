<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/Pago-Comisiones-Web/model/dataSource/DataBaseConection.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'/Pago-Comisiones-Web/model/interfaces/InterfaceSeller.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'/Pago-Comisiones-Web/model/transferObject/Seller.php';
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
      $dataBase = new DataBaseConection();
      $sql = 'SELECT * FROM Sellers WHERE email = :email';
      $result = $dataBase -> executeQuery($sql, array(':email'=>$email));

      $seller = null;
      if($result != false){
        $seller = new Coordinator();
        $seller -> setId($result[0]['id_seller']);
        $seller -> setName($result[0]['id_seller']);
        $seller -> setEmail($result[0]['id_seller']);
        $seller -> setFunctions($result[0]['id_seller']);
        $seller -> setFunctions($result[0]['id_seller']);
        $seller -> setCoordinator($result[0]['id_coordinator']);
      }
      return $seller;
    }
    public function selectPasswordById($id='')
    {
      $password = '';
      $dataBase = new DataBaseConection();
      $sql = 'SELECT password FROM Sellers WHERE id_seller = :id_seller';

      $result = $dataBase -> executeQuery($sql, array(':id_seller'=>$id));

      if($result != false){
        $password = $result[0]['password'];
      }
      return $password;
    }
    public function selectSellersByCoordinator($idCoordinator)
    {

    }
    public function selectSellers()
    {
    }
  }

?>
