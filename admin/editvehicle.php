 <?php 
		require 'config.php';


?>

	<center>
	<?php 

	$recordId = $_GET['id'];
	
	$sql ="SELECT * FROM vehicle WHERE vehicle_id = $recordId";
	
	$result = $con -> query($sql);

	if($result -> num_rows > 0)
	{
		while($row = $result -> fetch_assoc())
		{
			$vid = $row["vehicle_id"];
			$brand=$row['brand'];
			$type= $row['type'];
			$price = $row['price'];					
			$image= $row['imgdir'];
			$apassengers= $row['apassengers'];
			$lsuitcases= $row['lsuitcases'];
			$doors= $row['doors'];		
		}
		
	}
	
?>
		<form method="post" action="submiteditvehicle.php">
		Vehicle Id:	<br><input type="text" name="vehicleid" value=<?php echo $vid ?> ><br><br>
		Brand:	<br><input type="text" name="brand" value=<?php echo $brand ?>><br><br>	
		Type:<br><input type="text" name="type" value=<?php echo $type ?>><br><br>	
		Price:<br><input type="text" name="price" value=<?php echo $price ?>><br><br>
		No of adult passengers:<br><input type="text" name="apassengers" value=<?php echo $apassengers ?>><br><br>	
		No of suitcases:<br><input type="text" name="lsuitcases" value=<?php echo $lsuitcases ?>><br><br>
		No of doors:<br><input type="text" name="doors" value=<?php echo $doors ?>><br><br>

		<input type="submit" value="Update" id="submit">

		</form>
	</center>	
	
 

 
 