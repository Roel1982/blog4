<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="../style.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
include '../includes/header.php';
include '../includes/navbar.php';
     ?>
<div class="admincontainer">
<form action="login.php" method="post" style= "text-align: center";>
<br>Username: <input type="text" id="username" name="username" value=""><br>
Password: <input type="password" id="password" name="password" value=""><br>
<input type="submit" name="submit" value="Login">
</form>

</div>



  </body>
</html>

<?php
include '../includes/footer.php';
 ?>
