<?PHP

include_once "../Controller/evenementC.php";
$evenementC=new EvenementC();
if (isset($_POST["id"])){
	$evenementC->supprimerEvenement($_POST["id"]);
	header('Location: events_list.php');
}

?>