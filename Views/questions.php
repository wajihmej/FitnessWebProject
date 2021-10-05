<?php session_start();
	require("header.php");
	
	$id=$_GET["id"];
?>

<a href="question.php?stid=<?php echo $id ?>">Ask Question<img src="res/images/askq.jpg"  class='imagedel'/></a>
<hr />
<?php 
	
	$str="SELECT * FROM question, client WHERE question.user_id=client.id and subtopic_id=$id";
	$result=ExecuteQuery($str);
	
	$no_rows = mysqli_num_rows($result);
	
	if ($no_rows > 0)
	{
		while($row = mysqli_fetch_array($result,MYSQLI_BOTH))
		{
			$rowsc=ExecuteQuery("SELECT count(*) as counter from answer where question_id=$row[question_id]");
			$rowc = mysqli_fetch_array($rowsc,MYSQLI_BOTH);
			$count = $rowc['counter'];
			
			echo "<h4>";
			echo "<span class='box2'>";
			echo "<span class='head'><a href='questionview.php?qid=$row[question_id]' >$row[heading]</a> </span>";
			
			echo "</span>";
			echo "</h4>";
			
			echo "$row[question_detail] <span class='view2'>Views : $row[views], Replies :$count</span>";
			echo "<br/><br/>";
			
			echo "Asked by<br/>$row[nom] $row[prenom]";
		
			echo "<br/><div class='line'></div>";
			//echo  "<a href='answer.php?qid=$row[question_id]' class='reply'>REPLY</a>";
			
		}
	
		
	}
	
			

	else
	{
		echo "No questions at the moment";
	}
	
 

?>
<?php require("footer.php")?>