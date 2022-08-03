 <?php 
 
		require 'config.php';
		
		$recordid =$_GET['id'];
		
		$sql ="DELETE FROM vehicle WHERE vehicle_id=$recordid";
		
		
		if(mysqli_query($con,$sql))
		{

			echo"<script>alert('Record deleted sucessfully')</script>";
			header("location:vehicletable.php");
		}
		else
		{
			echo"<script>alert('ERROR: delete failed')</script>";
		}
 
 mysqli_close($con);
 
 ?>