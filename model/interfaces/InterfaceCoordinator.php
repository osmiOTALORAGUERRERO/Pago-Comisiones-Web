<?php
  /**
   *
   */
  interface InterfaceCoordinator
  {
    public function selectCoordinators();
    public function selectCoordinatorBySeller($idSeller);
    public function selectCoordinatorByEmail($email);
    public function selectPasswordById($id);

  }

?>
