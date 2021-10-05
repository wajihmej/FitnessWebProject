<?php session_start();
require_once("header.php");
ob_start();
 
 if ($_SESSION['client'] == ""){
 	header("location:Inscription.php");
 }
 
 ?>

 <script type="text/javascript">
	document.getElementById("aforum").className="active";
</script>

<?php
	$topic = ExecuteQuery ("SELECT * FROM topic");
	
	while ($r1 = mysqli_fetch_array($topic,MYSQLI_BOTH))
	{
			echo "<div class='heading'>$r1[topic_name]</div>";
		
			$stopic = ExecuteQuery ("SELECT * FROM subtopic WHERE topic_id=$r1[topic_id]");	
			
			while ($r2 = mysqli_fetch_array ($stopic,MYSQLI_BOTH) )
			{
				echo "<div class='box'>";
				echo "<div class='sub-heading'>
						<a href='questions.php?id=$r2[subtopic_id]'> $r2[subtopic_name]</a>
						
					</div>";
				echo "<p>$r2[subtopic_description]</p>";
				echo "</div>";
			}
	}
	
	
?>

 <?php include 'footer.php' ?>
