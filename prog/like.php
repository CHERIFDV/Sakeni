<?php
include ("../prog/prog.php");
$like=new user;
session_start();
$like->like($_SESSION['id_user'],$_POST['id_bien']);

?>