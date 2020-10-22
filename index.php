<?php 
  include 'includes/class-autoload.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
    $testObj = new DbTest();
    $testObj->getUsersStmt("Hamid","Ali");
    echo $testObj->setUsersStmt("Alex",66,22) ? "User Added": "User NOT added";
  ?>
</body>
</html>