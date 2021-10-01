<?php

include ("../prog/prog.php");
if (isset($_GET['modif'])) {
   if (isset($_FILES['image']['name'])) {
    $nameimage=time().'_'.$_FILES['image']['name'];
    $image='../imagesuser/'.$nameimage;
    move_uploaded_file($_FILES['image']['tmp_name'],$image);
   }else {
       $image=null;
   }
    $creecompte=new user;
    $creecompte->modifeuser($_POST['first_name'],$_POST['last_name'],$_POST['email'],$_POST['phone'],$_POST['location'],$_POST['password'],$image);
    

}else {
    $nameimage=time().'_'.$_FILES['image']['name'];
$image='../imagesuser/'.$nameimage;
move_uploaded_file($_FILES['image']['tmp_name'],$image);
$creecompte=new user;

$creecompte->ajouteuser($_POST['first_name'],$_POST['last_name'],$_POST['email'],$_POST['phone'],$_POST['location'],$_POST['password'],$image);

}












?>