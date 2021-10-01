<head>

<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Aclonica" />
<link href="liste.css" rel="stylesheet">

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="liste.js"></script>


</head>

<!------ Include the above in your HEAD tag ---------->
<?php
session_start();
require_once("../navbar/navbar.php");




$getliste=$user;
 if($_POST['pmin']=="null"){
    $_POST['pmin']=null;
 }
 if($_POST['pmax']=="null"){
    $_POST['pmax']=null;
 }
 if($_POST['Ville']=="null"){
    $_POST['Ville']=null;
 }
 if($_POST['Région']=="null"){
    $_POST['Région']=null;
 }
 if($_POST['nbch']==0){
    $_POST['nbch']=null;
 }

 if(isset($_POST['Appartements'])||isset($_POST['Maisons'])||isset($_POST['Villasmaisonsdeluxe'])||isset($_POST['Nouveau'])||isset($_POST['Bonetat'])||isset($_POST['Arenover'])||isset($_POST['Location'])||isset($_POST['Locationvacance'])||isset($_POST['Vente'])||isset($_POST['Région'])||isset($_POST['Ville'])||isset($_POST['Meublé'])||isset($_POST['Garage'])||isset($_POST['jardin'])||isset($_POST['piscine'])||isset($_POST['pmax'])||isset($_POST['pmin'])||isset($_POST['imneuf'])||isset($_POST['nb'])){
    $liste=$getliste->getlisetvender($_SESSION['id_user'],$_POST['Appartements'],$_POST['Maisons'],$_POST['Villasmaisonsdeluxe'],$_POST['Nouveau'],$_POST['Bonetat'],$_POST['Arenover'],$_POST['Location'],$_POST['Locationvacance'],$_POST['Vente'],$_POST['Région'],$_POST['Ville'],$_POST['Meublé'],$_POST['Garage'],$_POST['jardin'],$_POST['piscine'],$_POST['pmax'],$_POST['pmin'],$_POST['imneuf'],$_POST['nb']);
}else{
    $liste=$getliste->getliset1ma();
}
 
?>

    <body>
        
   

               <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

        <br><br><br>       
        <div class="col-sm-4 col-md-3 sidebar row1" style="width: 200;height: 1200;">
    <div class="mini-submenu">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </div>
    <form action="myliste.php" id="submit" method="post">
    <div class="list-group">
        <span href="#" class="list-group-item active">
            votre choix
            <span class="pull-right" id="slide-submenu">
                <i class="fa fa-times"></i>
            </span>
            <br>
        </span>
        <div class="input-group">
        
    <span class="input-group-addon" >region</span>
    <select class="form-control s1" name="Région" id="sel1">
    <option value="null"></option>
    <?php 
        foreach ($user->getvilleregien() as $key => $value) {
            if($_POST['Région']==$value['Région']){
                if(isset($_POST['Région']))
                echo "<option selected >".$value['Région']."</option>";
            }else{
                echo "<option>".$value['Région']."</option>";
            }
        }
        ?>
    </select>
    </div>
    <div class="input-group">
        
        <span class="input-group-addon" >ville</span>
        <select class="form-control s4"name="Ville" id="sel1">
        <option value="null"></option>
        <?php  foreach ($user->getvilleregien() as $key => $value) {
            
            if($_POST['Ville']==$value['Ville']){
                if(isset($_POST['Ville']))
                echo "<option selected >".$value['Ville']."</option>";
            }else{
                echo "<option>".$value['Ville']."</option>";
            }

        }
        ?>
        </select>
        </div>
        <div class="list-group-item">
              <h3> Type de bien </h3>
                      <span  >
                      <i class="fas fa-building"></i> Appartements</span>
                        <div class="material-switch pull-right">

                            <input id="tb1" class="tb1" name="Appartements" value="Appartements" <?php if(isset($_POST['Appartements'])){ echo "checked" ;  }?> type="checkbox"/>
                            <label for="tb1" class="label-primary" style="position: relative;top: 10px;"></label>

                        </div>
                        <br>
                        <span  > <i class="fas fa-home"></i>  Maisons </span>
                        <div class="material-switch pull-right">
                        <input id="tb2" class="tb1" name="Maisons" value="Maisons" <?php if(isset($_POST['Maisons'])){ echo "checked" ;  }?> type="checkbox"/>
                            <label for="tb2" class="label-primary" style="position: relative;top: 10px;"></label>
                        </div>
                        <br>
                        <span > <i class="fas fa-umbrella-beach"></i> Villas & maisons de luxe </span>
                        <div class="material-switch pull-right">
                            <input id="tb3" name="Villasmaisonsdeluxe"<?php if(isset($_POST['Villasmaisonsdeluxe'])){ echo "checked" ;  }?> value="Villas & maisons de luxe"type="checkbox"/>
                            <label for="tb3" class="label-primary" style="position: relative;top: 10px;"></label>
                        </div>
                        <br>
                        <span > <i class="fa fa-building" aria-hidden="true"></i> IMMOBILIER NEUF  </span>
                        <div class="material-switch pull-right">
                            <input id="tbn" name="imneuf"<?php if(isset($_POST['imneuf'])){ echo "checked" ;  }?> value="IMMOBILIER NEUF"type="checkbox"/>
                            <label for="tbn" class="label-primary" style="position: relative;top: 10px;"></label>
                        </div>
                        </div>
                        
                        <span class="list-group-item" ><i class="fas fa-warehouse"></i> Garage</span>
                        <div class="material-switch pull-right">
                            <input id="g" name="Garage" value="1"<?php if(isset($_POST['Garage'])){ echo "checked"; }?> type="checkbox"/>
                            <label for="g" class="label-primary"></label>
                        </div>
                        <span class="list-group-item" > <i class="fas fa-tree"></i>  jardin</span>
                        <div class="material-switch pull-right">
                            <input id="j" name="jardin" value="1"<?php if(isset($_POST['jardin'])){ echo "checked";}?> type="checkbox"/>
                            <label for="j" class="label-primary"></label>
                        </div>

                        <span class="list-group-item" > <i class="fas fa-swimming-pool"></i>  piscine </span>
                        <div class="material-switch pull-right">
                            <input id="p" name="piscine" value="1"<?php if(isset($_POST['piscine'])){ echo "checked";}?> type="checkbox"/>
                            <label for="p" class="label-primary"></label>
                        </div>
                        <span class="list-group-item" > <i class="fas fa-couch"></i>   Meublé </span>
                        <div class="material-switch pull-right">
                            <input id="m" name="Meublé" value="1"<?php if(isset($_POST['Meublé'])){ echo "checked";}?> type="checkbox"/>
                            <label for="m" class="label-primary"></label>
                        </div>


                        <div class="qty mt-5 list-group-item">
                            <span>Nombre de chambres :</span>
                        <span class="minus bg-dark m1">-</span>
                        <input type="number" class="count c1" name="nb" <?php if(isset($_POST['nb'])){  echo "value='".$_POST['nb']."'";}else{ echo "value='0'";}?>>
                        <span class="plus bg-dark p1">+</span>
                    </div>
                    
                    



                    
        <div class="list-group-item"> 
    <div>
    <div class="input-group">
    <span class="input-group-addon" >Max prix:</span>
    <select class="form-control s2" name="pmax"id="sel1">
    <option value="null"></option>
    <?php 
    for($i=0;$i<=500000;$i+=150){
    if($_POST['pmax']==$i){
        if(isset($_POST['pmax']))
        echo "<option selected >".$i."</option>";
    }else{
        echo "<option>".$i."</option>";
    }
    }
    ?>  
    </select>
    </div>
    </div>
    <br>
    <div>
    <div class="input-group">
    <span class="input-group-addon" >Min prix:</span>
    <select class="form-control s3"name="pmin" id="sel1">

    <option selected value="null"></option>

    <?php 
     for($i=0;$i<=500000;$i+=150){

        if($_POST['pmin']==$i){
            if(isset($_POST['pmin']))
            echo "<option selected >".$i."</option>";
        }else{
            echo "<option>".$i."</option>";
        }
        }
    ?>
    
    </select>
    </div>
    </div>
    </div> 
     <div class="list-group-item">
     <h3> Transaction </h3>
                      <span  >
                      <i class="far fa-handshake"></i> Location</span>
                        <div class="material-switch pull-right">
                            <input id="t1" name="Location" value="Location"<?php if(isset($_POST['Location'])){ echo "checked";   }?> type="checkbox"/>
                            <label for="t1" class="label-primary" style="position: relative;top: 10px;"></label>
                        </div>
                        <br>
                        <span  > <i class="fas fa-swimmer"></i> Location vacanse</span>
                        <div class="material-switch pull-right">
                            <input id="t2" name="Locationvacance"<?php if(isset($_POST['Locationvacance'])){ echo "checked";   }?> value="Location vacance"   type="checkbox"/>
                            <label for="t2" class="label-primary" style="position: relative;top: 10px;"></label>
                        </div>
                        <br>
                        <span > <i class="fas fa-key"></i> Vente </span>
                        <div class="material-switch pull-right">
                            <input id="t3" name="Vente"<?php if(isset($_POST['Vente'])){ echo "checked";   }?> value="Vente"type="checkbox"/>
                            <label for="t3" class="label-primary" style="position: relative;top: 10px;"></label>
                        </div>
                       
                        </div>
                        <div class="list-group-item"> <h3> État</h3>
                      <span  >
                      <i class="fas fa-check-circle"></i> Nouveau</span>
                        <div class="material-switch pull-right">
                            <input id="e1" name="Nouveau" value="Nouveau"<?php if(isset($_POST['Nouveau'])){ echo "checked";   }?> type="checkbox"/>
                            <label for="e1" class="label-primary" style="position: relative;top: 10px;"></label>
                        </div>
                        <br>
                        <span  ><i class="fas fa-smile-beam"></i> Bon etat</span>
                        <div class="material-switch pull-right">
                            <input id="e2" name="Bonetat" value="Bon etat"<?php if(isset($_POST['Bonetat'])){ echo "checked";   }?> type="checkbox"/>
                            <label for="e2" class="label-primary" style="position: relative;top: 10px;"></label>
                        </div>
                        <br>
                        <span ><i class="fas fa-house-damage"></i> A renover</span>
                        <div class="material-switch pull-right">
                            <input id="e3" name="Arenover"  value="A renover"<?php if(isset($_POST['Arenover'])){ echo "checked";   }?> type="checkbox"/>
                            <label for="e3" class="label-primary" style="position: relative;top: 10px;"></label>
                        </div>
                       
                        </div>
        <a href="#" class="list-group-item">
            <i class="fa fa-user"></i> Lorem ipsum
        </a>
        <a href="#" class="list-group-item">
            <i class="fa fa-folder-open-o"></i> Lorem ipsum <span class="badge">14</span>
        </a>
        <a href="#" class="list-group-item">
            <i class="fa fa-bar-chart-o"></i> Lorem ipsumr <span class="badge">14</span>
        </a>
        <a href="#" class="list-group-item">
            <i class="fa fa-envelope"></i> Lorem ipsum
        </a>
    </div>        
    </div> 
            
	
    

    <div class="row row2">
<?php 

foreach ($liste as $key => $value) {
echo"<div class='col-md-3 col-sm-6'>";
echo"<div class='product-grid4'>";
echo"<div class='product-image4'>";
echo" <a href='../pdescussion/produitdescussion.php?bien=".$value['id_bien']."'>";
echo"<img class='pic-1' src='".$value['imagebfont']."'>";
echo"<img class='pic-2' src='".$value['image1']."'>";
echo" </a>";
echo"<ul class='social'>";
echo"<li><a href='../enregistrem/enregistrem.php?modif=1&id_bien=".$value['id_bien']."' data-tip='modif'><i class='fa fa-cog'></i></a></li>";
echo"<li><a idbien='".$value['id_bien']."' class='disp'  ' data-tip='dont display'><i id='disp".$value['id_bien']."'"; if ($value['disp']==1){ echo" style='color: red;'";} echo"  class='fa fa-times-circle'></i></a></li>";
echo"<li><a idbien='".$value['id_bien']."' class='dispt'  data-tip='display'><i id='dispt".$value['id_bien']."'"; if ($value['disp']!=1){ echo" style='color: #28bb09;'";} echo"  class='fa fa-arrow-up'></i> </a></li>";

echo"</ul>";
if(date('Y-m-d', strtotime('+31 day', strtotime($value['dateannace'])))>date("Y-m-d")){  echo "<span class='product-new-label'>New</span>";} 
if(($value['price']/$value['pasprice'])<=1){echo"<span class='product-discount-label'>";  echo (($value['price']/$value['pasprice'])*100)."% </span>";} 
echo"</div>";
echo"<div class='product-content'>";
echo"<h3 class='title'><a href='#'>".$value['Titre']."</a></h3>";
echo"<div class='price'>";
echo $value['price'];
echo"<span>".$value['price']."</span>";
echo"</div>";
echo"<a class='add-to-cart' href=''>ADD TO CART</a>";
echo"</div></div></div>";
}
?>
        
       



    </div>
    </form>
</div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.js"></script>
        <script>
    		$(document).ready(function(){
				$("[rel='tooltip']").tooltip();
			});
        </script>
                       <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
  </body>
                      
                       <?php
///footer
require_once("../footer/footer.php");
?>                
</body>