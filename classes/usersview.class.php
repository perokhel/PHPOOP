<?php 
  class UsersView extends Users {

    public function showUser($name){
      $results = $this->getUser($name);
      if($results){
        echo "Full Name: " . $results[0]['users_firstname'] . " " . 
        $results[0]['users_lastname'] . "<br>";
        echo "Date of Birth: " . $results[0]['users_dateofbirth'] . "<br>";
      }
      else echo "User not found<br>";
    }

  }
?>