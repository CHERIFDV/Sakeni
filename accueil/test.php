<?php
include ("../prog/prog.php");
$like=new user;
session_start();
$like->like(16,$_POST['id_bien']);

?>