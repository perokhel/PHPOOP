<?php

  class Dbh{
    /* Database credentials here are specific to my own machine.
       Please replace with credentials of your own configuration*/

    private $host = "localhost";
    private $user = "root";
    private $pwd = "";
    private $dbName = "test";
    
    protected function connect(){
      try{
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $pdo = new PDO($dsn,$this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;        
      }
      catch(Exception $e){
        echo $e->getMessage();
      }

    }
  }
?>
