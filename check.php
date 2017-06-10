<?php
include('config.php');
//error_reporting(0);
session_start();
$loginst = 0;
if ($_SESSION['login_user']){ 

$user_check = $_SESSION['login_user'];

$ses_sql = mysqli_query($db,"SELECT user_name FROM Volunteers WHERE user_name='$user_check'");

$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_user=$row['user_name'];

if(!empty($login_user)) 
{
   $loginst = 1;
}

}

?>