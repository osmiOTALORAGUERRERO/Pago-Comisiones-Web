<?php
  /**
   *
   */
  interface InterfaceClient
  {
    public function insertClient($client); // Argumento de tipo objeto cliente
    public function selectClientByNit($nit); // retorna un objeto tipo cliente
    public function selectClients();
  }

?>
