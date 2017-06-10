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

    <title>Team Rubicon - Terminal</title>

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
                    <li><a href="training.html">Training</a></li>
                    <li><a href="operations.html">Operations</a></li>
                    <li><a href="signup.html">Profile</a></li>      
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
error_reporting(1);        ?>
        </nav>
      </div>
      <br>

<?php
    include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT volunteer_id FROM Volunteers WHERE user_name = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("$myusername");
         $_SESSION['myusername']="myusername";
         $_SESSION['login_user'] = $myusername;
         
         header("location: profile.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      ?>
      Echo
      <?php
      }
   }
?>
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px">
               <?php// echo $error;
               ?>
               </div>
					
            </div>
				
         </div>
			
      </div>

   </body>
<!-- Site footer -->
      <footer class="footer">
        <p>&copy; 2017 Code for Good - Team 8</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
