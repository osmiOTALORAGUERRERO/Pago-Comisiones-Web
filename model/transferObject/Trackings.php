<?php
  /**
   *
   */
  class Tracking
  {
    private $id;
    private $name;
    private $description;
    private $client;
    private $seller;
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
    public function getName()
    {
      return $this->name;
    }
    public function setName($name='')
    {
      $this->name = $name;
    }
    public function getDescription()
    {
      return $this->description;
    }
    public function setDescription($description='')
    {
      $this->description = $description;
    }
    public function getClient()
    {
      return $this->client;
    }
    public function setClient($client='')
    {
      $this->client = $client;
    }
    public function getSeller()
    {
      return $this->seller;
    }
    public function setSeller($seller='')
    {
      $this->seller = $seller;
    }
  }

?>
