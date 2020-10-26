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
    $usersObj->showUser("newton");

    $usersObj2 = new UsersContr();
    echo $usersObj2->createUser("Joseph","Thomson", "1856-12-18") ? 
    "User added successfully": "User Addition error.";
  ?>
</body>
</html>