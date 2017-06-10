<?php
   include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <img src="http://www.teamrubiconuk.org/wp-content/themes/TeamRubicon/assets/img/TR-Logo2x.png">
    
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/justified-nav.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <div class="masthead">
        <h3 class="text-muted">Team Rubicon - Terminal</h3>
        
        <p align="right"><a href = "logout.php">Sign Out</a></p>
        
        <?php
            error_reporting(0);
            include("check.php");
        ?>
        
        <nav>
        <?php
            if ($loginst == 1)
            {
                ?>
                <ul class="nav nav-justified">
                    <li><a href="index.html">About</a></li>
                    <li><a href="volunteer.html">Training</a></li>
                    <li><a href="operations.html">Operations</a></li>
                    <li class="active"><a href="profile.php">Profile</a></li>      
                </ul>
            
        <?php } else
        {
            ?>
          <ul class="nav nav-justified">
            <li><a href="index.html">About</a></li>
            <li><a href="volunteer.html">Volunteer</a></li>
            <li><a href="operations.html">Operations</a></li>
            <li><a href="signup.html">Sign Up</a></li>
          </ul>
        <?php } 
        error_reporting(1);
        ?>
        </nav>
      </div>
      <br>

      <!-- Jumbotron -->
      <div> <!--class="jumbotron"-->
        <h1>Operations</h1>
      </div>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
       </div>
      </div>

      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; 2017 Code for Good - Team 8</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
