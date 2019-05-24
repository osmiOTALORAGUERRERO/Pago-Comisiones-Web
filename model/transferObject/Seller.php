<?php
  /**
   *
   */
  class Seller
  {
    private $id;
    private $name;
    private $email;
    private $contactNumber;
    private $functions;
    private $recruitment;
    private $activeSeason;
    private $coordinator;
    private $ventas = array();
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
    public function getName()
    {
      return $this->name;
    }
    public function setName($name='')
    {
      $this->name = $name;
    }
    public function getEmail()
    {
      return $this->email;
    }
    public function setEmail($email='')
    {
      $this->email = $email;
    }
    public function getContactNumber()
    {
      return $this->contactNumber;
    }
    public function setContactNumber($contactNumber='')
    {
      $this->contactNumber = $contactNumber;
    }
    public function getFunctions()
    {
      return $this->functions;
    }
    public function setFunctions($functions='')
    {
      $this->functions = $functions;
    }
    public function getRecruitment()
    {
      return $this->recruitment;
    }
    public function setRecruitment($recruitment='')
    {
      $this->recruitment = $recruitment;
    }
    public function getActiveSeason()
    {
      return $this->activeSeason;
    }
    public function setActiveSeason($activeSeason='')
    {
      $this->activeSeason = $activeSeason;
    }
    public function getCoordinator()
    {
      return $this->coordinator;
    }
    public function setCoordinator($coordinator='')
    {
      $this->coordinator = $coordinator;
    }
    public function getVentas()
    {
      return $this->ventas;
    }
    public function setVentas($ventas=array())
    {
      $this->ventas = $ventas;
    }
  }

?>
