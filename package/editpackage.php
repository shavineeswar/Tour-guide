<?php 
		require 'config.php';


?>

	<center>
	<?php 

	$recordId = $_GET['id'];
	
	$sql ="SELECT * FROM package WHERE  PackageID = $recordId";
	
	$result = $con -> query($sql);

	if($result -> num_rows > 0)
	{
		while($row = $result -> fetch_assoc())
		{
			$pid = $row["PackageID"];
			$Name=$row['Name'];
			$Route= $row['Route'];
			$price = $row['price'];					
			$Highlights= $row['Highlights'];
			$img= $row['img'];
			$days= $row['days'];
			$nights= $row['nights'];		
		}
		
	}
	
?>
		<form method="post" action="submiteditpack.php">
		Package Id:	<br><input type="text" name="pid" value=<?php echo $pid ?> ><br><br>
		Name:	<br><input type="text" name="Name" value=<?php echo $Name ?>><br><br>	
		Route:	<br><textarea name="Route"><?php echo $Route ?></textarea><br><br>	
		Highlights:	<br><textarea name="Highlights"><?php echo $Highlights ?></textarea><br><br>	
		No of Days:<br><input type="text" name="days" value=<?php echo $days ?>><br><br>	
		No of Nights:<br><input type="text" name="nights" value=<?php echo $nights ?>><br><br>
		Price:<br><input type="text" name="price" value=<?php echo $price ?>><br><br>

		<input type="submit" value="Update" id="submit">

		</form>
	</center>	
	