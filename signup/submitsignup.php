<?php

require 'config.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password=$_POST['password'];



$sql="INSERT INTO user(UserID,Email,Username,Password) 
	 VALUES('','$email','$username','$password')";
	
	if($con->query($sql))
		//if(mysqli_query ($con,$sql)) 
	{
		echo"<script>alert('Record inserted successfully')</script>";
		header("Location:../login/login.php");
	}
	else
	{
		echo"<script>alert('Error y')</script>";
	}
	
	$sql2="SELECT* FROM user";
	$result=$con->query($sql2);
	
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			echo $row["Username"]."-" .$row["Password"]."<br>";
		}
	}
	else
	{
			echo"No result";
	}
	
	
	
	// close the connection 

		$con->close();
?>