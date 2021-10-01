
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="produitdescussion.css" rel="stylesheet">
<script src="produitdescussion.js"></script>

<?php
require_once('../verifsession.php');
session_start();
$_SESSION['id_bien']=$_GET['bien'];
if(isset($_GET['res'])){
  $_SESSION['is_res']=$_GET['res'];
}



require_once("../navbar/navbar.php");
$getb=$user;
$messages=$getb->getmessage($_SESSION['id_bien']);

$infos=$getb->getannoceinfo($_SESSION['id_bien']);
?>
<br><br><br><br><br><br>
<div>
<div class="container">
        <div id="main_area">
                <!-- Slider -->
                <div class="row">
                    <div class="col-xs-12" id="slider">
                        <!-- Top part of the slider -->
                        <div class="row">
                            <div class="col-sm-8" id="carousel-bounding-box">
                                <div class="carousel slide" id="myCarousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                  
                                        <div class="active item" data-slide-number="0">
                                        <img src=" <?php echo $infos['image1'];?>"></div>

                                        <div class="item" data-slide-number="1">
                                        <img src=" <?php echo $infos['image2'];?>"></div>

                                        <div class="item" data-slide-number="2">
                                        <img src=" <?php echo $infos['image3'];?>"></div>

                                        <div class="item" data-slide-number="3">
                                        <img src=" <?php echo $infos['image4'];?>"></div>

                                        <div class="item" data-slide-number="4">
                                        <img src=" <?php echo $infos['image5'];?>"></div>

                                        
                                    </div><!-- Carousel nav -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>                                       
                                    </a>                                
                            </div>
                            </div>
                            <div class="col-sm-4" id="carousel-text"></div>
                            <div id="slide-content" style="display: none;">
                                <div id="slide-content-0">
                                <div class="container">
	                          	
		        	<div class="container-fliud">
		        		<div class="wrapper row">
					  <div class="details col-md-6">
						<h3 class="product-title"><?php echo $infos['Titre'];?></h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">41 reviews</span>
						</div>
						<p class="product-description"><?php echo $infos['Description'];?></p>
						<h4 class="price">current price: <span><?php echo $infos['price'];?></span></h4>
            <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
            <h3>informations:</h3>
						<h5 class="info"> 
							<span class="size" data-toggle="tooltip" ><?php echo $infos['Transaction'];?></span>
							<span class="size" data-toggle="tooltip" ><?php echo $infos['État'];?></span>
							<span class="size" data-toggle="tooltip" ><?php echo $infos['Type_de_bien'];?></span>
            </h5>
            
						<h5 class="colors">adresse:
						<span> <?php echo $infos['Address']."     ".$infos['Région']."    ".$infos['Ville'];?> </span>
						</h5>
						<div class="action">
							<button  class="add-to-cart btn btn-default f"<?php echo "idbien='".$infos['id_bien']."' class='favori'";  if ($user->favornot($infos['id_bien'])){ echo" style='background-color: #00ff10;'";}?> type="button">add to fav</button>
							<button class="like btn btn-default" type="button" <?php echo "idbien='".$infos['id_bien']."' class='like'";   if ($user->likeornot($infos['id_bien'])){ echo" style='color: red;'";}?> ><span  <?php echo "id='like".$infos['id_bien']."'";?>  class="fa fa-heart"></span></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	
                                </div>

                               
                                
                            </div>
                        </div>
                    </div>
                </div><!--/Slider-->

                <div class="row hidden-xs" id="slider-thumbs">
                        <!-- Bottom switcher of slider -->
                        <ul class="hide-bullets">
                            <?php
                            
                                     echo"<li class='col-sm-2'> <a class='thumbnail' id='carousel-selector-0'><img src='".$infos['image1']."'></a></li>";
                                     echo"<li class='col-sm-2'> <a class='thumbnail' id='carousel-selector-1'><img src='".$infos['image2']."'></a></li>";
                                     echo"<li class='col-sm-2'> <a class='thumbnail' id='carousel-selector-2'><img src='".$infos['image3']."'></a></li>";
                                     echo"<li class='col-sm-2'> <a class='thumbnail' id='carousel-selector-3'><img src='".$infos['image4']."'></a></li>";
                                     echo"<li class='col-sm-2'> <a class='thumbnail' id='carousel-selector-4'><img src='".$infos['image5']."'></a></li>";
                            
                            
                            ?>
                        </ul>                 
                </div>
        </div>
</div>
<br><br><br>


<?php 


if (isset($infos['id_v'])) {
  $auser= $user->getcomptebyid($infos['id_v']);
}else{
 
 $auser=$user->getcomptebyid($_GET['res']);
}
if($_SESSION['id_user']!=$infos['id_v']||isset($_GET['res'])){

echo"   <div class='discussion'>";
echo"    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.2/css/all.css'";
echo"    integrity='sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr' crossorigin='anonymous'> ";
echo"    <div id='frame'>";
echo"      <div class='content'>";
echo"       <div class='contact-profile'>";
                echo"          <img src='".$auser['imageu']."' alt='' />";
                echo"  <div class='text-area'>";
                echo"   <h4 class='bold my-0'>".$auser['first_name'].$auser['last_name']."</h4>";
                echo" <p><i>"; if($auser['online']==1){ echo "online"; $online="online";}else{echo"or linge";}  echo "</i></p>";
                echo" </div>";
                echo"</div>";
                echo" <div class='messages'>";
                echo" <ul class='list-unstyled'>";
               
                  foreach ($messages as $k => $value) { 
                    if($value['res_id']==$_SESSION['id_user']){
                      echo" <li class='sent'>";
                      echo" <div class='img-block'>";
                      echo"   <span class='contact-status ".$online." '></span><img src='".$auser['imageu']."' alt=''></div>";
                      echo"  <div class='msgbox'>";
                      echo"<p>".$value['messages']."</p>";
                      echo" <small class='timeBlock'>".$value['time']."</small>";
                      echo" </div>";
                      echo"</li>";
                      $idm=$value['IDM'];
                    }else{
                      echo" <li class='replies'>";
                      echo" <div class='img-block'>";
                      echo" <span class='contact-status online'></span>";
                      echo" <img src='".$compte=$user->getcompte()['imageu']."' alt=''/></div>";
                      echo" <div class='msgbox'>";
                      echo"<p>".$value['messages']."</p>";
                      echo" <small class='timeBlock'>".$value['time']."</small>";
                      echo" </div>";
                      echo" </li>";
                      
                    }
                  }
                    
                  echo"   </ul>";
                  echo"  </div>";
                echo"  <div class='message-input'>";
                echo"  <div class='wrap'>";
                  echo"   <a class='attachment'><i class='fa fa-paperclip' aria-hidden='true'></i></a>";
                   echo"    <form action='' method='post'>";
                 echo"  <input type='text' placeholder='Write your message...' name='message' id='message' />";
                  echo"  <button class='submit vu ' IDM='".$idm."' type='submit'><i class='fa fa-paper-plane ' aria-hidden='true'></i></button>";
                  echo"  </form>";




                  echo"  </div></div> </div></div></div>";
                }

            ?>


      <div id="more">

















      </div>
<?php
///footer
require_once("../footer/footer.php");
?>    