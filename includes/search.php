<?php

require_once ("database.php");

if(isset($_POST['search'])) {
    $search = $_POST['search'];
    $search = preg_replace("#[^0-9a-z]i#","", $search);

    $query = mysqli_query($conn, "SELECT * FROM nieuwsberichten WHERE Bericht LIKE '%$search%'") or die ("Could not search");
    $count = mysqli_num_rows($query);

    if($count == 0){
      $output = "There was no search results!";

    }else{

      while ($row = mysqli_fetch_array($query)) {

        $bericht = $row ['Bericht'];


        $output ='<div> '.$bericht.'</div>';

      }
    }
  }

print ("$output");

?>
