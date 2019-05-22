<?php
  /**
   *
   */
  interface InterfaceSeller
  {
    public function insertSeller($seller, $password);
    public function selectSellerByEmail($email);
    public function selectSellersByCoordinator($idCoordinator);
    public function selectSellers();
  }

?>
