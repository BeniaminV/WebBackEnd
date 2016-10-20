<?php
  //require the file for connection to database
  require "connection_database.php";

  // define variables and set to empty values
  //values for holding the error message
  $first_nameErr="";
  $last_nameErr="";
  $ageErr="";
  $id_cardErr="";
  $phone_numberErr="";
  $emailErr="";
  //variable for holding the data
  $first_name="";
  $last_name="";
  $age="";
  $id_card="";
  $phone_number="";
  $email="";

//check if all information input by client are correct
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  //First Name
   if (empty($_POST['First_Name']))
   {
     $first_nameErr = "First Name is required";
   }
   else
   {
     $first_name = test_input($_POST['First_Name']);
   }
   //end First Name

   //Last Name
   if (empty($_POST['Last_Name']))
   {
     $last_nameErr = "Last Name is required";
   }
   else
   {
     $last_name = test_input($_POST['Last_Name']);
   }
   //end Last Name

   //Age
   if (empty($_POST['Age']))
   {
     $ageErr = "Age is required";
   }
   else
   {
     $age=$_POST['Age'];
   }
   //end Age

   //ID Card
   if (empty($_POST['ID_Card']))
   {
     $id_cardErr = "Id Card is required";
   }
   else
   {
    $id_card=$_POST['ID_Card'];
   }
   //end Id Card

   //Phone Numeber
   if (empty($_POST['Phone_Number']))
   {
     $phone_numberErr = "Phone number is required";
   }
   else
   {
     $phone_number=$_POST['Phone_Number'];
   }
   //end Phone Number

   //E-mail
   if (empty($_POST['E-mail']))
   {
    $emailErr = "Email is required";
   }
   else
   {
    $email = test_input($_POST['E-mail']);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
      $emailErr = "Invalid email format";
    }
    else
    {
      $email=$_POST['E-mail'];
    }
  }
   //end E-mail

   //insert data into table
   $sql = "INSERT INTO client_table (First_Name,Last_Name,Birthday,Id_Card,Phone_Number,E_mail) VALUES('$first_name','$last_name','$age','$id_card','$phone_number','$email')";
   if ($con->query($sql) === TRUE)
  {
    echo "The process was done successfully <br>
          <a href='admin_page.html'>Home</a>";
  }
  else
  {
    echo "The process failed <br>
          <a href='admin_page.html'>Home</a> <br>";
    echo $first_nameErr;
    echo "<br>";
    echo $last_nameErr;
    echo "<br>";
    echo $ageErr;
    echo "<br>";
    echo $id_cardErr;
    echo "<br>";
    echo $phone_numberErr;
    echo "<br>";
    echo $emailErr;
  }
 }

function test_input($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
