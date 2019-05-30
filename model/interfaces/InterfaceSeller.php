<?php
  /**
   *
   */
  interface InterfaceSeller
  {
    public function insertSeller($seller, $password);
    public function selectSellerByEmail($email);
    public function selectPasswordById($id);
    public function selectSellersByCoordinator($idCoordinator);
    public function selectSellers();
    public function selectSellersActiveSeason();
    public function insertPayment($seller);
    public function updateCoordinatorSeller($idSeller, $idCoordinator);
  }

?>
