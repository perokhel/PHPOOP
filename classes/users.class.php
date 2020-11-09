<?php 
  class Users extends Dbh {

    protected function getUser($firstname){
      $sql = "SELECT * FROM users WHERE users_firstname = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$firstname]);

      $results = $stmt->fetchAll();
      return $results;
    }

    protected function setUser($firstname, $lastname, $dob){

      if($this->doesUserExist($firstname,$lastname,$dob))
        return "Error001";

      $sql = 'INSERT INTO users(users_firstname,users_lastname,users_dateofbirth)
               VALUES(?,?,?)';
      $stmt = $this->connect()->prepare($sql);
      return $stmt->execute([$firstname,$lastname,$dob]) ? true: false;
    }

    protected function doesUserExist($firstname, $lastname, $dob){

      $results = $this->getUser($firstname);
      foreach($results as $record){
        if(strcmp($record['users_firstname'], $firstname) == 0)
          if(strcmp($record['users_lastname'], $lastname) == 0)
            if(strtotime($record['users_dateofbirth']) == strtotime($dob))
              return true;
      }
      return false;
    }
  }
?>