<link href="Profile.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php
session_start();
require_once("../navbar/navbar.php");
$compte=$user->getcompte();
?>
<br><br><br><br><br><br><br><br><br><br><br><br>
<div class="container">    
                  <div class="row">
                      <div class="panel panel-default">
                      <div class="panel-heading">  <h4 >User Profile</h4></div>
                       <div class="panel-body">
                      <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                       <img alt="User Pic" <?php    if (1==1) { echo "src='".$compte['imageu']."'"; } else{echo "src='https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg'"; }   ?>  id="profile-image1" class="img-circle img-responsive"> 
                     
                 
                      </div>
                      <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
                      <a href="http://localhost:8080/creecompte/creecompte.php?mdif=1" style="position: absolute;right: 0;"><span class="fa fa-cog" style="width:20px;"></span>modify</a>
                          <div class="container" >
                            <h2><?php echo $compte['first_name']." ".$compte['last_name']; ?></h2>
                            <p></p>
                          
                           
                          </div>
                           <hr>
                          <ul class="container details" >
                            <li><p><span class="glyphicon glyphicon-user one" style="width:50px;"></span><?php echo $compte['phone']; ?></p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span><?php echo $compte['email']; ?></p></li>
                          </ul>
                          <hr>
                          <div class="col-sm-5 col-xs-6 tital " ><?php echo $compte['date_create_compte']; ?></div>
                          
                      </div>
                </div>
            </div>
            </div>
        <?php
///footer
require_once("../footer/footer.php");
?>   