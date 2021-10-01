

<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="enregistrem.css" rel="stylesheet">
<script src="enregistrem.js"></script>
</head>
<!------ Include the above in your HEAD tag ---------->

<?php
session_start();
require_once("../verifsession.php");
require_once("../navbar/navbar.php");
if(isset($_GET['modif'])){
  $bien=$user->getannoceinfom($_GET['id_bien'],2);

}
?>
<br><br><br><br>
<div class="container">
<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
            <p>Step 1</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
            <p>Step 2</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
            <p>Step 3</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
            <p>Step 4</p>
        </div>
    </div>
</div>
<form role="form" method="post"  enctype="multipart/form-data" <?php if(!isset($_GET['modif'])){ echo "action='enregistrem1.php'";}else{   echo "action='modif.php?id_bien=".$_GET['id_bien']."'";    } ?>>
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Step 1</h3>
                <ul class="liste">
                <div class="container">			
                <div class="form-group"  >
                <li>
                <div class="well-sm ">
                <div class="btn-group" data-toggle="buttons">
                <h3> Transaction </h3>
                <label >
                      <label class="btn btn-success <?php if($bien['Transaction']=="Location"){ echo "active";   }?> ">
                      <input checked type="radio" required="required"  name="tr" id="tr"  <?php if($bien['Transaction']=="Location"){ echo "checked";   }?>  value="Location" />
                         <span class="glyphicon glyphicon-ok"></span>
                       </label>
                        <label class="control-label">Location</label>
                        </label>
                    <br><label>
                    <label class="btn btn-success  <?php if($bien['Transaction']=="Location vacance"){ echo "active";   }?>">
                    <input maxlength="100" type="radio" required="required" name="tr" id="tr"  <?php if($bien['Transaction']=="Location vacance"){ echo "checked";   }?> value="Location vacance" />
                    <span class="glyphicon glyphicon-ok"></span>
                    </label>
                    <label class="control-label">Location vacanse</label>
                    </label>
                    <br>
                    <label>
                    <label class="btn btn-success <?php if($bien['Transaction']=="Vente"){ echo "active";   }?> ">
                    <input maxlength="100" type="radio" required="required"  name="tr"  <?php if($bien['Transaction']=="Vente"){ echo "checked";   }?>   id="tr" value="Vente" />
                    <span class="glyphicon glyphicon-ok"></span>
                    </label>
                    <label class="control-label">Vente</label>
                    </label>

                    </div>
                    </div>
                    </li>
                    <li>
                    <div class="well-sm ">
                <div class="btn-group" data-toggle="buttons">
                <h3> État</h3>
                    <label>
                    <label class="btn btn-success <?php if($bien['État']=="Nouveau"){ echo "active";   }?> ">
                    <input maxlength="100" type="radio" required="required"  name="etat" <?php if($bien['État']=="Nouveau"){ echo "checked";   }?> id="etat" value="Nouveau" />
                    <span class="glyphicon glyphicon-ok"></span>
                    </label>
                    <label class="control-label">Nouveau</label>
                    </label>
                    <br>
                    <label>
                    <label class="btn btn-success <?php if($bien['État']=="Bon etat"){ echo "active";   }?> ">
                    <input maxlength="100" type="radio" required="required" name="etat" <?php if($bien['État']=="Bon etat"){ echo "checked";   }?> id="etat" value="Bon etat" />
                    <span class="glyphicon glyphicon-ok"></span>
                    </label>
                    <label class="control-label">Bon etat</label>
                    </label>
                    <br>
                    <label>
                    <label class="btn btn-success <?php if($bien['État']=="A renover"){ echo "active";   }?> ">
                    <input maxlength="100" type="radio" required="required" name="etat" <?php if($bien['État']=="A renover"){ echo "checked";   }?> checked id="etat" value="A renover" />
                    <span class="glyphicon glyphicon-ok"></span>
                    </label>
                    <label class="control-label">A renover</label>
                    </label>

                    </div></div>
                    </li>
                    <li>
                    <div class="well-sm ">
                <div class="btn-group" data-toggle="buttons">
                <h3> Type de bien</h3>
                    <label >
                    <label class="btn btn-success <?php if($bien['Type_de_bien']=="Appartements"){ echo "active" ;  }?>">
                    <input maxlength="100" type="radio" required="required"   name="typeb" id="typeb"<?php if($bien['Type_de_bien']=="Appartements"){ echo "checked" ;  }?> value="Appartements" />
                    <span class="glyphicon glyphicon-ok"></span>
                    </label>
                    <label class="control-label">Appartements</label>
                    </label>
                    <br>
                    <label >
                    <label class="btn btn-success <?php if($bien['Type_de_bien']=="Maisons"){ echo "active" ;  }?> ">
                    <input maxlength="100" type="radio" required="required" name="typeb" id="typeb" <?php if($bien['Type_de_bien']=="Maisons"){ echo "checked" ;  }?> value="Maisons" />
                    <span class="glyphicon glyphicon-ok"></span>
                    </label>
                    <label class="control-label">Maisons</label>
                    </label>
                    <br>
                    <label >
                    <label class="btn btn-success <?php if($bien['Type_de_bien']=="Villas & maisons de luxe"){ echo "active" ;  }?> ">
                    <input maxlength="100" type="radio" required="required" name="typeb" id="typeb" <?php if($bien['Type_de_bien']=="Villas & maisons de luxe"){ echo "checked" ;  }?> value="Villas & maisons de luxe" />
                    <span class="glyphicon glyphicon-ok"></span>
                    </label>
                    <label class="control-label"> Villas & maisons de luxe</label>
                    </label>
                    <br>
                    <label >
                    <label class="btn btn-success <?php if($bien['Type_de_bien']=="IMMOBILIER NEUF"){ echo "active" ;  }?> ">
                    <input maxlength="100" type="radio" required="required" name="typeb" id="typeb" <?php if($bien['Type_de_bien']=="IMMOBILIER NEUF"){ echo "checked" ;  }?> value="IMMOBILIER NEUF" />
                    <span class="glyphicon glyphicon-ok"></span>
                    </label>
                    <label class="control-label">IMMOBILIER NEUF</label>
                    </label>
                    </div></div>
                    </li>
                </div></div>
                </ul>
                <div class="form-group">
                    <label class="control-label">Address</label>
                    <input  maxlength="100" type="text" required="required" name="address" <?php if(isset($bien['Address'])){ echo "value='".$bien['Address']."'";   }?> id="address" class="form-control" placeholder="Address"  />
                </div>
                <div class="form-group">
                    <label class="control-label">Région</label>
                    <input maxlength="100" type="text" required="required" name="region" id="region" <?php if(isset($bien['Région'])){ echo "value='".$bien['Région']."'";   }?> class="form-control" placeholder="Région" />
                </div>
                <div class="form-group">
                    <label class="control-label">Ville</label>
                    <input maxlength="100" type="text" required="required"name="ville" id="ville" <?php if(isset($bien['Ville'])){ echo "value='".$bien['Ville']."'";   }?> class="form-control" placeholder="Ville" />
                </div>
                
                
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" id="pr" >Next</button>
            </div>
        </div>
    </div>
    
    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Step 2</h3>

                <div class="form-group">
<div class="col-md-6" style="font-size: 30;">
	    <div class="card" style="margin:50px 0;height: 100%;">
                <!-- Default panel contents -->
                <div class="card-header"></div>
            
                <ul class="list-group list-group-flush "> 
                    <li class="liste2" style="padding: 20;">
                    <i class="fas fa-couch"></i> Meublé 
                                <label class="switch ">
          <input type="checkbox" class="default" name="Meublé" <?php if(isset($bien['Meublé'])){ echo "checked";}?> value="1">
          <span class="slider round"></span>
        </label>
                    </li>
                    <li class="" style="padding: 20;">
                    <i class="fas fa-warehouse"></i> Garage
                                <label class="switch ">
          <input type="checkbox" class="default" name="Garage"<?php if(isset($bien['Garage'])){ echo "checked"; }?>  value="1">
          <span class="slider round"></span>
        </label>
                    </li>
                    <li class="" style="padding: 20;">
                    <i class="fas fa-tree"></i>  jardin
                                <label class="switch " >
          <input type="checkbox" class="default" name="jardin" <?php if(isset($bien['jardin'])){ echo "checked";}?> value="1">
          <span class="slider round"></span>
        </label>
                    </li>
                    <li class="" style="padding: 20;">
                    <i class="fas fa-swimming-pool"></i>  piscine
                               <label class="switch ">
          <input type="checkbox" class="default"  name="piscine" <?php if(isset($bien['piscine'])){ echo "checked";}?> value="1">
          <span class="slider round"></span>
        </label>
                    </li>
                </ul>
                <div class="form-group" >
                    <label class="control-label">nombre de chambre </label>
                    
                    <input maxlength="20" type="number" required="required" name="chambre" <?php if(isset($bien['nbchambre'])){ echo "value='".$bien['nbchambre']."'";   }?> id="ncham" class="form-control" placeholder="Enter le nombre de chambre" />
                    
                
                </div>
            </div> 
            </div>  
                </div>
                <div class="form-group">
         <h3>Images</h3>
        <div class="container">
       <fieldset class="form-group">
           <div><fieldset class="form-group">
        <a class="btn btn-default" href="javascript:void(0)" onclick="$('#pro-imagef').click()" style="color: beige;background-color: #428bca;">Upload Image de font</a>
        <input type="file" id="pro-imagef" name="filesf[]" style="display: none;" class="form-control" >
        </fieldset>
        <div class="preview-images-zone  p_i_z_f">    <?php if(isset($bien['imagebfont'])){ echo "<div class='preview-image preview-show-6'><div class='image-zone'><img id='pro-img-6' src='".$bien['imagebfont']."'><div class='image-cancelf' data-no='6'></div></div></div>";  }?>    </div>
        <a class="btn btn-default" href="javascript:void(0)" onclick="$('#pro-image').click()" style="color: beige;background-color: #428bca;">Upload Image</a>
        <input type="file" id="pro-image" name="files[]" style="display: none;" class="form-control" multiple>
        </fieldset>
        <div class="preview-images-zone p_i_z"> 
        <?php for ($r=0; $r <=5; $r++) { 
            $t='image'.$r;
            if(isset($bien[$t])){ echo "<div class='preview-image preview-show-".$r."'><div class='image-zone'><img id='pro-img-".$r."' src='".$bien[$t]."'><div class='image-cancelf' data-no='".$r."'></div></div></div>";  }
        }?> 
          </div>
          </div>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Step 3</h3>
                <div class="form-group" >
                    <label class="control-label">prix </label>
                    
                    <input maxlength="20" type="number" required="required" name="prix" <?php if(isset($bien['price'])){ echo "value='".$bien['price']."'";   }?> id="prix" class="form-control" placeholder="Enter le prix" />
                    <label id="dpr"></label>
                </div>
                <div class="form-group">
                    <label class="control-label">Téléphone </label>
                    
                    <input maxlength="20" type="number" required="required" name="telephone" id="telephone" <?php if(isset($bien['Téléphone'])){ echo "value='".$bien['Téléphone']."'";   }?> class="form-control" placeholder="Enter numero de telephone" />
                </div>
                <div class="form-group">
                    <label class="control-label">Titre</label>
                    <input maxlength="200" type="text" required="required" name="titre" id="titre"  <?php if(isset($bien['Titre'])){ echo "value='".$bien['Titre']."'";   }?> class="form-control" placeholder="Enter titre de l'annonce" />
                </div>
                <div class="form-group">
                    <label class="control-label">Description</label>
                    <textarea maxlength="5200" cols="30" rows="10" required="required" name="desc" id="desc" class="form-control"  placeholder="Enter votre description"  ><?php if(isset($bien['Description'])){ echo $bien['Description'];   }?></textarea>
                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button"  id="cl">Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-4">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Step 4</h3>
                <div class="output">
                <ul>
                <li>
                <h3> Transaction </h3>
                <label id="lv1"></label>
                </li><li>
                <h3> État</h3>
                <label id="lv2"></label>
                </li><li>
                <h3> Type de bien</h3>
                <label id="lv3"></label>
                </li>
                <li>
                <h3> Meublé </h3>
                <label id="lv8"></label>
                </li><li>
                <h3> Garage</h3>
                <label id="lv9"></label>
                </li><li>
                <h3> jardin</h3>
                <label id="lv10"></label>
                </li>
                <li>
                <h3>  piscine</h3>
                <label id="lv11"></label>
                </li>
                <li>
                <h3>Informations </h3>
                <label class="control-label">Nombre des chambres:</label>
                <label id="l12"></label>
                </li>
                </li>
                <li>
                <label class="control-label">Address:</label>
                <label id="l1"></label>
                </li><li>
                <label class="control-label">Région:</label>
                <label id="l3"></label>
                </li><li>
                <label class="control-label">Ville:</label>
                <label id="l4"></label>
                </li><li>
                <label class="control-label">Titre:</label>
                <label id="l5"></label>
                </li><li>
                <label class="control-label">Téléphone:</label>
                <label id="l6"></label>
                </li><li>
                <label class="control-label">Description:</label>
                <label id="l7"></label>
                </li>
                <li>
                <h3>Images font d'annonce:</h3>
                <div class="preview-images-zone p_i_z_f" id="imgfin"> <?php if(isset($bien['imagebfont'])){ echo "<div class='preview-image preview-show-6'><div class='image-zone'><img id='pro-img-6' src='".$bien['imagebfont']."'><div class='image-cancelf' data-no='6'></div></div></div>";  }?>  </div>
                </li>
                <li>
                <h3>Images:</h3>
                <div class="preview-images-zone p_i_z" id="imgfin"> <?php for ($r=0; $r <=5; $r++) { 
            $t='image'.$r;
            if(isset($bien[$t])){ echo "<div class='preview-image preview-show-".$r."'><div class='image-zone'><img id='pro-img-".$r."' src='".$bien[$t]."'><div class='image-cancelf' data-no='".$r."'></div></div></div>";  }
        }?> </div>
                </li>
              </ul>
                </div>
                </div>
                <button class="btn btn-success btn-lg pull-right" type="submit">enregistrer l'annonce</button>
            </div>
        </div>
    </div>
</form>
</div>
<?php
///footer
require_once("../footer/footer.php");
?>     