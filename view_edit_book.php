<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>View Books</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
       .table_view{
         margin: auto;
         width: 80%;
         border: 3px solid white;
         padding: 10px;
       }
    </style>
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <!--<h3 class="masthead-brand">Library App</h3>-->
              <nav>

              </nav>
            </div>
          </div>

          <div class="inner cover">
            <?php
            mysql_connect('localhost','root','') or die(mysql_error());
            mysql_select_db('libraryapp')  or die(mysql_error());
            $id = $_POST['ID'];
            $query=mysql_query("select ID_Book,Title_Book,Authr_Book,Publisher_Book,Year_Book,Type_Book,Price_Book,Status_Book from book_table where ID_Book='$id'")  or die(mysql_error());
            echo'<table border="3" class="table_view">
                    <th>Id</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Publisher</th>
                    <th>Year</th>
                    <th>Type</th>
                    <th>Price</th>';
            while($res=mysql_fetch_array($query))
            {
              echo'<tr>
                        <td>'.$res['ID_Book'].'</td>
                        <td>'.$res['Title_Book'].'</td>
                        <td>'.$res['Authr_Book'].'</td>
                        <td>'.$res['Publisher_Book'].'</td>
                        <td>'.$res['Year_Book'].'</td>
                        <td>'.$res['Type_Book'].'</td>
                        <td>'.$res['Price_Book'].'</td>
                  </tr>';
           }
           echo'</table>';
            ?>
            <h1>Edit Panel</h1>
            <div class="form-b">
              <form action="update_book.php" method="post" >
                <fieldset class="form-group">
                  <input type="text" name="Id" class="form-control" id="formGroupExampleInput" placeholder="Insert id of the book">
                </fieldset>
                <fieldset class="form-group">
                  <input type="text" name="Title" class="form-control" id="formGroupExampleInput" placeholder="Edit Title">
                </fieldset>
                <fieldset class="form-group">
                  <input type="text" name="Author" class="form-control" id="formGroupExampleInput2" placeholder="Edit Author">
                </fieldset>
                <fieldset class="form-group">
                  <input type="text" name="Publisher" class="form-control" id="formGroupExampleInput2" placeholder="Edit Publisher">
                </fieldset>
                <fieldset class="form-group">
                  <input type="text" name="Year" class="form-control" id="formGroupExampleInput2" placeholder="Edit Year">
                </fieldset>
                <fieldset class="form-group">
                  <input type="text" name="Type" class="form-control" id="formGroupExampleInput2" placeholder="Edit Type">
                </fieldset>
                <fieldset class="form-group">
                  <input type="text" name="Price" class="form-control" id="formGroupExampleInput2" placeholder="Edit Price">
                </fieldset>
                <input  class="btn btn-lg btn-default" type="submit" name="submit" value="Edit">
              </form>
            </div>
          </div>
          <br>
          <div class="mastfoot">
            <div class="inner">
              <p>Developed by Beni Voian</p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
