<?php


class user{
public $connection,$first_name,$last_name,$email,$phone,$location,$pasword,$image;
public $tr,$etat,$typeb,$address,$region,$ville,$Meublé,$Garage,$jardin,$piscine,$telephone,$titre,$desc,$price;
public $id_bien,$user_id;
public $message,$writer,$id_resever;

        public function __construct(){
            try{
                 $this->$connection=new PDO('mysql:host=localhost;dbname=sakeni;charset=utf8','devcherif','Maram_cherif123');
                 $this->$connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                }catch (Exception $e)
                {
                        die('Erreur:'. $e->getMessage());
                }
        }

        function login($user,$pass){
                $rqt=$this->$connection->prepare('SELECT  * FROM user Where email=? and  pasword=? ');
                $rqt->execute(array($user,$pass));
                while ($row = $rqt->fetch(PDO::FETCH_ASSOC)){
                        $array = $row;}
                if(!empty($array)){    

                        $rqtl=$this->$connection->prepare('UPDATE user set online=1 where id_user=? ');
                        $rqtl->execute(array($array['id_user']));

                        return $array['id_user'];
                }else{
                        return false;
                  
                }
        }


        function logout(){
                session_start();
                $rqt=$this->$connection->prepare('UPDATE user set online=0 where id_user=? ');
                $rqt->execute(array($_SESSION['id_user']));
        }
        
        function getcompte(){
                session_start();
                $rqt=$this->$connection->prepare('SELECT  * FROM user Where id_user=? ');
                $rqt->execute(array($_SESSION['id_user']));
                while ($row = $rqt->fetch(PDO::FETCH_ASSOC)){
                        $array = $row;}
                        return $array;
        }

        function getcomptebyid($id_user){
                $rqt=$this->$connection->prepare('SELECT  * FROM user Where id_user=? ');
                $rqt->execute(array($id_user));
                while ($row = $rqt->fetch(PDO::FETCH_ASSOC)){
                        $array = $row;}
                        return $array;
        
        }

//////////all_function//////// 
function ajouteuser($first_name,$last_name,$email,$phone,$location,$pasword,$image){
$rqt=$this->$connection->prepare('INSERT INTO user(first_name,last_name,email,phone,locationu,pasword,imageu,nb_annonce,date_create_compte) VALUES(?,?,?,?,?,?,?,?,sysdate())');
$rqt->execute(array($first_name,$last_name,$email,$phone,$location,$pasword,$image,0));
print_r($rqt->errorInfo()[2]); 
}
function modifeuser($first_name,$last_name,$email,$phone,$location,$pasword,$image){
        session_start();
     if ($image==null) {
        $rqt=$this->$connection->prepare('UPDATE user set first_name=?,last_name=?,email=?,phone=?,locationu=?,pasword=? where id_user=?');
        $rqt->execute(array($first_name,$last_name,$email,$phone,$location,$pasword,$_SESSION['id_user']));

        print_r($rqt->errorInfo()[2]); 
     }else{
        $rqt=$this->$connection->prepare('UPDATE user set first_name=?,last_name=?,email=?,phone=?,locationu=?,pasword=?,imageu=? where id_user=?');
        $rqt->execute(array($first_name,$last_name,$email,$phone,$location,$pasword,$image,$_SESSION['id_user']));

        print_r($rqt->errorInfo()[2]); 
     }
        
        }






function ajouteannonce($tr,$etat,$typeb,$address,$region,$ville,$Meublé,$Garage,$jardin,$piscine,$telephone,$titre,$desc,$price,$image,$id_v,array $images,$nbchambre){
        $rqt=$this->$connection->prepare('INSERT INTO bien(Transaction,État,Type_de_bien,Address,Région,Ville,Meublé,Garage,jardin,piscine,imagebfont,Téléphone,Titre,Description,price,njaime,dateannace,id_v,image1,image2,image3,image4,image5,disp,nbchambre) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,sysdate(),?,?,?,?,?,?,0,?)');
        $rqt->execute(array($tr,$etat,$typeb,$address,$region,$ville,$Meublé,$Garage,$jardin,$piscine,$image,$telephone,$titre,$desc,$price,0,$id_v,$images[0],$images[1],$images[2],$images[3],$images[4],$nbchambre));
        print_r($rqt->errorInfo()[2]); 

        }
        function updateannense($tr,$etat,$typeb,$address,$region,$ville,$Meublé,$Garage,$jardin,$piscine,$telephone,$titre,$desc,$price,$image,array $images,$id_bien,$nbchambre){
                if(isset($price)){
                        $rqt=$this->$connection->prepare('UPDATE bien set pasprice=price where id_bien=?');
                        $rqt->execute(array($id_bien));
                }

                if (empty($images[0])) {
                        $rqt=$this->$connection->prepare('UPDATE bien set Transaction=?,État=?,Type_de_bien=?,Address=?,Région=?,Ville=?,Meublé=?,Garage=?,jardin=?,piscine=?,imagebfont=?,Téléphone=?,Titre=?,Description=?,price=?,dateannace=sysdate(),nbchambre=? where id_bien=?');
                        $rqt->execute(array($tr,$etat,$typeb,$address,$region,$ville,$Meublé,$Garage,$jardin,$piscine,$image,$telephone,$titre,$desc,$price,$nbchambre,$id_bien));        
                      }else{
                              if (!isset($image)) {
                                $rqt=$this->$connection->prepare('UPDATE bien set Transaction=?,État=?,Type_de_bien=?,Address=?,Région=?,Ville=?,Meublé=?,Garage=?,jardin=?,piscine=?,Téléphone=?,Titre=?,Description=?,price=?,dateannace=sysdate(),nbchambre=? where id_bien=?');
                                $rqt->execute(array($tr,$etat,$typeb,$address,$region,$ville,$Meublé,$Garage,$jardin,$piscine,$telephone,$titre,$desc,$price,$nbchambre,$id_bien));     
                              }else{
                                $rqt=$this->$connection->prepare('UPDATE bien set Transaction=?,État=?,Type_de_bien=?,Address=?,Région=?,Ville=?,Meublé=?,Garage=?,jardin=?,piscine=?,imagebfont=?,Téléphone=?,Titre=?,Description=?,price=?,dateannace=sysdate(),image1=?,image2=?,image3=?,image4=?,image5=?,nbchambre=? where id_bien=?');
                                $rqt->execute(array($tr,$etat,$typeb,$address,$region,$ville,$Meublé,$Garage,$jardin,$piscine,$image,$telephone,$titre,$desc,$price,$images[0],$images[1],$images[2],$images[3],$images[4],$nbchambre,$id_bien));
                              }
                      }
                
                print_r($rqt->errorInfo()[2]); 
        
                }
                function disp($id_bien,$d){
                        $rqt=$this->$connection->prepare('UPDATE bien set disp=? where id_bien=?');
                        $rqt->execute(array($d,$id_bien));
                
                        }

                function ajoutecontact($id_user,$nom,$email,$sujet,$tel,$message){
                        $rqt=$this->$connection->prepare('INSERT INTO contact(id_user,nom,email,suject ,tel ,message ,date_contact ) VALUES(?,?,?,?,?,?,sysdate())');
                        $rqt->execute(array($id_user,$nom,$email,$sujet,$tel,$message));
                        print_r($rqt->errorInfo()[2]); 
                
                        }

function ajoutemessage($id_bien,$message,$writer,$id_resever){
       
        $rqtb=$this->$connection->prepare('SELECT  id_v FROM bien Where id_bien=?');
        $rqtb->execute(array($id_bien));
        $b=$rqtb->fetch();
        if($writer!=$b['id_v']){
        $id_resever=$b['id_v'];
        }
        $rqtv=$this->$connection->prepare('UPDATE disc set vu=1 where send_id=? and res_id=?');
        $rqtv->execute(array($writer,$id_resever));
        $rqt=$this->$connection->prepare('INSERT INTO disc(id_bien,messages,vu,send_id,res_id,v_id,date,time) VALUES(?,?,?,?,?,?,sysdate(),CURRENT_TIMESTAMP)');
        $rqt->execute(array($id_bien,$message,0,$writer,$id_resever,$b['id_v']));

        
        print_r($rqt->errorInfo()[2]); 

}

function getmessage($id_bien){
        $user_id= $_SESSION['id_user'];
        $rqt=$this->$connection->prepare('SELECT  * FROM disc Where id_bien=? and (res_id=? or send_id=?)');
        $rqt->execute(array($id_bien,$user_id,$user_id)); 
        while ($row = $rqt->fetch(PDO::FETCH_ASSOC)){
        $array[] = $row;}
        return $array;

}
function getmessages(){
        session_start();
        $user_id= $_SESSION['id_user'];
        $rqt=$this->$connection->prepare('SELECT  * FROM disc Where res_id=? and vu=0 ');
        $rqt->execute(array($user_id)); 
        while ($row = $rqt->fetch(PDO::FETCH_ASSOC)){
        $array[] = $row;}
        return $array;

}

function getannoceinfo($id_bien){
        $rqt=$this->$connection->prepare('SELECT  * FROM bien Where id_bien=?');
        $rqt->execute(array($id_bien));
        while ($row = $rqt->fetch(PDO::FETCH_ASSOC)){
                $array= $row;}
                return $array;
}
function getannoceinfom($id_bien,$id_user){
        $rqt=$this->$connection->prepare('SELECT  * FROM bien Where id_bien=? and id_v=?');
        $rqt->execute(array($id_bien,$id_user));
        while ($row = $rqt->fetch(PDO::FETCH_ASSOC)){
                $array= $row;}
                if(!empty($array)){    
                        return $array;
                }else{
                        return false;
                  
                }
}

function getuserinfo($id_bien){
        $rqt=$this->$connection->prepare('SELECT  * FROM bien Where id_bien=? and id_v=?');
        $rqt->execute(array($id_bien,$id_user));
        while ($row = $rqt->fetch(PDO::FETCH_ASSOC)){
                $array= $row;}
                if(!empty($array)){    
                        return $array;
                }else{
                        return false;
                  
                }
}




function getlisetvender($id_user,$Appartements,$Maisons,$Villasmaisonsdeluxe,$Nouveau,$Bonetat,$Arenover,$Location,$Locationvacance,$Vente,$Région ,$Ville ,$Meublé,$Garage,$jardin,$piscine,$pmax,$pmin,$imneuf,$nb){
        $tab=null;
        $tab=[];
        $q="SELECT * FROM bien where id_v=? ";
        array_push($tab,$id_user);
      
        if(isset($pmin)||isset($pmax)){
                if(isset($pmin)&&isset($pmax)){
                 $q=$q ." and (price>?  and price<=?) ";
                 array_push($tab,$pmin,$pmax);
                }else{
               if (isset($pmin)) {
                $q=$q ." and ( price>? ) ";
                array_push($tab,$pmin);
               }
               if (isset($pmax)) {
                $q=$q ." and ( price<=? ) ";
                array_push($tab,$pmax);
               }
               }         
        }
        if( isset($Location)||isset($Locationvacance)||isset($Vente)){
                if (!empty($tab)) {
                        $q=$q ." and "; 
                }
                $q=$q ." ( Transaction =? or Transaction =? or Transaction =?  )";
                array_push($tab,$Location,$Locationvacance,$Vente);
        }
        if (isset($Nouveau)||isset($Bonetat)||isset($Arenover)) {
                if (!empty($tab)) {
                        $q=$q ." and "; 
                }
                $q=$q ." (État =? or État =? or État =? ) ";
                array_push($tab,$Nouveau,$Bonetat,$Arenover);
        }
        if (isset($Appartements)||isset($Maisons)||isset($Villasmaisonsdeluxe)||isset($imneuf)) {
                if (!empty($tab)) {
                        $q=$q ." and "; 
                }
                $q=$q ."  (Type_de_bien =? or Type_de_bien =? or Type_de_bien =? or Type_de_bien =?)  ";
                array_push($tab,$Appartements,$Maisons,$Villasmaisonsdeluxe,$imneuf);
        }
        if (isset($Région)||isset($Ville)){
                if (!empty($tab)) {
                        $q=$q ." and "; 
                }
                $q=$q ." Région =?  or  Ville =?  ";
                array_push($tab,$Région,$Ville);

               }
               if (isset($nb) ){
                if (!empty($tab)) {
                        $q=$q ." and "; 
                }
                $q=$q ." nbchambre=?  ";
                array_push($tab,$nb);
               }
               if (isset($Meublé) ){
                if (!empty($tab)) {
                        $q=$q ." and "; 
                }
                $q=$q ." Meublé=?  ";
                array_push($tab,$Meublé);
               }
               if (isset($Garage)) {
                if (!empty($tab)) {
                        $q=$q ." and "; 
                }
                $q=$q ."   Garage=?  ";
                array_push($tab,$Garage);
               }if (isset($jardin)) {
                if (!empty($tab)) {
                        $q=$q ." and "; 
                }
                $q=$q ."  jardin=?  ";
                array_push($tab,$jardin);
               }if (isset($piscine) ){
                if (!empty($tab)) {
                        $q=$q ." and "; 
                }
                $q=$q ." piscine=? ";
                array_push($tab,$piscine);
               }
      $rqt=$this->$connection->prepare($q);
       $rqt->execute($tab);   
       while ($row = $rqt->fetch(PDO::FETCH_ASSOC)){  $array[] = $row;  }
                return $array;

       
 
}


function fav($Appartements,$Maisons,$Villasmaisonsdeluxe,$Nouveau,$Bonetat,$Arenover,$Location,$Locationvacance,$Vente,$Région ,$Ville ,$Meublé,$Garage,$jardin,$piscine,$pmax,$pmin,$imneuf,$nb){
        $q="SELECT * FROM bien join favori on(id_bien_favored=id_bien) where disp=0 and ";
        $tab=null;
        $tab=[];
        if(isset($pmin)||isset($pmax)){
                if(isset($pmin)&&isset($pmax)){
                 $q=$q ." (price>?  and price<=?) ";
                 array_push($tab,$pmin,$pmax);
                }else{
               if (isset($pmin)) {
                $q=$q ." ( price>? ) ";
                array_push($tab,$pmin);
               }
               if (isset($pmax)) {
                $q=$q ." ( price<=? ) ";
                array_push($tab,$pmax);
               }
               }         
        }
        if( isset($Location)||isset($Locationvacance)||isset($Vente)){
                if (!empty($tab)) {
                        $q=$q ." and "; 
                }
                $q=$q ." ( Transaction =? or Transaction =? or Transaction =?  )";
                array_push($tab,$Location,$Locationvacance,$Vente);
        }
        if (isset($Nouveau)||isset($Bonetat)||isset($Arenover)) {
                if (!empty($tab)) {
                        $q=$q ." and "; 
                }
                $q=$q ." (État =? or État =? or État =? ) ";
                array_push($tab,$Nouveau,$Bonetat,$Arenover);
        }
        if (isset($Appartements)||isset($Maisons)||isset($Villasmaisonsdeluxe)||isset($imneuf) ) {
                if (!empty($tab)) {
                        $q=$q ." and "; 
                }
                $q=$q ."  (Type_de_bien =? or Type_de_bien =? or Type_de_bien =? or  Type_de_bien =? )  ";
                array_push($tab,$Appartements,$Maisons,$Villasmaisonsdeluxe,$imneuf);
        }
        if (isset($Région)||isset($Ville)){
                if (!empty($tab)) {
                        $q=$q ." and "; 
                }
                $q=$q ." Région =?  or  Ville =?  ";
                array_push($tab,$Région,$Ville);

               }
               if (isset($nb) ){
                if (!empty($tab)) {
                        $q=$q ." and "; 
                }
                $q=$q ." nbchambre=?  ";
                array_push($tab,$nb);
               }
               if (isset($Meublé) ){
                if (!empty($tab)) {
                        $q=$q ." and "; 
                }
                $q=$q ." Meublé=?  ";
                array_push($tab,$Meublé);
               }if (isset($Garage)) {
                if (!empty($tab)) {
                        $q=$q ." and "; 
                }
                $q=$q ."   Garage=?  ";
                array_push($tab,$Garage);
               }if (isset($jardin)) {
                if (!empty($tab)) {
                        $q=$q ." and "; 
                }
                $q=$q ."  jardin=?  ";
                array_push($tab,$jardin);
               }if (isset($piscine) ){
                if (!empty($tab)) {
                        $q=$q ." and "; 
                }
                $q=$q ." piscine=? ";
                array_push($tab,$piscine);
               }
      $rqt=$this->$connection->prepare($q);
       $rqt->execute($tab);   
       while ($row = $rqt->fetch(PDO::FETCH_ASSOC)){  $array[] = $row;  }
                return $array;

       
 
}
function getliset($Appartements,$Maisons,$Villasmaisonsdeluxe,$Nouveau,$Bonetat,$Arenover,$Location,$Locationvacance,$Vente,$Région ,$Ville ,$Meublé,$Garage,$jardin,$piscine,$pmax,$pmin,$imneuf,$nb){
        $q="SELECT * FROM bien where disp=0 and ";
        $tab=null;
        $tab=[];
        if(isset($pmin)||isset($pmax)){
                if(isset($pmin)&&isset($pmax)){
                 $q=$q ." (price>?  and price<=?) ";
                 array_push($tab,$pmin,$pmax);
                }else{
               if (isset($pmin)) {
                $q=$q ." ( price>? ) ";
                array_push($tab,$pmin);
               }
               if (isset($pmax)) {
                $q=$q ." ( price<=? ) ";
                array_push($tab,$pmax);
               }
               }         
        }
        if( isset($Location)||isset($Locationvacance)||isset($Vente)){
                if (!empty($tab)) {
                        $q=$q ." and "; 
                }
                $q=$q ." ( Transaction =? or Transaction =? or Transaction =?  )";
                array_push($tab,$Location,$Locationvacance,$Vente);
        }
        if (isset($Nouveau)||isset($Bonetat)||isset($Arenover)) {
                if (!empty($tab)) {
                        $q=$q ." and "; 
                }
                $q=$q ." (État =? or État =? or État =? ) ";
                array_push($tab,$Nouveau,$Bonetat,$Arenover);
        }
        if (isset($Appartements)||isset($Maisons)||isset($Villasmaisonsdeluxe)||isset($imneuf) ) {
                if (!empty($tab)) {
                        $q=$q ." and "; 
                }
                $q=$q ."  (Type_de_bien =? or Type_de_bien =? or Type_de_bien =? or  Type_de_bien =? )  ";
                array_push($tab,$Appartements,$Maisons,$Villasmaisonsdeluxe,$imneuf);
        }
        if (isset($Région)||isset($Ville)){
                if (!empty($tab)) {
                        $q=$q ." and "; 
                }
                $q=$q ." Région =?  or  Ville =?  ";
                array_push($tab,$Région,$Ville);

               }
               if (isset($nb) ){
                if (!empty($tab)) {
                        $q=$q ." and "; 
                }
                $q=$q ." nbchambre=?  ";
                array_push($tab,$nb);
               }
               if (isset($Meublé) ){
                if (!empty($tab)) {
                        $q=$q ." and "; 
                }
                $q=$q ." Meublé=?  ";
                array_push($tab,$Meublé);
               }if (isset($Garage)) {
                if (!empty($tab)) {
                        $q=$q ." and "; 
                }
                $q=$q ."   Garage=?  ";
                array_push($tab,$Garage);
               }if (isset($jardin)) {
                if (!empty($tab)) {
                        $q=$q ." and "; 
                }
                $q=$q ."  jardin=?  ";
                array_push($tab,$jardin);
               }if (isset($piscine) ){
                if (!empty($tab)) {
                        $q=$q ." and "; 
                }
                $q=$q ." piscine=? ";
                array_push($tab,$piscine);
               }
      $rqt=$this->$connection->prepare($q);
       $rqt->execute($tab);   
       while ($row = $rqt->fetch(PDO::FETCH_ASSOC)){  $array[] = $row;  }
                return $array;

       
 
}
function like($user,$idbien){
        $rqt=$this->$connection->prepare('INSERT INTO userlike(id_user, id_bien_liked ) VALUES(?,?)');
        $rqt->execute(array($user,$idbien));
        print_r($rqt->errorInfo()[2]); 

        }
 function favori($user,$idbien){
                $rqt=$this->$connection->prepare('INSERT INTO favori(id_user, id_bien_favored ) VALUES(?,?)');
                $rqt->execute(array($user,$idbien));
                print_r($rqt->errorInfo()[2]); 
        
                }
 function vu($idm){
                        $rqt=$this->$connection->prepare('UPDATE disc set vu=1 where IDM=?');
                        $rqt->execute(array($idm));
                        print_r($rqt->errorInfo()[2]); 
                
                        }



    function likeornot($id_bien){
        session_start();
                $rqt=$this->$connection->prepare('SELECT  * FROM userlike Where id_bien_liked=? and  id_user=? ');
                $rqt->execute(array($id_bien,$_SESSION['id_user']));
                while ($row = $rqt->fetch(PDO::FETCH_ASSOC)){
                        $array = $row;}
                if(!empty($array)){   
                        return True;
                }else{
                        return false;
                  
                }
        }
        function favornot($id_bien){
                        session_start();
                        $rqt=$this->$connection->prepare('SELECT  * FROM favori Where id_bien_favored=? and  id_user=? ');
                        $rqt->execute(array($id_bien,$_SESSION['id_user']));
                        while ($row = $rqt->fetch(PDO::FETCH_ASSOC)){
                                $array = $row;}
                        if(!empty($array)){   
                                return True;
                        }else{
                                return false;
                          
                        }
                }



function getlisetnav(){
        $rqtl=$this->$connection->prepare('SELECT * FROM bien where Transaction=? and disp=0 ORDER BY `njaime` DESC');
        $rqtl->execute(array("Location")); 
        $rqtlv=$this->$connection->prepare('SELECT * FROM bien where Transaction=? and disp=0 ORDER BY `njaime` DESC');
        $rqtlv->execute(array("Location vacance")); 
        $rqtv=$this->$connection->prepare('SELECT * FROM bien where Transaction=? and disp=0 ORDER BY `njaime` DESC');
        $rqtv->execute(array("Vente"));  
        $rqtin=$this->$connection->prepare('SELECT * FROM bien where Type_de_bien=? and disp=0 ORDER BY `njaime` DESC');
        $rqtin->execute(array("IMMOBILIER NEUF"));  
        for ($i=0; $i <=2 ; $i++) { 
                $row = $rqtl->fetch(PDO::FETCH_ASSOC);
                $array[] = $row; 

        } 
        for ($i=0; $i <=2 ; $i++) { 
                $row = $rqtlv->fetch(PDO::FETCH_ASSOC);
                $array[] = $row; 

        } 
        for ($i=0; $i <=2 ; $i++) { 
                $row = $rqtv->fetch(PDO::FETCH_ASSOC);
                $array[] = $row; 

        } 
        for ($i=0; $i <=2 ; $i++) { 
                $row = $rqtin->fetch(PDO::FETCH_ASSOC);
                $array[] = $row; 

        } 
       
                return $array;
 
}




function getliset1(){
        $rqt=$this->$connection->prepare('SELECT * FROM bien where disp=0 ORDER BY `njaime` DESC');
        $rqt->execute(array());   
        while ($row = $rqt->fetch(PDO::FETCH_ASSOC)){
                $array[] = $row;  }
                return $array;
 
}

function getliset1ma(){
        $rqt=$this->$connection->prepare('SELECT * FROM bien where id_v=? ORDER BY `njaime` DESC');
        session_start();
        $rqt->execute(array( $_SESSION['id_user']));   
        while ($row = $rqt->fetch(PDO::FETCH_ASSOC)){
                $array[] = $row;  }
                return $array;
 
}
function favliste(){
        $rqt=$this->$connection->prepare('SELECT * FROM bien join favori on(id_bien_favored=id_bien) where disp=0  and id_user=? ');
        session_start();
        $rqt->execute(array($_SESSION['id_user']));   
        while ($row = $rqt->fetch(PDO::FETCH_ASSOC)){
                $array[] = $row;  }
                return $array;
 
}
function getvilleregien(){
        $rqt=$this->$connection->prepare('SELECT DISTINCT Région,Ville FROM bien ');
        $rqt->execute(array( ));   
        while ($row = $rqt->fetch(PDO::FETCH_ASSOC)){
                $array[] = $row;  }
                return $array;
 
}







function getmessagenull(){
        $user_id= $_SESSION['id_user'];
        $rqt=$this->$connection->prepare('SELECT  * FROM disc Where  res_id=? and vu=0');
        $rqt->execute(array($user_id)); 
        while ($row = $rqt->fetch(PDO::FETCH_ASSOC)){
        $array[] = $row;}
        return "Messages (".count($array).")";

       
}











}




class workerThread  {
public function __construct(){
        try{
                $this->$connection=new PDO('mysql:host=localhost;dbname=sakeni;charset=utf8','devcherif','Maram_cherif123');
                $this->$connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
               }catch (Exception $e)
               {
                       die('Erreur:'. $e->getMessage());
               }
}


function getmessagenull(){
        while(true){
         sleep(1);
        session_start();
        $user_id= $_SESSION['id_user'];
        $rqt=$this->$connection->prepare('SELECT  * FROM disc Where  res_id=? and vu=0');
        $rqt->execute(array($user_id)); 
        while ($row = $rqt->fetch(PDO::FETCH_ASSOC)){
        $array[] = $row;}
        echo count($array);

}
}


}




?>