<?php
  class Person{
    private $firstName;
    private $lastName;
    private $age;

    public function __construct($fname,$lname,$age){
      $this->firstName = $fname;
      $this->lastName = $lname;
      $this->age = $age;
    }

    public function getName(){
      return $this->firstName . " " . $this->lastName;
    }
    
  }
?>