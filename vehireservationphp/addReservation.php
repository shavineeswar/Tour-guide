<?php
		session_start();
 
	require'config.php';
 
	$vehicleid = $_POST['vehicleid'];
	$uname = $_POST['uname'];  
	$pricekm = $_POST['pricekm'];  	
	$telephone = $_POST['telephone']; 
	$picklocation = $_POST['picklocation']; 
 	$droplocation = $_POST['droplocation'];
 	$kms = $_POST['kms'];
 	$text = $_POST['text'];

	$tot = $pricekm * $kms;
	
	$_SESSION['total'] = $tot ;
	
	$sql ="INSERT INTO v_reservation (v_Rid,Username,vehicle_id ,mobile,pickUp ,dropOff,km,guest_req)
			VALUES('','$uname','$vehicleid','$telephone','$picklocation','$droplocation','$kms','$text')";
 
if($con -> query($sql)) 
 {
	 echo "<script>alert('Vehicle inserted successfully')</script>";
	 header("location:../Vpaymentphp/payment.php");

 }
 else
 {
	 echo "<script>alert('error')</script>";
 }
 


		$con-> close();
	?>


 