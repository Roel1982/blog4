<?php

require_once("../includes/database.php");
$sql = "INSERT INTO nieuwsberichten (titel, auteur, bericht, datum)" .
       "VALUES ('$_POST[titel]','$_POST[auteur]','$_POST[blogtekst]', '$_POST[datum]')";



       if ($conn->query($sql) === TRUE) {
           echo "Blog succesvol geschreven naar database.";
       } else {
           echo "Error: " . $sql . "<br>" . $conn->error;
       }


?>
