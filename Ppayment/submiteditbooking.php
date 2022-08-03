  <?php 
	
			require 'config.php';
	
	
	$v_Rid = $_POST["v_Rid"];
	$Username = $_POST['Username'];
	$vehicle_id = $_POST['vehicle_id']; 
 	$mobile = $_POST['mobile'];
	$pickUp = $_POST['pickUp']; 
	$dropOff = $_POST['dropOff']; 
	$km = $_POST['km']; 	
	$guest_req = $_POST['guest_req']; 	

	
	$sql ="UPDATE v_reservation SET mobile='$mobile' ,  pickUp='$pickUp' , dropOff='$dropOff' , guest_req='$guest_req'  WHERE v_Rid='$v_Rid' ";
	
	if(mysqli_query($con,$sql))
	{
		echo "<script>alert('Record updated sucessfully')</script>";
		header("location:paysucesss.php");
	}
	else
	{
		echo"<script> alert('Error:could not update')</script>";
	}
	
	mysqli_close($con);
 ?>	
  