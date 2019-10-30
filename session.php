<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select email from users where email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql);
   
//    $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php?PHPSESSID=".session_id() );
      die();
   }
?>