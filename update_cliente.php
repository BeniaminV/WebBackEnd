<?php
//require the file for connection to database
require "connection_database.php";

if (!empty($_POST))
{
  $id=$_POST['Id'];
  $firstn=$_POST['fname'];
  $lastn=$_POST['lname'];
  $age=$_POST['Birthday'];
  $card=$_POST['card'];
  $phone=$_POST['phone'];
  $mail=$_POST['mail'];

  $sql = "UPDATE client_table SET First_Name='$firstn',Last_Name='$lastn',Birthday='$age',Id_Card='$card',Phone_Number='$phone',E_mail='$mail' WHERE ID_Cliente='$id'";

  if ($con->query($sql) === TRUE)
  {
    echo "The process was done successfully <br>
          <a href='admin_page.html'>Admin Page</a>";
  }
  else
  {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
    echo "The process failed <br>
          <a href='view_edit_cliente.php'>Add Again</a>";
  }
}
else
{
  echo "You need to input something";
}
?>
 ?>
