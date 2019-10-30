<?php
   define('DB_SERVER', 'localhost:3306');
   define('DB_USERNAME', 'snowboard');
   define('DB_PASSWORD', 'password1234');
   define('DB_DATABASE', 'snowboard_ctf');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>