<?php 
	session_start();
	require("header.php");
	echo "<h4>My Question<img src='res/images/askq.jpg'  class='imagedel'/></h4>";
?>
<?php

$sql="SELECT * from question where user_id=$_SESSION[idclient]";
$result=ExecuteQuery($sql);
	
		while($row = mysqli_fetch_array($result,MYSQLI_BOTH))
		{
		
		echo "<span class='box2'>";
		echo "<span class='head'><a href='questionview.php?qid=$row[question_id]'><h4>$row[heading]</h4></a></span>";
		echo "</span>";
		echo  "<br/>";
		echo $row['question_detail'];
		echo  "<br/>";
		
		echo $row['datetime'];
		echo "<div class='line'></div>";
				

		}

?>
<?php require("footer.php")?>