<?php 
session_start();
/*session is started if you don't write this line can't use $_Session  global variable*/
unset($_SESSION["cin"]);
unset($_SESSION["coach"]);
unset($_SESSION["emailcoach"]);
unset($_SESSION["telcoach"]);
unset($_SESSION["adressecoach"]);
unset($_SESSION["sexecoach"]);
unset($_SESSION["categoriecoach"]);
unset($_SESSION["imagecoach"]);
unset($_SESSION["dernier_acccoach"]);
header("location: LoginCoach.php");
/*session deleted. if you try using this you've got an error*/
?>