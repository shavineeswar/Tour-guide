<?php 
	
			require 'config.php';
	
	
	$pid = $_POST['pid'];
	$Name = $_POST['Name'];
	$Route = $_POST['Route']; 
 	$Highlights = $_POST['Highlights'];
	$days = $_POST['days']; 
	$nights = $_POST['nights']; 
	$price = $_POST['price']; 	
	
	$sql ="UPDATE package SET Name='$Name' ,  Route='$Route' , price='$price' , Highlights='$Highlights' , days='$days' , nights='$nights'   WHERE PackageID='$pid' ";
	
	if(mysqli_query($con,$sql))
	{
		echo "<script>alert('Record updated sucessfully')</script>";
		header("location:packtable.php");
	}
	else
	{
		echo"<script> alert('Error:could not update')</script>";
	}
	
	mysqli_close($con);
 ?>	