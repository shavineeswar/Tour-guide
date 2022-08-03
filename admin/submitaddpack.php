 <?php
 
	require'config.php';
 
	$Name = $_POST['Name'];
	$Route = $_POST['Route']; 
 	$Highlights = $_POST['Highlights'];
	$Days = $_POST['Days']; 
	$Nights = $_POST['Nights']; 
	$Price = $_POST['Price']; 
	
	$sql ="INSERT INTO package (PackageID,Name,price,Route,Highlights,days,nights,img)
			VALUES('','$Name','$Price','$Route','$Highlights','$Days','$Nights','')";
 
if($con -> query($sql)) 
 {
	 echo "<script>alert('Package inserted successfully')</script>";
	 header("location:admin.php");
 }
 else
 {
	 echo "<script>alert('error')</script>";
 }
 


		$con-> close();
 ?>