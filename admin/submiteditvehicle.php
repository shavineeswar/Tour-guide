<?php 
	
			require 'config.php';
	
	
	$id = $_POST["vehicleid"];
	$brand = $_POST['brand'];
	$type = $_POST['type']; 
 	$price = $_POST['price'];
	$apassengers = $_POST['apassengers']; 
	$lsuitcases = $_POST['lsuitcases']; 
	$doors = $_POST['doors']; 	
	
	$sql ="UPDATE vehicle SET brand='$brand' ,  type='$type' , price='$price' , apassengers='$apassengers' , lsuitcases='$lsuitcases' , doors='$doors'   WHERE vehicle_id='$id' ";
	
	if(mysqli_query($con,$sql))
	{
		echo "<script>alert('Record updated sucessfully')</script>";
		header("location:admin.php");
	}
	else
	{
		echo"<script> alert('Error:could not update')</script>";
	}
	
	mysqli_close($con);
 ?>	