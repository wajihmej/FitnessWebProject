<?php session_start();
require("header.php");
include "../config.php";



$qid=$_POST['qid'];
$ata=$_POST['ata'];
$uid = $_SESSION["idclient"];

$sql="INSERT INTO answer(question_id,answer_detail,user_id,replied) VALUES(:qid,:ata,:uid,0)";
//echo $sql;
	        $db = config::getConnexion();
        try{
        
        $req=$db->prepare($sql);
    
        $req->bindValue(':qid',$qid);
        $req->bindValue(':ata',$ata);
        $req->bindValue(':uid',$uid);

        
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        

if($req)
{
	header("location:questionview.php?qid=$qid");
	}
	else
	{
		
		}

 require("footer.php")?>