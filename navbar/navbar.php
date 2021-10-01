
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  
<link href="../navbar/navbar.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="../navbar/navbar.js"></script>
<script src="https://kit.fontawesome.com/c00d8d0b08.js" crossorigin="anonymous"></script>
</head>

<!------ Include the above in your HEAD tag ---------->
<?php
include ("../prog/prog.php");
$user=new user;
$annoncenav=$user->getlisetnav();
//phpinfo();
///$thred==new workerThread;

?>
<body id="page-top" name="page-top" class="active">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <!-- Navigation -->
    	<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					
				<a id="menu-toggle" href="#" class="nav-btn btn-dark btn-lg toggle">
						<i class="fa fa-bars" style="color:#fff;"></i>
					</a>
					<a id="to-top" class="btn btn-lg btn-inverse" href="#top">
						<span class="sr-only">Toggle to Top Navigation</span>
						<i class="fa fa-chevron-up"></i>
					</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse js-navbar-collapse">
                		<ul class="nav navbar-nav navbar-left">
                			<li>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							</li><a class="navbar-brand" href="../accueil/accueil.php">
                						<img height="20" width="20" src="../imagesakeni/logo.png" class="img-responsive pull-left" alt="Responsive image">
									 Sakeni</a>
									<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>	
	
                			<li class="dropdown mega-dropdown">
                				<a href="#" class="dropdown-toggle" data-toggle="dropdown">VENTE<span class="caret"></span></a>				
                				<ul class="dropdown-menu mega-dropdown-menu">
                					<li class="col-sm-3">
                						<ul>
                							<li class="dropdown-header">VENTE Collection</li>                            
                                            <div id="VENTE" class="carousel slide" data-ride="carousel">
                                              <div class="carousel-inner">



                                                <div class="item active">
                                                    <a href="#"><img src="<?php   echo  $annoncenav[6]['imagebfont'] ;     ?>" class="img-responsive" alt="product 1"></a>
                                                    
                                                    <h4><small><?php   echo  $annoncenav[6]['Titre'] ;  ?></small></h4>                                        
                                                    <button class="btn btn-primary" type="button"><?php   echo  $annoncenav[6]['price'] ;     ?></button> <button  <?php echo "idbien='".$annoncenav[6]['id_bien']."' class='favori'"; ?> class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart" <?php echo  "id='favori".$annoncenav[6]['id_bien']."'"; ?>></span> Add to Wishlist</button>       
                                                </div><!-- End Item -->

                                                <div class="item">
                                                    <a href="#"><img src="<?php   echo  $annoncenav[7]['imagebfont'] ;     ?>"" class="img-responsive" alt="product 2"></a>
                                                    <h4><small><?php   echo  $annoncenav[7]['Titre'] ;  ?></small></h4>                                        
                                                    <button class="btn btn-primary" type="button"><?php   echo  $annoncenav[7]['price'] ;     ?></button> <button  <?php echo "idbien='".$annoncenav[7]['id_bien']."' class='favori'"; ?> class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart" <?php echo  "id='favori".$annoncenav[7]['id_bien']."'"; ?> ></span> Add to Wishlist</button>        
                                                </div><!-- End Item -->

                                                <div class="item">
                                                    <a href="#"><img src="<?php   echo  $annoncenav[8]['imagebfont'] ;     ?>"" class="img-responsive" alt="product 3"></a>
                                                    <h4><small><?php   echo  $annoncenav[8]['Titre'] ;  ?></small></h4>                                        
                                                    <button class="btn btn-primary" type="button"><?php   echo  $annoncenav[8]['price'] ;     ?></button> <button  <?php echo "idbien='".$annoncenav[8]['id_bien']."' class='favori'"; ?>" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart" <?php echo  "id='favori".$annoncenav[8]['id_bien']."'"; ?>></span> Add to Wishlist</button>      
                                                </div><!-- End Item -->                                
                                            
											
											  </div><!-- End Carousel Inner -->
                                              <!-- Controls -->
                                              <a class="left carousel-control" href="#VENTE" role="button" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                              </a>
                                              <a class="right carousel-control" href="#VENTE" role="button" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                              </a>
                                            </div><!-- /.carousel -->
                                            <li class="divider"></li>
                                            <li><a href="../afichelisteannonce/liste.php?Vente=Vente">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                						</ul>
                					</li>
                					<li class="col-sm-3">
                						<ul>
                							<li class="dropdown-header">Features</li>
                							<li><a href="#">Auto Carousel</a></li>
                                            <li><a href="#">Carousel Control</a></li>
                                            <li><a href="#">Left & Right Navigation</a></li>
                							<li><a href="#">Four Columns Grid</a></li>
                							<li class="divider"></li>
                							<li class="dropdown-header">Fonts</li>
                                            <li><a href="#">Glyphicon</a></li>
                							<li><a href="#">Google Fonts</a></li>
                						</ul>
                					</li>
                					<li class="col-sm-3">
                						<ul>
                							<li class="dropdown-header">Plus</li>
                							<li><a href="#">Navbar Inverse</a></li>
                							<li><a href="#">Pull Right Elements</a></li>
                							<li><a href="#">Coloured Headers</a></li>                            
                							<li><a href="#">Primary Buttons & Default</a></li>							
                						</ul>
                					</li>
                					<li class="col-sm-3">
                						<ul>
                							<li class="dropdown-header">Much more</li>
                                            <li><a href="#">Easy to Customize</a></li>
                							<li><a href="#">Calls to action</a></li>
                							<li><a href="#">Custom Fonts</a></li>
                							<li><a href="#">Slide down on Hover</a></li>                         
                						</ul>
                					</li>
                				</ul>				
                			</li>
							<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                            <li class="dropdown mega-dropdown">
                    			<a href="#" class="dropdown-toggle" data-toggle="dropdown">LOCATION<span class="caret"></span></a>				
                				<ul class="dropdown-menu mega-dropdown-menu">
                					<li class="col-sm-3">
                    					<ul>
                							<li class="dropdown-header">Features</li>
                							<li><a href="#">Auto Carousel</a></li>
                                            <li><a href="#">Carousel Control</a></li>
                                            <li><a href="#">Left & Right Navigation</a></li>
                							<li><a href="#">Four Columns Grid</a></li>
                							<li class="divider"></li>
                							<li class="dropdown-header">Fonts</li>
                                            <li><a href="#">Glyphicon</a></li>
                							<li><a href="#">Google Fonts</a></li>
                						</ul>
                					</li>
                					<li class="col-sm-3">
                						<ul>
                							<li class="dropdown-header">Plus</li>
                							<li><a href="#">Navbar Inverse</a></li>
                							<li><a href="#">Pull Right Elements</a></li>
                							<li><a href="#">Coloured Headers</a></li>                            
                							<li><a href="#">Primary Buttons & Default</a></li>							
                						</ul>
                					</li>
                					<li class="col-sm-3">
                						<ul>
                							<li class="dropdown-header">Much more</li>
                                            <li><a href="#">Easy to Customize</a></li>
                							<li><a href="#">Calls to action</a></li>
                							<li><a href="#">Custom Fonts</a></li>
                							<li><a href="#">Slide down on Hover</a></li>                         
                						</ul>
                					</li>
                                    <li class="col-sm-3">
                    					<ul>
                							<li class="dropdown-header">LOCATION Collection</li>                            
                                            <div id="LOCATION" class="carousel slide" data-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="item active">
                                                    <a href="#"><img src="<?php   echo  $annoncenav[0]['imagebfont'] ;     ?>" class="img-responsive" alt="product 1"></a>
                                                    <h4><small><?php   echo  $annoncenav[0]['Titre'] ;  ?></small></h4>                                        
                                                    <button class="btn btn-primary" type="button"><?php   echo  $annoncenav[0]['price'] ;     ?></button> <button  <?php echo "idbien='".$annoncenav[0]['id_bien']."' class='favori'"; ?> class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart" <?php echo  "id='favori".$annoncenav[0]['id_bien']."'"; ?>></span> Add to Wishlist</button>       
                                                </div><!-- End Item -->
                                                <div class="item">
                                                    <a href="#"><img src="<?php   echo  $annoncenav[1]['imagebfont'] ;     ?>" class="img-responsive" alt="product 2"></a>
                                                    <h4><small><?php   echo  $annoncenav[1]['Titre'] ;  ?></small></h4>                                        
                                                    <button class="btn btn-primary" type="button"><?php   echo  $annoncenav[1]['price'] ;     ?></button> <button  <?php echo "idbien='".$annoncenav[1]['id_bien']."' class='favori'"; ?> class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart" <?php echo  "id='favori".$annoncenav[1]['id_bien']."'"; ?>></span> Add to Wishlist</button>        
                                                </div><!-- End Item -->
                                                <div class="item">
                                                    <a href="#"><img src="<?php   echo  $annoncenav[2]['imagebfont'] ;     ?>" class="img-responsive" alt="product 3"></a>
                                                    <h4><small><?php   echo  $annoncenav[2]['Titre'] ;  ?></small></h4>                                        
                                                    <button class="btn btn-primary" type="button"><?php   echo  $annoncenav[2]['price'] ;     ?></button> <button  <?php echo "idbien='".$annoncenav[2]['id_bien']."' class='favori'"; ?> class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart" <?php echo  "id='favori".$annoncenav[2]['id_bien']."'"; ?>></span> Add to Wishlist</button>      
                                                </div><!-- End Item -->                                
                                              </div><!-- End Carousel Inner -->
                                              <!-- Controls -->
                                              <a class="left carousel-control" href="#LOCATION" role="button" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                              </a>
                                              <a class="right carousel-control" href="#LOCATION" role="button" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                              </a>
                                            </div><!-- /.carousel -->
                                            <li class="divider"></li>
                                            <li><a href="../afichelisteannonce/liste.php?Location=Location">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                						</ul>
                					</li>
                				</ul>				
                			</li>
                			<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                			<!--///////////////////////////////////////////////////////////////////////////////////////////////////////-->
                			<li class="dropdown mega-dropdown">
                				<a href="#" class="dropdown-toggle" data-toggle="dropdown">IMMOBILIER NEUF <span class="caret"></span></a>				
                				<ul class="dropdown-menu mega-dropdown-menu">
                					<li class="col-sm-3">
                						<ul>
                							<li class="dropdown-header">IMMOBILIER NEUF Collection</li>                            
                                            <div id="IMMOBILIERNEUF" class="carousel slide" data-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="item active">
                                                    <a href="#"><img src="<?php   echo  $annoncenav[9]['imagebfont'] ;     ?>" class="img-responsive" alt="product 1"></a>
                                                    <h4><small><?php   echo  $annoncenav[9]['Titre'] ;  ?></small></h4>                                        
                                                    <button class="btn btn-primary" type="button"><?php   echo  $annoncenav[9]['price'] ;     ?></button> <button  <?php echo "idbien='".$annoncenav[9]['id_bien']."' class='favori'"; ?> class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart" <?php echo  "id='favori".$annoncenav[9]['id_bien']."'"; ?>></span> Add to Wishlist</button>       
                                                </div><!-- End Item -->
                                                <div class="item">
                                                    <a href="#"><img src="<?php   echo  $annoncenav[10]['imagebfont'] ;     ?>" class="img-responsive" alt="product 2"></a>
                                                    <h4><small><?php   echo  $annoncenav[10]['Titre'] ;  ?></small></h4>                                        
                                                    <button class="btn btn-primary" type="button"><?php   echo  $annoncenav[10]['price'] ;     ?></button> <button  <?php echo "idbien='".$annoncenav[10]['id_bien']."' class='favori'"; ?> class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart" <?php echo  "id='favori".$annoncenav[10]['id_bien']."'"; ?>></span> Add to Wishlist</button>        
                                                </div><!-- End Item -->
                                                <div class="item">
                                                    <a href="#"><img src="<?php   echo  $annoncenav[11]['imagebfont'] ;     ?>" class="img-responsive" alt="product 3"></a>
                                                    <h4><small><?php   echo  $annoncenav[11]['Titre'] ;  ?></small></h4>                                        
                                                    <button class="btn btn-primary" type="button"><?php   echo  $annoncenav[11]['price'] ;     ?></button> <button  <?php echo "idbien='".$annoncenav[11]['id_bien']."' class='favori'"; ?> class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart" <?php echo  "id='favori".$annoncenav[11]['id_bien']."'"; ?>> </span> Add to Wishlist</button>      
                                                </div><!-- End Item -->                                
                                              </div><!-- End Carousel Inner -->
                                              <!-- Controls -->
                                              <a class="left carousel-control" href="#IMMOBILIERNEUF" role="button" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                              </a>
                                              <a class="right carousel-control" href="#IMMOBILIERNEUF" role="button" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
											  </a>
											  
                                            </div><!-- /.carousel -->
                                            <li class="divider"></li>
                                            <li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                						</ul>
                					</li>
                					<li class="col-sm-3">
                						<ul>
                							<li class="dropdown-header">Features</li>
                							<li><a href="#">Auto Carousel</a></li>
                                            <li><a href="#">Carousel Control</a></li>
                                            <li><a href="#">Left & Right Navigation</a></li>
                							<li><a href="#">Four Columns Grid</a></li>
                							<li class="divider"></li>
                							<li class="dropdown-header">Fonts</li>
                                            <li><a href="#">Glyphicon</a></li>
                							<li><a href="#">Google Fonts</a></li>
                						</ul>
                					</li>
                					<li class="col-sm-3">
                						<ul>
                							<li class="dropdown-header">Plus</li>
                							<li><a href="#">Navbar Inverse</a></li>
                							<li><a href="#">Pull Right Elements</a></li>
                							<li><a href="#">Coloured Headers</a></li>                            
                							<li><a href="#">Primary Buttons & Default</a></li>							
                						</ul>
                					</li>
                					<li class="col-sm-3">
                						<ul>
                							<li class="dropdown-header">Much more</li>
                                            <li><a href="#">Easy to Customize</a></li>
                							<li><a href="#">Calls to action</a></li>
                							<li><a href="#">Custom Fonts</a></li>
                							<li><a href="#">Slide down on Hover</a></li>                         
                						</ul>
                					</li>
                				</ul>				
                			</li>
							<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                            <li class="dropdown mega-dropdown">
                    			<a href="#" class="dropdown-toggle" data-toggle="dropdown">LOCATION VACANCES  <span class="caret"></span></a>				
                				<ul class="dropdown-menu mega-dropdown-menu">
                					<li class="col-sm-3">
                    					<ul>
                							<li class="dropdown-header">Features</li>
                							<li><a href="#">Auto Carousel</a></li>
                                            <li><a href="#">Carousel Control</a></li>
                                            <li><a href="#">Left & Right Navigation</a></li>
                							<li><a href="#">Four Columns Grid</a></li>
                							<li class="divider"></li>
                							<li class="dropdown-header">Fonts</li>
                                            <li><a href="#">Glyphicon</a></li>
                							<li><a href="#">Google Fonts</a></li>
                						</ul>
                					</li>
                					<li class="col-sm-3">
                						<ul>
                							<li class="dropdown-header">Plus</li>
                							<li><a href="#">Navbar Inverse</a></li>
                							<li><a href="#">Pull Right Elements</a></li>
                							<li><a href="#">Coloured Headers</a></li>                            
                							<li><a href="#">Primary Buttons & Default</a></li>							
                						</ul>
                					</li>
                					<li class="col-sm-3">
                						<ul>
                							<li class="dropdown-header">Much more</li>
                                            <li><a href="#">Easy to Customize</a></li>
                							<li><a href="#">Calls to action</a></li>
                							<li><a href="#">Custom Fonts</a></li>
                							<li><a href="#">Slide down on Hover</a></li>                         
                						</ul>
                					</li>
                                    <li class="col-sm-3">
                    					<ul>
                							<li class="dropdown-header">LOCATION VACANCES Collection</li>                            
                                            <div id="LOCATIONVACANCES" class="carousel slide" data-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="item active">
                                                    <a href="#"><img src="<?php   echo  $annoncenav[3]['imagebfont'] ;  ?>" class="img-responsive" alt="product 1"></a>
                                                    <h4><small><?php   echo  $annoncenav[3]['Titre'] ;  ?></small></h4>  
													<button class="btn btn-primary" type="button"><?php   echo  $annoncenav[3]['price'] ;     ?></button> <button  <?php echo "idbien='".$annoncenav[3]['id_bien']."' class='favori'"; ?> class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart" <?php echo  "id='favori".$annoncenav[3]['id_bien']."'"; ?>></span> Add to Wishlist</button>        
												</div>  	
												<div class="item">
													                            
                                                    <a href="#"><img src="<?php   echo  $annoncenav[4]['imagebfont'] ;  ?>" class="img-responsive" alt="product 2"></a>
                                                    <h4><small><?php   echo  $annoncenav[4]['Titre'] ;  ?></small></h4>                                        
                                                    <button class="btn btn-primary" type="button"><?php   echo  $annoncenav[4]['price'] ;     ?></button> <button  <?php echo "idbien='".$annoncenav[4]['id_bien']."' class='favori'"; ?> class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart" <?php echo  "id='favori".$annoncenav[4]['id_bien']."'"; ?>></span> Add to Wishlist</button>        
                                                </div><!-- End Item -->
                                                <div class="item">
                                                    <a href="#"><img src="<?php   echo  $annoncenav[5]['imagebfont'] ;   ?>" class="img-responsive" alt="product 3"></a>
                                                    <h4><small><?php   echo  $annoncenav[5]['Titre'] ;  ?></small></h4>                                        
                                                    <button class="btn btn-primary" type="button"><?php   echo  $annoncenav[5]['price'] ;     ?></button> <button  <?php echo "idbien='".$annoncenav[5]['id_bien']."' class='favori'"; ?> class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart" <?php echo  "id='favori".$annoncenav[5]['id_bien']."'"; ?>></span> Add to Wishlist</button>      
                                                </div><!-- End Item -->                                
                                              </div><!-- End Carousel Inner -->
                                              <!-- Controls -->
                                              <a class="left carousel-control" href="#LOCATIONVACANCES " role="button" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="false"></span>
                                                <span class="sr-only">Previous</span>
                                              </a>
                                              <a class="right carousel-control" href="#LOCATIONVACANCES" role="button" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                              </a>
                                            </div><!-- /.carousel -->
                                            <li class="divider"></li>
                                            <li><a href="../afichelisteannonce/liste.php?Locationvacance=Location vacance">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                						</ul>
                					</li>
                				</ul>				
                			</li>     		
							<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>	
							<li><a href="../enregistrem/enregistrem.php">Créer annonce    </a></li>
						</ul>
						
                        <ul class="nav navbar-nav navbar-right">
						<li>
						<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">

<form class="search">
  <div class="search__wrapper">
    <input type="text" name="" placeholder="Search for..." class="search__field">
    <button type="submit" class="fa fa-search search__icon"></button>
  </div>
</form>
						</li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <i class="fa fa-user" aria-hidden="true"></i>  My account <span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">

							<li><?php 
							if(!isset($_SESSION['id_user'])){echo "<a href='../login/login.php'>login</a>";}else{echo "<a href='../compte/compte.php'> <i class='fa fa-address-card' aria-hidden='true'></i> parametre</a>";}?></li>
                           
						    <li><?php 
							if(isset($_SESSION['id_user'])){echo "<a href='../afichelisteannonce/myliste.php'>mais annonce</a>";}else{echo "<a href='../creecompte/creecompte.php'>cree compte</a>";}
								
								?></li>

                            <li><?php 
							if(isset($_SESSION['id_user'])){echo "<a href='/afichelisteannonce/fav.php'>favorier</a>";}
								?></li>
                            <li class="divider"></li>
                            <li><?php if(isset($_SESSION['id_user'])){echo "<a href='../login/logout.php'>déconnexion</a>";}?></li>
                          </ul>
                        </li>
						<li><?php  

						
						if(isset($_SESSION['id_user'])){
							echo "<a href='../Profile/msg.php' id='msg'>   </a>";
						}else{
							echo"<a href='../login/login.php'> <i class='fa fa-comment' aria-hidden='true'></i>   Messages      </a>";
						}
						

						?></li>
                      </ul>
                	</div><!-- /.nav-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		
		<nav id="sidebar-wrapper">
			<ul class="sidebar-nav">
				<a id="menu-close" href="#" class="btn btn-danger pull-right hidden-md hidden-lg toggle"><i class="fa fa-times"></i></a>
				<li class="sidebar-brand">
					<a href="#top">Soldier-up <strong>Designs</strong></a>
				</li>
				<li>
					<a href="/" title="Go to Top">Home</a>
				</li>
				<li>
					<a href="/about" title="Go to About Us section">About</a>
				</li>
				<li>
					<a href="/resume" title="Navigate to Jonathan Adcox IT Resume">Resume</a>
				</li>
				<li>
					<a href="/portfolio" title="Navigate to 'Our Services' section">Portfolio</a>
				</li>
				<!-- Future Development
				<li>
					<a href="#portfolio">Portfolio</a>
				</li> -->
				<li>
					<a href="/blog" title="Our Blog">Blog</a>
				</li>
				<li>
					<a data-toggle="modal" data-href="#loginModal" data-target="#loginModal" style="cursor:pointer;"> Hosting</a>
				</li>
			</ul>
		</nav>
		<div class="container">
			<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
				<div class="modal-dialog modal-default">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h3>Login to Hosting Portal - Control Panel</h3>
						</div>
						<div class="modal-body">
							<article class="container-form center-block">
								<!-- Form Content HERE! -->
								<form method="post" accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal" action="https://secure.yourwebhosting.com/secureLogin" enctype="application/x-www-form-urlencoded">
									<fieldset>
										<input type='hidden' name='__token_timestamp__' value='1426572610'>
										<input type='hidden' name='__token_val__' value='4d96cad055fac46518825357fcb49390'>
										<input type="hidden" name="destination" value="http://www.yourwebhosting.com/controlpanel/index.bml">
										<!-- Name input-->
										<div class="form-group">
											<label class="sr-only" for="credential_0">Username: </label>
											<div class="col-xs-12">
												<input id="credential_0" name="credential_0" type="text" placeholder="Your Username" class="form-control">
											</div>
										</div>
										<!-- Email input-->
										<div class="form-group">
											<label class="sr-only" for="credential_1">Password: </label>
											<div class="col-xs-12">
												<input id="email" type="password" name="credential_1" value="" placeholder="Your Password" class="form-control">
											</div>
										</div>
										<!-- Form actions -->
										<div class="form-group pull-right">
											<div class="col-md-12 text-right">
												<button type="submit" name="submit" value="Sign In" class="btn btn-lg">Submit</button>
											</div>
										</div>
									</fieldset>
								</form>
							</article>
						</div>
						<div class="modal-footer">
							Login Problems?
							<button type="submit" class="btn btn-dark" data-dismiss="modal" data-href="#collapseTwo" data-toggle="collapse" data-target="#collapseTwo" style="cursor:pointer;">Contact Me</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		
        
		
      
        <script>
    		$(document).ready(function(){
				$("[rel='tooltip']").tooltip();
			});
		</script>
</body>