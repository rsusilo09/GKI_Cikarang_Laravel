<?php
  $conn = new mysqli_connect("localhost", "gkicikar_admin", "admin1234");

  if(!conn){
    die("Connection failed: " . mysqli_connect_error());
  }
  
?>
