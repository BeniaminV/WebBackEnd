<?php
  //require the file for connection to database
  require "connection_database.php";

  if (!empty($_POST))
	{
		$Title=$_POST['TitleBook'];
    $Author=$_POST['AuthorBook'];
    $Publisher=$_POST['PublisherBook'];
    $Year=$_POST['YearBook'];
    $Type=$_POST['TypeBook'];
    $Price=$_POST['PriceBook'];
    $Status=$_POST['StatusBook'];

		$sql = "INSERT INTO book_table (Title_Book,Authr_Book,Publisher_Book,Year_Book,Type_Book,Price_Book,Status_Book) VALUES('$Title','$Author','$Publisher','$Year','$Type','$Price','$Status')";

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
