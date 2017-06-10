<?php
   define('DB_SERVER', '52.214.176.37');
   //define('DB_SERVER', '172.31.27.65');
   //define('DB_SERVER', '127.0.0.1');
   define('DB_USERNAME', 'team8');
   define('DB_PASSWORD', 'password');
   define('DB_DATABASE', 'team_8');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>