 <?php 
	
			require 'config.php';
	
	
	$uid = $_POST["id"];
	$Email = $_POST['Email'];
	$Username = $_POST['Userame']; 
 	$Password = $_POST['Password'];

	
	$sql ="UPDATE user SET  Email='$Email' , Username='$Username' , Password='$Password' WHERE UserID='$uid' ";
	
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