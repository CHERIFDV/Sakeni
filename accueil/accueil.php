<head>

<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Aclonica" />
<link href="accueil.css" rel="stylesheet">

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="accueil.js"></script> 


</head>

<!------ Include the above in your HEAD tag ---------->
<?php
session_start();
require_once("../navbar/navbar.php");
$accueil=$user;
$list=$accueil->getliset1();
?>


<div><center><H1 class="ch">SAKENI </H1></center>

<br><br><br><br><br><br><br><br><br>
</div>
                    <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
                   
<div class="accordian">
    <ul>
		<li>
			<div class="image_title">
				<a href="../afichelisteannonce/liste.php?Vente=Vente"> <i class="fa fa-home"></i> VENTE</a>
			</div> 
			<a href="../afichelisteannonce/liste.php?Vente=Vente">
				<img src="../imagesakeni/vente.jpeg" style="width: 640px;height: 320px;"/>
			</a>
		</li>
		<li>
			<div class="image_title">
				<a href="../afichelisteannonce/liste.php?Location=Location"><i class="fa fa-handshake-o" aria-hidden="true"></i>LOCATION</a>
			</div>
			<a href="../afichelisteannonce/liste.php?Location=Location">
				<img src="../imagesakeni/location.jpeg" style="width: 640px;height: 320px;"/>
			</a>
		</li>
		<li>
            
			<div class="image_title">

				<a href="../afichelisteannonce/liste.php?imneuf=IMMOBILIER NEUF"><i class="fa fa-building"></i> IMMOBILIER NEUF</a>
			</div>
			<a href="../afichelisteannonce/liste.php?imneuf=IMMOBILIER NEUF">
				<img src="../imagesakeni/imublen.jpg" style="width: 640px;height: 320px;"/>
			</a>
		</li>
		<li>
			<div class="image_title">
				<a href="../afichelisteannonce/liste.php?Locationvacance=Location vacance"><i class="fa fa-sun-o" aria-hidden="true"></i> LOCATION VACANCES <i class="fa fa-snowflake-o" aria-hidden="true"></i></a>
			</div>
			<a href="../afichelisteannonce/liste.php?Locationvacance=Location vacance">
				<img src="../imagesakeni/vacance.jpg" style="width: 640px;height: 320px;"/>
			</a>
		</li>
		
	</ul>
</div>



                     <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
                    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
<script type="text/javascript" src="http://yourjavascript.com/21051171187/jquery-touchswipe-min.js"></script>
<script type="text/javascript" src="http://yourjavascript.com/11873115711/jquery-1-12-4-min.js"></script>
<script type="text/javascript" src="http://yourjavascript.com/71712155041/responsive-bootstrap-carousel.js"></script>
<div class="container">
   <div class="row">
      <div id="adv_team_4_columns_carousel" class="carousel slide four_shows_one_move team_columns_carousel_wrapper" data-ride="carousel" data-interval="2000" data-pause="hover">
         <!--========= Wrapper for slides =========-->
         <div class="carousel-inner" role="listbox">
            <!--========= 1st slide =========-->
            <div class="item">
            <?php               
            echo "<div class='col-xs-12 col-sm-6 col-md-3 team_columns_item_image '>";
            echo "<a href='../pdescussion/produitdescussion.php?bien=".$list[0]['id_bien']."' > <img src='".$list[0]['imagebfont']."' style='width: 250px;  height: 150px;' alt='slider 01'>";
            echo "<div class='team_columns_item_caption'>";
            echo    "<h4>".$list[0]['Transaction']."</h4> <hr>";
            echo  "<h5>".$list[0]['Titre']."</h5></div> </a></div>";     

                   for ($i=1; $i <4 ; $i++) { 

                   echo "<div class='col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-".$i."'>";
                   echo "<a href='../pdescussion/produitdescussion.php?bien=".$list[$i]['id_bien']."' > <img src='".$list[$i]['imagebfont']."' style='width: 250px;  height: 150px;' alt='slider 01'>";
                   echo "<div class='team_columns_item_caption'>";
                   echo    "<h4>".$list[$i]['Transaction']."</h4> <hr>";
                   echo  "<h5>".$list[$i]['Titre']."</h5></div> </a></div>";
                       
                   }           
            ?>
               

            </div>
            <!--========= 2nd slide =========-->
            <div class="item active">
            <?php                                    
                   for ($i=5; $i <9 ; $i++) { 
             
                   echo "<div class='col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-".$i."'>";
                   echo "<a href='../pdescussion/produitdescussion.php?bien=".$list[$i]['id_bien']."' > <img src='".$list[$i]['imagebfont']."' style='width: 250px;  height: 150px;' alt='slider 02'>";
                   echo "<div class='team_columns_item_caption'>";
                   echo    "<h4>".$list[$i]['Transaction']."</h4> <hr>";
                   echo  "<h5>".$list[$i]['Titre']."</h5></div> </a></div>";
                       
                   }           
            ?>
               
            </div>
            
            
         </div>
         <!--======= Navigation Buttons =========-->
         <!--======= Left Button =========-->
         <a class="left carousel-control team_columns_carousel_control_left adv_left" href="#adv_team_4_columns_carousel" role="button" data-slide="prev">
         <span class="fa fa-angle-left team_columns_carousel_control_icons" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
         </a>
         <!--======= Right Button =========-->
         <a href="">&nbsp;&nbsp;&nbsp;&nbsp;</a>
         <a class="right carousel-control team_columns_carousel_control_right adv_right" href="#adv_team_4_columns_carousel" role="button" data-slide="next">
         <span class="fa fa-angle-right team_columns_carousel_control_icons" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
         </a>
      </div>
   </div>
</div>

               <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
		
             
               <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />


              
<div class="container">
    <h3 class="h3"> </h3>
    <div class="row">
    <?php 
    for ($i=10; $i <18; $i++) { 
    echo"<div class='col-md-3 col-sm-6'>";
    echo"<div class='product-grid4'>";
    echo"<div class='product-image4'>";
    echo" <a href='#'>";
    echo"<img class='pic-1' src='".$list[$i]['imagebfont']."'>";
    echo"<img class='pic-2' src='".$list[$i]['image1']."'>";
    echo" </a>";
    echo"<ul class='social'>";
    echo"<li><a href='../pdescussion/produitdescussion.php?bien=".$list[$i]['id_bien']."' data-tip='Quick View'><i class='fa fa-eye'></i></a></li>";
    echo"<li><a idbien='".$list[$i]['id_bien']."' class='favori' data-tip='Add to Wishlist' ><i id='favori".$list[$i]['id_bien']."'"; if ($user->favornot($list[$i]['id_bien'])){ echo" style='color: red;'";} echo" class='fa fa-shopping-bag'></i></a></li>";

    echo"<li><a idbien='".$list[$i]['id_bien']."' class='like'  data-tip='Add to Cart'><i id='like".$list[$i]['id_bien']."'";  if ($user->likeornot($list[$i]['id_bien'])){ echo" style='color: red;' ";} echo" class='fa fa-heart'></i> </a></li>";
    
    echo"</ul>";
    if(date('Y-m-d', strtotime('+31 day', strtotime($list[$i]['dateannace'])))>date("Y-m-d")){  echo "<span class='product-new-label'>New</span>";} 
    if(($list[$i]['price']/$list[$i]['pasprice'])<=1){echo"<span class='product-discount-label'>";  echo (($list[$i]['price']/$list[$i]['pasprice'])*100)."% </span>";} 
    echo"</div>";
    echo"<div class='product-content' style='background-color: #15151587;' >";
    echo"<h3 class='title'><a href='#'>".$list[$i]['Titre']."</a></h3>";
    echo"<div class='price'>";
    echo $list[$i]['price'];
    echo"<span>".$list[$i]['price']."</span>";
    echo"</div>";
    echo"<a class='add-to-cart' href=''>ADD TO CART</a>";
    echo"</div></div></div>";
    }
    ?>
        
      


    </div>
</div> 

        <script src="https://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.js"></script>
        <script>
    		$(document).ready(function(){
				$("[rel='tooltip']").tooltip();
			});
        </script>
                       <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->

                      
                       <?php
///footer
require_once("../footer/footer.php");
?>                
</body>