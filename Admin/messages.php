<?php session_start();
 require("header.php");
?>
<script type="text/javascript">
	document.getElementById("amessage").className="active";
</script>


<a href="search.php">Send New Message</a>
<hr/>

<?php
	//first fetch whom u have send chats
	
	$sql = "SELECT chat_id, user_id_from, user_id_to, nom FROM Chatmaster, admin WHERE chatmaster.user_id_to=admin.id AND chatmaster.user_id_from=$_SESSION[id]";
	
	$rows = ExecuteQuery ($sql);
	
	while ($row = mysqli_fetch_array($rows,MYSQLI_BOTH))
	{
		echo "<a href='readmsg.php?id=$row[chat_id]'>$row[nom]</a>";
		
		$chatrow = mysqli_fetch_array (ExecuteQuery ("SELECT * FROM chat WHERE chat_id=$row[chat_id] ORDER BY cdatetime DESC"),MYSQLI_BOTH);
		
		if ($chatrow)
		{
			echo "<br/><br/> $chatrow[message]";
		}
		
				echo "<hr style='border-top:1px solid #c3c3c3; border-bottom:1px solid white'/>";
	}
	
	
	// now fetch those that have sent chats to you
	
	$sql = "SELECT chat_id, user_id_from, user_id_to, fullname FROM Chatmaster, user WHERE chatmaster.user_id_from=user.user_id AND chatmaster.user_id_to=$_SESSION[id]";
	
	$rows = ExecuteQuery ($sql);
	
	while ($row = mysqli_fetch_array($rows,MYSQLI_BOTH))
	{
		echo "<a href='readmsg.php?id=$row[chat_id]'>$row[nom]</a>";
	
		
		$chatrow = mysqli_fetch_array (ExecuteQuery ("SELECT * FROM chat WHERE chat_id=$row[chat_id] ORDER BY cdatetime DESC"),MYSQLI_BOTH);
		
		if ($chatrow)
		{
			echo "<br/><br/> $chatrow[message]";
			
		}
		
				echo "<hr style='border-top:1px solid #c3c3c3; border-bottom:1px solid white'/>";
	}
?>

<?php require("footer.php")?>