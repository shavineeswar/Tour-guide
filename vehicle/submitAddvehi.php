 <?php
 
	require'config.php';
 
	$brand = $_POST['brand'];
	$type = $_POST['type']; 
 	$price = $_POST['price'];
	$apassengers = $_POST['apassengers']; 
	$lsuitcases = $_POST['lsuitcases']; 
	$doors = $_POST['doors']; 
	
	$sql ="INSERT INTO vehicle (vehicle_id,price,brand,imgdir,type,apassengers,lsuitcases,doors)
			VALUES('','$price','$brand','','$type','$apassengers','$lsuitcases','$doors')";
 
if($con -> query($sql)) 
 {
	 echo "<script>alert('Vehicle inserted successfully')</script>";
	 header("location:vehicletable.php");
 }
 else
 {
	 echo "<script>alert('error')</script>";
 }
 


		$con-> close();
 ?>