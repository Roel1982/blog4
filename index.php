<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <title>Welkom op mijn blog</title>
  </head>
  <body>

<?php
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/footer.php';
require_once ("includes/database.php");
 ?>

 <!--menu items aanroepen-->
<!-- einde menu items aanroepen-->

<div class="blogcontainer">
  <div class="innerblog">

  <h1>
  <?php

  $sql = "SELECT titel, auteur, bericht FROM nieuwsberichten ORDER BY titel DESC";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          echo "<h1>" .$row["titel"]. "<br>"."</h1>";
          echo "<div class='auteur'>" .  " " .$row["auteur"]. "<br>"."</div>";
          echo "<div class='bericht'>" .  " " .$row["bericht"]. "<br>"."</div>";
      }
  } else {
      echo "0 results";
  }


   ?>


  </div>



  
  </div>
<?php
include 'includes/sidebar.php';
?>






  </body>
</html>
