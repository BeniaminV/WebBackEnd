<?php
//require the file for connection to database
require "connection_database.php";

if (!empty($_POST))
{
  $id=$_POST['Id'];
  $Title=$_POST['Title'];
  $Author=$_POST['Author'];
  $Publisher=$_POST['Publisher'];
  $Year=$_POST['Year'];
  $Type=$_POST['Type'];
  $Price=$_POST['Price'];

  $sql = "UPDATE book_table SET Title_Book='$Title',Authr_Book='$Author',Publisher_Book='$Publisher',Year_Book='$Year',Type_Book='$Type',Price_Book='$Price' WHERE ID_Book='$id'";

  if ($con->query($sql) === TRUE)
  {
    echo "The process was done successfully <br>
          <a href='admin_page.html'>Admin Page</a>";
  }
  else
  {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
    echo "The process failed <br>
          <a href='view_edit_book.php'>Add Again</a>";
  }
}
else
{
  echo "You need to input something";
}
?>
 ?>
