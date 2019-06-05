<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/Pago-Comisiones-Web/model/dataSource/DataBaseConection.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'/Pago-Comisiones-Web/model/interfaces/InterfaceSeller.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'/Pago-Comisiones-Web/model/transferObject/Seller.php';
  /**
   *
   */
  class SellerDAO implements InterfaceSeller
  {

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
        $seller = new Seller();
        $seller -> setId($result[0]['id_seller']);
        $seller -> setName($result[0]['name']);
        $seller -> setEmail($result[0]['email']);
        $seller -> setFunctions($result[0]['functions']);
      }
      $sql = 'SELECT name FROM Coordinator WHERE id_coordinator = :id_coordinator';
      $result = $dataBase -> executeQuery($sql, array(':id_coordinator'=>$result[0]['id_coordinator']));
      $seller -> setCoordinator($result[0]['name']);
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
      $password = '';
            $dataBase = new DataBaseConection();
            $sql = 'SELECT password FROM Sellers WHERE id_coordinator = :id_coordinator';
            $result = $dataBase -> executeQuery($sql, array(':id_coordinator'=>$idCoordinator));
            if($result != false){
              $password = $result[0]['password'];
            }
            return $password;
    }
    public function selectSellers()
    {
      $dataBase = new DataBaseConection();
      $sql = 'SELECT id_seller, name, email, contact_number, functions, type FROM Sellers
        JOIN Recruitment
        ON Sellers.id_recruitment = Recruitment.id_recruitment';

      $result = $dataBase -> executeQuery($sql);
      $sellers = array();
      if ($result != false) {
        for ($i=0; $i < count($result); $i++) {
          $seller = new Seller();
          $seller -> setId($result[$i]['id_seller']);
          $seller -> setName($result[$i]['name']);
          $seller -> setEmail($result[$i]['email']);
          $seller -> setFunctions($result[$i]['functions']);
          $seller -> setContactNumber($result[$i]['contact_number']);
          $seller -> setRecruitment($result[$i]['type']);
          array_push($sellers, $seller);
        }
      }
      return $sellers;
    }
    public function selectSellersActiveSeason()
    {
      $dataBase = new DataBaseConection();
      $sql = 'SELECT * FROM Sellers WHERE id_seller IN (
        SELECT id_seller FROM SeasonBySeller JOIN Seasons ON SeasonBySeller.id_season = Seasons.id_season WHERE active = 1)';

      $result = $dataBase -> executeQuery($sql);
      $sellers = array();
      if ($result != false) {
        for ($i=0; $i < count($result); $i++) {
          $seller = new Seller();
          $seller -> setId($result[$i]['id_seller']);
          $seller -> setName($result[$i]['name']);
          $seller -> setEmail($result[$i]['email']);
          $seller -> setFunctions($result[$i]['functions']);
          $seller -> setContactNumber($result[$i]['contact_number']);
          // $seller -> setRecruitment($result[$i]['type']);
          array_push($sellers, $seller);
        }
      }
      return $sellers;
    }
    public function insertPayment($seller)
    {
      $dataBase = new DataBaseConection();
      $sql = 'INSERT INTO payments (id_payment, base_balance, commission, id_seller, id_financial, calification) VALUES (NULL, :base_balance, :commission, :id_seller, :id_financial, NULL)';

      $result = $dataBase->executeInsert($sql, array(
        ':base_balance'=>$seller->getBaseBalance(),
        ':commission'=>$seller->getLastCommission(),
        ':id_seller'=>$seller->getId(),
        ':id_financial'=>1
      ));

      return $result;
    }

    public function selectPaymentNotifications($idSeller){
      $dataBase = new DataBaseConection();
      $sql = 'SELECT base_balance, commission FROM payments WHERE id_seller = :idSeller';
      $result = $dataBase -> executeQuery($sql, array(':idSeller'=>$idSeller));
      $notifications= null;
      if($result != false){
        $notifications = array();
        for ($i=0; $i =count($result) ; $i++) {
          $notification = '';
          $notification.='Saldo Base: '. $result[i]['base_balance'].'Comisión:' . $result[i]['commission'];
          array_push($notifications, $notification);
        }
      }
      return notifications;
    }

    public function updateCoordinatorSeller($idSeller, $idCoordinator)
    {
      $dataBase = new DataBaseConection();
      $sql =  'UPDATE Sellers SET id_coordinator = :id_coordinator WHERE id_seller = :id_seller';

      $result = $dataBase->executeUpdate($sql, array(
        ':id_coordinator'=>$idCoordinator,
        ':id_seller'=>$idSeller
      ));

      return $result;
    }
  }

?>
