<?php session_start();
 require("header.php");
include "../config.php";


$stid = $_POST['stid'];
$ta = $_POST['ta'];
$hd=$_POST['head'];
$uid = $_SESSION["idclient"];

$sql="INSERT INTO question ( `heading`,`question_detail`, `user_id`, `subtopic_id`) VALUES ( :hd,:ta,:uid,:stid);";
$result=ExecuteNonquery($sql);
	        $db = config::getConnexion();
        try{
        
        $req=$db->prepare($sql);
    
        $req->bindValue(':stid',$stid);
        $req->bindValue(':ta',$ta);
        $req->bindValue(':hd',$hd);
        $req->bindValue(':uid',$uid);

        
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        

if ($req == 1)
	header ("location:questions.php?id=$stid");

 require("footer.php")?>