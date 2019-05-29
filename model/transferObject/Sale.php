<?php
  require_once 'Product.php';
  require_once 'Seller.php';
  /**
   *
   */
  class Sale
  {
    private $numberSale;
    private $saleDetail;
    private $date;
    private $totalSale;
    private $seller;
    private $client;
    private $soldProducts=array();
    function __construct(){}

      
    public function getNumberSale()
    {
      return $this->numberSale;
    }
    public function setNumberSale($numberSale='')
    {
      $this->numberSale = $numberSale;
    }
    public function getSaleDetail()
    {
      return $this->saleDetail;
    }
    public function setSaleDatail($saleDetail='')
    {
      $this->saleDetail = $saleDetail;
    }
    public function getDate()
    {
      return $this->date;
    }
    public function setDate($date='')
    {
      $this->date = $date;
    }
    public function getTotalSale()
    {
      return $this->totalSale;
    }
    public function setTotalSale($totalSale='')
    {
      $this->totalSale = $totalSale;
    }
    public function getSeller()
    {
      return $this->seller;
    }
    public function setSeller($seller='')
    {
      $this->seller = $seller;
    }
    public function getClient()
    {
      return $this->client;
    }
    public function setClient($client='')
    {
      $this->client = $client;
    }
    public function getSoldProducts()
    {
      return $this->soldProducts;
    }
    public function setSoldProducts($soldProducts=array())
    {
      $this->soldProducts = $soldProducts;
    }
  }


?>
