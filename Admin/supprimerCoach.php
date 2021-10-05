<?PHP
include "../Controller/CoachC.php";


$coachC=new CoachC();
if (isset($_POST["cin"])){
	$coachC->supprimerCoach($_POST["cin"]);
	header('Location: AfficherCoachs.php');
}

?>