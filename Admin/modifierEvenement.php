<?PHP
include_once "../Model/evenement.php";
include_once "../Controller/evenementC.php";

session_start();
if ($_POST['modifier']){
    $evenement=new Evenement($_POST['nom'],$_POST['img'],$_POST['date_debut'],$_POST['date_fin'],$_POST['descrip']);
    $evenementC= new EvenementC();
    $evenementC->modifierEvenement($evenement,$_POST['id_ini']);
    header('Location: events_list.php');
}	
?>