<?php
  /**
   *
   */
  interface InterfaceSale
  {
    public function insertSale($sale);
    public function selectSalesBySeller($idSeller);
    public function selectSumTotalBySeller($idSeller);
    public function selectSalesNumber($idSeller);
    public function getLastNumberSale();
  }

?>
