<?php
session_start();
include ("../prog/prog.php");
$disc=new user;
$disc->ajoutemessage($_SESSION['id_bien'],$_POST['message'],$_SESSION['id_user'],$_SESSION['is_res']);
?>