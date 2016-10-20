<?php
  //require the file for connection to database
  require "connection_database.php";

  // define variables and set to empty values
  //values for holding the error message
  $first_name_employeeErr="";
  $last_name_employeeErr="";
  $username_employeeErr="";
  $password_employeeErr="";
  $repassword_employeeErr="";
  $status_employeeErr="";
  // define variables and set to empty values
  $first_name_employee="";
  $last_name_employee="";
  $username_employee="";
  $password_employee="";
  $repassword_employee="";
  $status_employee="";

//check if all information input by client are correct
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  //First Name
   if (empty($_POST['First_Name_Employee'])){
     $first_name_employeeErr = "First Name is required";
   }
   else{
     $first_name_employee = test_input($_POST['First_Name_Employee']);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$first_name_employee)) {
       $first_name_employeeErr = "Only letters and white space allowed";
     }
   }
   //end First Name

   //Last Name
   if (empty($_POST['Last_Name_Employee'])){
     $last_name_employeeErr = "Last Name is required";
   }
   else{
     $last_name_employee = test_input($_POST['Last_Name_Employee']);
     if (!preg_match("/^[a-zA-Z ]*$/",$last_name_employee)) {
       $last_name_employeeErr = "Only letters and white space allowed";
     }
   }
   //end Last Name

   //Username
   if (empty($_POST['Username'])){
     $username_employeeErr = "Username is required";
   }
   else{
     $username_employee = test_input($_POST['Username']);
     if (!preg_match("/^[a-zA-Z ]*$/",$username_employee)) {
       $username_employeeErr = "Only letters and white space allowed";
     }
   }
   //end Username

   //Password
   if (empty($_POST['Password'])){
     $password_employeeErr = "Password is required";
   }
   else{
     $password_employee = test_input($_POST['Password']);
   }
   //end Password

   //Re-Enter the Password
   if (empty($_POST['Re_Password'])){
     $repassword_employeeErr = "Password is required";
   }
   else{
     if($password_employee===$_POST['Password']){
        $repassword_employee = test_input($_POST['Re_Password']);
        $hash = md5($repassword_employee);
     }
   }
   //end the Re-Enter Password

   //Status_Emp
   if (empty($_POST['Status_Employee'])){
     $status_employeeErr = "Status is required";
   }
   else{
     $status_employee=$_POST['Status_Employee'];
     }
   }
   //end Status_Emp

   //insert data into table
   $sql = "INSERT INTO auth_table (First_Name,Last_Name,UserName,PassWord,Status_Emp) VALUES('$first_name_employee','$last_name_employee','$username_employee','$hash','$status_employee')";
   if ($con->query($sql) === TRUE)
  {
    echo "The process was done successfully <br>
          <a href='admin_page.html'>Home</a>";
  }
  else
  {
    echo "The process failed <br>
          <a href='admin_page.html'>Home</a> <br>";
    echo $first_name_employeeErr;
    echo "<br>";
    echo $last_name_employeeErr;
    echo "<br>";
    echo $username_employeeErr;
    echo "<br>";
    echo $password_employeeErr;
    echo "<br>";
    echo $repassword_employeeErr;
    echo "<br>";
    echo $status_employeeErr;
  }

function test_input($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
