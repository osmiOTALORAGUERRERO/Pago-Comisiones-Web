<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'Pago-Comisiones-Web/model/dataSource/DataBaseConection.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'Pago-Comisiones-Web/model/interfaces/InterfaceClient.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'Pago-Comisiones-Web/model/transferObject/Client.php';
  /**
   *
   */
  class ClientDAO implements InterfaceClient
  {
    function __construct(){}

      public function inserClient($client)
      {
        $dataBase = new DataBaseConection();
        $slq = 'INSERT INTO Clients (nit_client, name, position) VALUES(:nit_client, :name, :position)';

        $result = $dataBase -> executeInsert($sql, array(
          ':nit_client'=>$client->getNit(),
          ':name'=>$client->getName(),
          ':position'=>$client->getPosition()
        ));

        $sql = 'INSERT INTO Emails(id_email,email,nit_client) VALUES(NULL, :email, :nit_client)'
        $result2 = $dataBase -> executeInsert($sql, array(
            ':email'=>$client->getEmail()
            ':nit_client'=>$client->getNit()
        ));

        $sql = 'INSERT INTO ContactNumbers (id_contact_number, number, nit_client) VALUES (NULL, :number, :nit_client)'
        $result3 = $dataBase -> executeInsert($sql, array(
          ':number'=>$client->getEmail(),
          'nit_client'=>$client->getNit()
        ));

        return $result.$result2.$result3;

      }

  }

?>
