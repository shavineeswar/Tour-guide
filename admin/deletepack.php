<?php 
 
		require 'config.php';
		
		$recordid =$_GET['id'];
		
		$sql ="DELETE FROM package WHERE PackageID=$recordid";
		
		
		if(mysqli_query($con,$sql))
		{

			echo"<script>alert('Record deleted sucessfully')</script>";
			header("location:admin.php");
		}
		else
		{
			echo"<script>alert('ERROR: delete failed')</script>";
		}
 
 mysqli_close($con);
 
 ?>