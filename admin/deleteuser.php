<?php

	require 'config.php';

	$recordID=$_GET['id'];
	
	$sql = "DELETE FROM user WHERE UserId='$recordID'";
	
	
	if(mysqli_query($con,$sql))
	{
		echo "<script> alert ('Record delete successfully')</script>";
		header("Location:admin.php");
	}
	else 
	{
		echo "<script> alert ('Error in deleting the record')</script>";
	}		
	
	mysqli_close($con);
	
	
	
?>