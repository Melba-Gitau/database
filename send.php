<?php
//connect to database
require_once("connection.php");
//if the shout is not empty...
if($_POST['subject'] != "" && $_POST['name'] != ""){
    //add it to the database
    $result = mysqli_query($link, "INSERT INTO shouts(shout_text,name) VALUES ('".$_POST['subject']."','".$_POST['name']."')")
      or die( mysqli_error($link) );//if there was an error it will show us it was
      echo "Inserted Successfully";
} 

?>

