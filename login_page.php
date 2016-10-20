<?php
  //require the file for connection to database
  include("connection_database.php");

  session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
      // username and password sent from form
      $myusername = mysqli_real_escape_string($con,$_POST['Username']);
      $mypassword = mysqli_real_escape_string($con,$_POST['Password']);
      $encryptpass=md5($mypassword);

      $sql = "SELECT ID_Emp FROM auth_table WHERE UserName = '$myusername' and PassWord = '$encryptpass'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;

         $sql1="select Status_Emp from auth_table where UserName='$myusername'";
         $result1 = mysqli_query($con, $sql1);
         if (mysqli_num_rows($result1) > 0) {
                // output data of each row
                while($row1 = mysqli_fetch_assoc($result1)) {
                          $valuee=$row1['Status_Emp'];
                  }
                  if($valuee==1){
                    header("location: admin_page.php");
                  }
                  else {
                    header("location: employee_page.php");
                  }
          } else {
                echo "0 results";
          }
          mysqli_close($con);

      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
