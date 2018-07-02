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

session_start();
if(!isset($_SESSION['username'])){
   header("Location:index.php");
}
?>



<div class="admincontainer">
<form action="verstuur.php" method="post" style= "text-align: center";>
<br>Auteur: <input type="text" name="auteur" value=""><br>
Datum: <input type="date" name="datum" value=""><br>
Titel: <input type="text" name="titel" value=""><br><br>
Blogbericht: <textarea name="blogtekst" rows="8" cols="40"></textarea><br>
<input type="submit" name="submit" value="verstuur">
</form>

</div>



  </body>
</html>

<?php
include '../includes/footer.php';
 ?>
