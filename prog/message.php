<?php
include ("../prog/prog.php");
$msg=new user;
session_start();
$cont=$msg->getmessagenull();
echo json_encode(count($cont));
?>