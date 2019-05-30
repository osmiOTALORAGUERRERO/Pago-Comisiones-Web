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

        $emails = $client->getEmail();
        $valor = count($emails);
        for ($i=0; $i < $valor ; $i++) {
          $sql = 'INSERT INTO Emails(id_email,email,nit_client) VALUES(NULL, :email, :nit_client)'
          $result2 = $dataBase -> executeInsert($sql, array(
              ':email'=>$email[$i],
              ':nit_client'=>$client->getNit()
          ));
        }

        $correos = $client->getContactNumber();
        $valor = count($correos);
        for ($i=0; $i < $valor ; $i++) {
          $sql = 'INSERT INTO ContactNumbers (id_contact_number, number, nit_client) VALUES (NULL, :number, :nit_client)'
          $result3 = $dataBase -> executeInsert($sql, array(
            ':number'=>$correos[$i],
            'nit_client'=>$client->getNit()
          ));
        }


        return $result.$result2.$result3;

      }

      public function searchByNit($nit)
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
        }
        else
        {
          return NULL;
        }

        $result1 = $dataBase -> executeQuery($sql1, array( ':nit_client'=>$nit ));

        if(is_null($result1) === false)
        {
          $email = "";
          $valor = count($result1);
          for ($i=0; $i < $valor ; $i++) {
            $email[$i] = $result1[$i]["email"];
          }
          $cliente->setEmail($email);
        }
        else
        {
          return NULL;
        }


        $result2 = $dataBase -> executeQuery($sql2, array( ':nit_client'=>$nit ));

        if(is_null($result2) === false)
        {
          $numeros = "";
          $valor = count($result2);
          for ($i=0; $i < $valor ; $i++) {
            $numeros[$i] = $result2[$i]["email"];
          }
          $cliente->setContactNumber($numeros);
        }
        else
        {
          return NULL;
        }

        return $cliente;
      }

  }

?>
