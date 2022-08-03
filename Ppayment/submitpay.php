 <?php
	
 
	require'config.php';
 
	$uname = $_POST['uname'];
	$cnum = $_POST['cnum'];  
	$edate = $_POST['edate'];  	
	$ccv = $_POST['ccv']; 


	
	$sql ="INSERT INTO payment (paymentID,Username,cardNO,EXdate,CCV)
			VALUES('','$uname','$cnum','$edate','$ccv')";
 
if($con -> query($sql)) 
 {
	 echo "<script>alert('payment inserted successfully')</script>";
	 header("location:paysucesss.php");

 }
 else
 {
	 echo "<script>alert('error')</script>";
 }
 


		$con-> close();
	?>