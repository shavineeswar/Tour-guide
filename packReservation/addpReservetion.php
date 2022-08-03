 <?php
		session_start();
 
	require'config.php';
 
	$name = $_POST['name'];
	$email = $_POST['email'];  
	$mobile = $_POST['mobile'];  	
	$pId = $_POST['pId']; 
	$nmembers = $_POST['number']; 
 	$address = $_POST['address'];
 	$Location = $_POST['Location'];
 	$DLocation = $_POST['DLocation'];
 	$sday = $_POST['sday'];
 	$eday = $_POST['eday'];
 	$req = $_POST['req'];

	
	$sql ="INSERT INTO p_reservation (p_RID,name,email ,mobile,p_id,members,address,pickUp,dropOff,sday,eday,request)
			VALUES('','$name','$email','$mobile','$pId','$nmembers','$address','$Location','$DLocation','$sday','$eday','$req')";
 
if($con -> query($sql)) 
 {
	 echo "<script>alert('booking inserted successfully')</script>";
	 header("location:../Ppayment/payment.php");

 }
 else
 {
	 echo "<script>alert('error')</script>";
 }
 


		$con-> close();
	?>
