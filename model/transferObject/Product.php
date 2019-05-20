<?php

  /**
   *
   */
  class Product
  {
    private $id;
    private $product;
    private $price;
    private $category;
    function __construct()
    {

    }
    public function getId()
    {
      return $this->id;
    }
    public function setId($id='')
    {
      $this->id = $id;
    }
    public function getProduct()
    {
      return $this->product;
    }
    public function setProduct($product='')
    {
      $this->product = $product;
    }
    public function getPrice()
    {
      return $this->price;
    }
    public function setPrice($price='')
    {
      $this->price = $price;
    }
    public function getCategory()
    {
      return $this->category;
    }
    public function set($category='')
    {
      $this->category = $category;
    }
  }

?>
