<?php 
include "../config.php";
class CoachC{

    public function afficher($coach){
        $id=$coach->getid();
        $nom=$coach->getNom();
        $prenom=$coach->getPrenom();
        $email=$coach->getEmail();
        $mdp=$coach->getMdp();

}    
    
public function affichercoachs(){
    $sql="SELECT * From coach";
    $db=config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch(Exception $e){
        die('Erreur:' .$e->getMessage());
    }
}
    function ajouterCoachToken($cin,$token){
        $sql="UPDATE coach SET mdp=:token WHERE cin=:cin";
        $db = config::getConnexion();
        try{
        
        $req=$db->prepare($sql);
    
        $req->bindValue(':cin',$cin);
        $req->bindValue(':token',password_hash($token, PASSWORD_DEFAULT));

        
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
    }

    function recupererCoach($cin){
        $sql="SELECT * from coach where cin=$cin";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function ajouterCoachDernieracc($cin){
        $sql="UPDATE coach SET dernier_acc=now() WHERE cin=:cin";
        $db = config::getConnexion();
        try{
        
        $req=$db->prepare($sql);
    
        $req->bindValue(':cin',$cin);

        
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
    }

        function recupereremail($email){
        $sql="SELECT * from coach where email=:email";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
        $req->bindValue(':email',$email);
        $req->execute();
        $res=$req->fetchAll();
        return $res;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function modifierCoachPwd($coach,$cin){
        $sql="UPDATE coach SET nom=:nom,prenom=:prenom,email=:email,mdp=:mdp,tel=:tel,adresse=:adresse,sexe=:sexe,date_nais=:date_nais,categorie=:categorie WHERE cin=:cin";
        
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);
        $nom=$coach->getNom();
        $prenom=$coach->getPrenom();
        $email=$coach->getEmail();
        $mdp=password_hash($coach->getMdp(), PASSWORD_DEFAULT);
        $tel=$coach->getTel();
        $adresse=$coach->getAdresse();
        $sexe=$coach->getSexe();
        $date_nais=$coach->getDateNais();
        $categorie=$coach->getCategorie();   
        $datas = array(':cin'=>$cin, ':nom'=>$nom, ':prenom'=>$prenom, ':email'=>$email, ':mdp'=>$mdp,':tel'=>$tel);
        $req->bindValue(':cin',$cin);
        $req->bindValue(':prenom',$prenom);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':email',$email);
        $req->bindValue(':mdp',$mdp);
        $req->bindValue(':tel',$tel);
        $req->bindValue(':adresse',$adresse);
        $req->bindValue(':sexe',$sexe);
        $req->bindValue(':date_nais',$date_nais);
        $req->bindValue(':categorie',$categorie);
        
            $s=$req->execute();
            
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }
        function modifierCoach($coach,$cin){
        $sql="UPDATE coach SET nom=:nom,prenom=:prenom,email=:email,tel=:tel,adresse=:adresse,sexe=:sexe,date_nais=:date_nais,categorie=:categorie WHERE cin=:cin";
        
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);
        $nom=$coach->getNom();
        $prenom=$coach->getPrenom();
        $email=$coach->getEmail();
        $tel=$coach->getTel();
        $adresse=$coach->getAdresse();
        $sexe=$coach->getSexe();
        $date_nais=$coach->getDateNais();
        $categorie=$coach->getCategorie();   
        $datas = array(':cin'=>$cin, ':nom'=>$nom, ':prenom'=>$prenom, ':email'=>$email,':tel'=>$tel);
        $req->bindValue(':cin',$cin);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prenom',$prenom);
        $req->bindValue(':email',$email);
        $req->bindValue(':tel',$tel);
        $req->bindValue(':adresse',$adresse);
        $req->bindValue(':sexe',$sexe);
        $req->bindValue(':date_nais',$date_nais);
        $req->bindValue(':categorie',$categorie);
            $s=$req->execute();
            
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
  die;
        }
        
    }

public function ajoutercoachs($coach){
    $sql="insert into coach(cin,nom,prenom,email,mdp,tel,adresse,sexe,date_nais,categorie) values(:cin,:nom,:prenom,:email,:mdp,:tel,:adresse,:sexe,:date_nais,:categorie)";
    $db=config::getConnexion();
    try{
    $req=$db->prepare($sql);
    $cin=$coach->getCin();
    $prenom=$coach->getPrenom();
    $nom=$coach->getNom();
    $email=$coach->getEmail();
    $mdp=password_hash($coach->getMdp(), PASSWORD_DEFAULT);
    $tel=$coach->getTel();
    $adresse=$coach->getAdresse();
    $sexe=$coach->getSexe();
    $date_nais=$coach->getDateNais();
    $categorie=$coach->getCategorie();
    $req->bindValue(':cin',$cin);
    $req->bindValue(':prenom',$prenom);
    $req->bindValue(':nom',$nom);
    $req->bindValue(':email',$email);
    $req->bindValue(':mdp',$mdp);
    $req->bindValue(':tel',$tel);
    $req->bindValue(':adresse',$adresse);
    $req->bindValue(':sexe',$sexe);
    $req->bindValue(':date_nais',$date_nais);
    $req->bindValue(':categorie',$categorie);
    $req->execute();
    }
    catch(Exception $e){
        die('Erreur:' .$e->getMessage());
    }
    
}
public function supprimerCoach($cin){
    $sql="DELETE FROM coach where cin=:cin";
    $db=config::getConnexion();
    try{
    $req=$db->prepare($sql);
    $req->bindValue(':cin',$cin);
    $req->execute();
    }
    catch(Exception $e){
        die('Erreur:' .$e->getMessage());
    }
    
}

public function updatecoach($cin){
    $sql="UPDATE coach where cin=:cin";
    $db=config::getConnexion();
    try{
    $req=$db->prepare($sql);
    $req->bindValue(':cin',$cin);
    $req->execute();
    }
    catch(Exception $e){
        die('Erreur:' .$e->getMessage());
    }
    
}

            //chya3mel update lil immage ama fil asel yajouti fil path
    function ajouterCoachimg($email,$image){
        $sql="UPDATE coach SET image=:image WHERE email=:email";
        $db = config::getConnexion();
        try{
        
        $req=$db->prepare($sql);
    
        $req->bindValue(':email',$email);
        $req->bindValue(':image',$image);

        
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
    }
}
?>