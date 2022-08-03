<?php 
	
			require 'config.php';
	
	
	$id = $_POST['hid'];
	$Name = $_POST['Name'];
	$image= $_POST['image']; 
 	$price = $_POST['price'];
	$Star = $_POST['star']; 
	$Address = $_POST['Address']; 
	$link = $_POST['link'];
    $Category = $_POST['category']; 	
	
	$sql ="UPDATE hotel SET Hotelid='$id' ,  Hotelname='$Name' , price='$price' , image='$image' , star='$Star' , address='$Address',link='$link',category='$Category'   WHERE Hotelid='$id' ";
	
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