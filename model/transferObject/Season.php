<?php
  /**
   *
   */
  class Season
  {
    private $id;
    private $season;
    private $numberSellers;
    private $porcentageProducts;
    private $month;
    function __construct()
    {
      // code...
    }
    public function getId()
    {
      return $this->id;
    }
    public function setId($id='')
    {
      $this->id = $id;
    }
    public function getSeason()
    {
      return $this->season;
    }
    public function setSeason($season='')
    {
      $this->season = $season;
    }
    public function getNumberSellers()
    {
      return $this->numberSellers;
    }
    public function setNumberSellers($numberSellers='')
    {
      $this->numberSellers = $numberSellers;
    }
    public function getPorcentageProducts()
    {
      return $this->porcentageProducts;
    }
    public function setPorcentageProducts($porcentageProducts='')
    {
      $this->porcentageProducts = $porcentageProducts;
    }
    public function getMonth()
    {
      return $this->Month;
    }
    public function setMonth($month='')
    {
      $this->month = $month;
    }
  }


?>
