<?PHP

include_once "../Controller/participationC.php";
$participation1C=new ParticipationC();
if (isset($_POST["id"])){
	$participation1C->supprimerParticipation($_POST["id"]);
	header('Location: ListeParticipation.php');
}

?>