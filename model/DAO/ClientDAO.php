<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/Pago-Comisiones-Web/model/dataSource/DataBaseConection.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'/Pago-Comisiones-Web/model/interfaces/InterfaceClient.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'/Pago-Comisiones-Web/model/transferObject/Client.php';
  /**
   *
   */
  class ClientDAO implements InterfaceClient
  {
    public function insertClient($client)
    {
      $dataBase = new DataBaseConection();
      $sql = 'INSERT INTO Clients (nit_client, name) VALUES(:nit_client, :name)';
      $result = $dataBase -> executeInsert($sql, array(
        ':nit_client'=>$client->getNit(),
        ':name'=>$client->getName()
      ));
      $emails = $client->getEmail();
      $result2 = false;
      for ($i=0; $i < count($emails) ; $i++) {
        if(!empty($emails[$i])){
          $sql = 'INSERT INTO Emails(id_email,email,nit_client) VALUES(NULL, :email, :nit_client)';
          $result2 = $dataBase -> executeInsert($sql, array(
            ':email'=>$emails[$i],
            ':nit_client'=>$client->getNit()
          ));
        }
      }
      $numbers = $client->getContactNumber();
      $result3 = false;
      for ($i=0; $i < count($numbers) ; $i++) {
        $sql = 'INSERT INTO ContactNumbers (id_contact_number, number, nit_client) VALUES (NULL, :number, :nit_client)';
        $result3 = $dataBase -> executeInsert($sql, array(
          ':number'=>$numbers[$i],
          ':nit_client'=>$client->getNit()
        ));
      }
      return $result;
    }

    public function selectClientByNit($nit)
    {
      $dataBase = new DataBaseConection();
      $slq = 'SELECT * FROM Clients WHERE nit_client= :nit_client';
      $sql1 = 'SELECT * FROM Emails WHERE nit_client= :nit_client';
      $sql2 = 'SELECT * FROM ContactNumbers WHERE nit_client= :nit_client';
      $result = $dataBase -> executeQuery($sql, array( ':nit_client'=>$nit ));
      $cliente = new Client();
      if(is_null($result) === false)
      {
        $cliente->setNit($nit);
        $cliente->setName($result[0]["name"]);
        $client->setPosition($result[0]["position"]);
      } else {
        return NULL;
      }
      $result1 = $dataBase -> executeQuery($sql1, array( ':nit_client'=>$nit ));
      if(is_null($result1) === false) {
        $email = "";
        $valor = count($result1);
        for ($i=0; $i < $valor ; $i++) {
          $email[$i] = $result1[$i]["email"];
        }
        $cliente->setEmail($email);
      } else {
        return NULL;
      }
      $result2 = $dataBase -> executeQuery($sql2, array( ':nit_client'=>$nit ));
      if(is_null($result2) === false) {
        $numeros = "";
        $valor = count($result2);
        for ($i=0; $i < $valor ; $i++) {
          $numeros[$i] = $result2[$i]["email"];
        }
        $cliente->setContactNumber($numeros);
      } else {
        return NULL;
      }
      return $cliente;
    }
    public function selectClients($value='')
    {
     // code...
    }
  }

?>
