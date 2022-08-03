<?php 
		require 'config.php';


?>

	<center>
	<?php 

	$recordId = $_GET['id'];
	
	$sql ="SELECT * FROM v_reservation WHERE v_Rid =$recordId ";
	
	$result = $con -> query($sql);

	if($result -> num_rows > 0)
	{
		while($row = $result -> fetch_assoc())
		{
			$v_Rid = $row['v_Rid'];
			$Username=$row['Username'];
			$vehicle_id= $row['vehicle_id'];
			$mobile = $row['mobile'];					
			$pickUp= $row['pickUp'];
			$dropOff= $row['dropOff'];
			$km= $row['km'];
			$guest_req= $row['guest_req'];		
		}
	
	}
	
?>
		<form method="post" action="submiteditbooking.php">
		Booking Id:	<br><input type="text" name="v_Rid" value="<?php echo $v_Rid ?>" readonly ><br><br>
		Username:	<br><input type="text" name="Username" value="<?php echo $Username ?>" readonly><br><br>	
		Vehicle id:<br><input type="text" name="vehicle_id" value="<?php echo $vehicle_id ?>" readonly><br><br>	
		Mobile:<br><input type="text" name="mobile" value="<?php echo $mobile ?>"><br><br>
		pickUp:<br><input type="text" name="pickUp" value="<?php echo $pickUp ?>"><br><br>	
		dropOff:<br><input type="text" name="dropOff" value="<?php echo $dropOff ?>"><br><br>
		km:<br><input type="text" name="km" value="<?php echo $km ?>" readonly><br><br>
		Guest Request:<textarea name="guest_req" value="<?php echo $guest_req ?>"></textarea><br><br>
		<input type="submit" value="Update" id="submit">

		</form>
	</center>	