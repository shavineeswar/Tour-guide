<?php
 
	require'config.php';
 
	$Name = $_POST['Name'];
	$image=$_POST['image'];
	$Price = $_POST['Price']; 
 	$Star = $_POST['Star'];
	$Address = $_POST['Address']; 
	$Link = $_POST['Link']; 
	$Category = $_POST['Category']; 
	
	$sql ="INSERT INTO hotel (Hotelid,Hotelname,image,price,star,address,link,category)
			VALUES('','$Name','$image','$Price','$Star','$Address','$Link','$Category')";
 
if($con -> query($sql)) 
 {
	 echo "<script>alert('hotel inserted successfully')</script>";
	 header("location:admin.php");
 }
 else
 {
	 echo "<script>alert('error')</script>";
 }
 


		$con-> close();
 ?>