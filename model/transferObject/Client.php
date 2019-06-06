<?php
  /**
   *
   */
  class Client
  {
    private $nit;
    private $name;
    private $email = array();
    private $contactNumber = array();
    private $direction;
    private $position;
    function __construct()
    {
      // code...
    }
    public function getNit()
    {
      return $this->nit;
    }
    public function setNit($nit='')
    {
      $this->nit = $nit;
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
    public function getDirection()
    {
      return $this->direction;
    }
    public function setDirection($direction='')
    {
      return $this->direction = $direction;
    }
    public function getPosition()
    {
      return $this->position;
    }
    public function setPosition($position='')
    {
      $this->position = $position;
    }
  }

?>
