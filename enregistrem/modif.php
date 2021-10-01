<?php
 
 include ("../prog/prog.php");
 $creeannonce=new user;
session_start();
if (!empty($_FILES["filesf"]["name"])) {
    $image=$file_namef="../imagesbien/".time().$_FILES["filesf"]["name"][0];
    move_uploaded_file($file_tmp=$_FILES["filesf"]["tmp_name"][0],"../imagesbien/".$file_namef);
}

$images[4];
 extract($_POST);
$error=array();
$extension=array("jpeg","jpg","png","gif");
echo "ok";
foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name) {
    $file_name=time().$_FILES["files"]["name"][$key];
    $file_tmp=$_FILES["files"]["tmp_name"][$key];
    $ext=pathinfo($file_name,PATHINFO_EXTENSION);
    echo "ok2";
    if(in_array($ext,$extension)) {
        if(!file_exists(" ../imagesbien/".$file_name)) {
        move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"../imagesbien/".$file_name);
        echo $images[$key]="../imagesbien/".$file_name;
        }
        else {
            $filename=basename($file_name,$ext);
            $newFileName=$filename.time().".".$ext;
            move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"../imagesbien/".$newFileName);
            
        }
    }
    else {
        array_push($error,"$file_name, ");
    }
    
}
if (empty($images)) {
    $images=[];
  }
 $creeannonce->updateannense($_POST['tr'],$_POST['etat'],$_POST['typeb'],$_POST['address'],$_POST['region'], $_POST['ville'],$_POST['Meublé'],$_POST['Garage'],$_POST['jardin'],$_POST['piscine'],$_POST['telephone'],$_POST['titre'],$_POST['desc'],$_POST['prix'],$image,$images,$_GET['id_bien'],$_POST['chambre']);
 header('location:/accueil/accueil.php');


?>