<?php
  //require the file for connection to database
  require "connection_database.php";

  if (!empty($_POST))
	{
		$val1=$_POST['idClient'];
    $val2=$_POST['idBook'];
    $val3=$_POST['Bought'];
    $val4=$_POST['Borrowed'];
    $val5=$_POST['BorrowedReturn'];
    $val6=$_POST['Info'];
    $val7=$_POST['ref'];

		$sql = "INSERT INTO loan_table (ID_Client_,ID_Example_Book,Bought_Date,Borrowed_Date,Borrowed_Date_Return,Info,Reference) VALUES('$val1','$val2','$val3','$val4','$val5','$val6','$val7')";

    if ($con->query($sql) === TRUE)
    {
      echo "The process was done successfully <br>
            <a href='admin_page.html'>Admin Page</a>";
    }
    else
    {
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
      echo "The process failed <br>
            <a href='add_book.html'>Add Again</a>";
    }
	}
  else
  {
    echo "You need to input something";
  }
 ?>
