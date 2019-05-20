<?php
  /**
   *
   */
  class Coordinator
  {
    private $id;
    private $name;
    private $email;
    private $contactNumber;
    private $sellers = array();
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
    public function getSellers()
    {
      return $this->sellers;
    }
    public function setSeller($sellers=array())
    {
      $this->sellers = $sellers;
    }
  }

?>
