<?php
session_start();
include ("../prog/prog.php");
$contact=new user;

$contact->ajoutecontact($_SESSION['id_user'],$_POST['nom'],$_POST['email'],$_POST['sujet'],$_POST['tel'],$_POST['message']);

header('Location:../accueil/accueil.php'); 












?>