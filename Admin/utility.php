<?php
error_reporting(1);
	function ExecuteQuery ($SQL)
	{	
		$con=mysqli_connect ("localhost", "root","mysql","Projet_web");
		
		$rows = mysqli_query ($con,$SQL);
		
		mysqli_close ();
		
		return $rows;
	}
	
	function ExecuteNonQuery ($SQL)
	{
		$con=mysqli_connect ("localhost", "root","mysql","Projet_web");
		
		$result = mysqli_query ($con,$SQL);
		
		mysqli_close ();
		
		return $result;
	}
?>