 <?php 
 
		require 'config.php';
		
		$recordid =$_GET['id'];
		
		$sql ="DELETE FROM v_reservation WHERE v_Rid=$recordid";
		
		
		if(mysqli_query($con,$sql))
		{

			echo"<script>alert('Record deleted sucessfully')</script>";
			header("location:paysucesss.php");
		}
		else
		{
			echo"<script>alert('ERROR: delete failed')</script>";
		}
 
 mysqli_close($con);
 
 ?>