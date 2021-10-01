<?php
include ("../prog/prog.php");
$fav=new user;
session_start();
$fav->favori($_SESSION['id_user'],$_POST['id_bien']);

?>