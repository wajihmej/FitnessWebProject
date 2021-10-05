<?php session_start();
require("header.php");
?>
<?php 
	$uto=$_POST['uto'];
	$tt=$_POST['tt'];
	
	$sql="INSERT INTO chatmaster (user_id_from,user_id_to) values ($_SESSION[idclient],$uto)";
	$result = ExecuteNonQuery($sql);
	$sql = "SELECT MAX(chat_id) as cid FROM chatmaster";
	$row = mysqli_fetch_array (ExecuteQuery ($sql),MYSQLI_BOTH);
	$cid = $row['cid'];
	
	
	$sql="INSERT INTO chat (user_id, chat_id, message) values ($_SESSION[idclient],$cid,'$tt')";
	
	$result += ExecuteNonQuery($sql);

	if ($result == 2)
		header("location:messaged.php");	
?>
<?php require("footer.php")?>