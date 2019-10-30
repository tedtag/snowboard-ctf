<?php
   session_start();
   
   if(session_destroy()) {
      session_regenerate_id();
      header("location:login.php?PHPSESSID=".session_id() );
   }
?>