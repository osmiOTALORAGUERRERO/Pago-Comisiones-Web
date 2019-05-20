<?php
  require_once 'Seller.php';
  require_once 'Product.php';
  require_once 'Client.php';
  /**
   *
   */
  class Company
  {

    private $financial;
    private $coordinators = array();
    private $sellers = array();
    private $products = array();
    private $clients = array();
    private $seasons = array();
    function __construct()
    {

    }

    public function getFinancial()
    {
      return $this->financial;
    }
    public function setFinancial($financial='')
    {
      $this->financial = $financial;
    }
    public function getCoordinators()
    {
      return $this->coordinators;
    }
    public function setCoordinators($coordinators=array())
    {
      $this->coordinators = $coordinators;
    }
    public function getSellers()
    {
      return $this->sellers;
    }
    public function setSellers($sellers=array())
    {
      $this->sellers = $sellers;
    }
    public function getProducts()
    {
      return $this->products;
    }
    public function setProducts($products=array())
    {
      $this->products = $products;
    }
    public function getClients()
    {
      return $this->clients;
    }
    public function setClients($clients=array())
    {
      $this->clients = $clients;
    }
    public function getSeasons()
    {
      return $this->seasons;
    }
    public function setSeasons($seasons=array())
    {
      $this->seasons = $seasons;
    }
  }

?>
