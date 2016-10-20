<!DOCTYPE html>
<html lang="en">
<?php
   include('session.php');
?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Admin</title>

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
  </head>

  <body>

    <div class="site-wrapper">
      <p>Account: <?php echo $login_session; ?> </p>
      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Library App</h3>

              <nav>

              </nav>
            </div>
          </div>

          <div class="inner cover">
            <h1>Admin Panel</h1>
          <br>
            <p class="lead lead2">
              <a href="add_book.html" class="btn btn-lg btn-default" target="_blanklink">Add Book</a>
              <a href="register_cliente.html" class="btn btn-lg btn-default" target="_blanklink">Add Client</a>
              <a href="register_employee.html" class="btn btn-lg btn-default" target="_blanklink">Add Employee</a>
              <a href="view_book.php" class="btn btn-lg btn-default" target="_blanklink">View Books</a>
              <a href="view_client.php" class="btn btn-lg btn-default" target="_blanklink">View Client</a>
              <a href="edit_book.html" class="btn btn-lg btn-default" target="_blanklink">Edit Book</a>
              <a href="edit_client.html" class="btn btn-lg btn-default" target="_blanklink">Edit Client</a>
              <a href="sell_laon_book.html" class="btn btn-lg btn-default" target="_blanklink">Sell/Loan Book</a>
              <a href="logout.php" class="btn btn-lg btn-default">Sign Out</a>
            </p>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>Developed by Beni Voian & Designed by Vadim Rob</p>
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
