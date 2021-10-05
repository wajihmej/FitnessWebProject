<?php 
	session_start();
	require("header.php");
?>
<script type="text/javascript">
	document.getElementById("auhome").className="active";
</script>

<h4><a href="que.php">My Posts</a>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="ans.php">My Answered Questions</a></h4>
<br>
<?php

	$sql="select * from question,client where question.user_id=client.id ORDER BY  datetime desc limit 0,5";
	
	$result=ExecuteQuery($sql);
	

	while($row = mysqli_fetch_array($result,MYSQLI_BOTH))
	{
					echo "<span class='box2'>";
			echo "<span class='head'><a href='questionview.php?qid=$row[question_id]' >$row[heading]</a></span>";

echo "		
      <div class='container'>
          <div class='reviews owl-carousel owl-theme'>
            <div class='review-single'><img class='img-circle' src='$row[image]' />
              <div class='review-text'>
                <p>$row[nom] $row[prenom]<br>
                  $row[question_detail]</p>
                <p>$row[datetime]</p>
              </div>
            </div>
          </div>
      </div>
                ";

		}
	
?>

<?php require("footer.php");?>