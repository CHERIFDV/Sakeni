<?php 
 session_start();
 include ("../prog/prog.php");
  $logout=new user;
  $logout->logout();
 session_destroy();
 header('location:login.php');
 ?>