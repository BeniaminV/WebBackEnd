<?php
  // varibilele de conectare
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "libraryapp";

  // Create connection
  $con = mysqli_connect($servername, $username, $password, $database);

  // verificarea conectiuni
  if(!$con)
  {
    die("Fail to connect to Database");
  }
?>
