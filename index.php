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

    $usersObj = new UsersView();
    $usersObj->showUser("John");

    $usersObj2 = new UsersContr();
    $report = $usersObj2->createUser("Joseph","Thomson", "1856-12-18");
    if(!$report)
      echo "User Couldn't be added";
    else
      if(strcmp($report,"Error001") == 0)
        echo "User Already Exists";
      else
        echo "User added successfully";
  ?>
</body>
</html>