<?php


//query uitvoeren
if (isset($_POST['submit'])) {
  if(empty($_POST['username']) || empty($_POST['password'])){
    $error = "Gebruikersnaam of wachtwoord onjuist";
  }
else {
  $user=$_POST['username'];
  $pass=$_POST['password'];


  //aanroepen database
  include "../includes/database.php";

  //query van/naar database
  $query = mysqli_query($conn, "SELECT * FROM users WHERE password='$pass' AND username='$user'");

  $rows = mysqli_num_rows($query);
  if($rows == 1) {
    header("Location: post.php");
      }
  else {
   echo $error = "Gebruikersnaam of wachtwoord is niet juist";
  }


//sessie variabelen aanmaken
 $_SESSION["username"] = "$user";

 mysqli_close($conn);
}

}


?>
