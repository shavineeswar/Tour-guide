<?php 
		require 'config.php';


?>

	<center>
	<?php 

	$recordId = $_GET['id'];
	
	$sql ="SELECT * FROM hotel WHERE  Hotelid = $recordId";
	
	$result = $con -> query($sql);

	if($result -> num_rows > 0)
	{
		while($row = $result -> fetch_assoc())
		{
			$hid = $row["Hotelid"];
			$Name=$row['Hotelname'];
			$image=$row['image'];
			$price=$row['price'];					
			$star= $row['star'];
			$address= $row['address'];
			$link= $row['link'];
			$category= $row['category'];		
		}
		
	}
	
?>
		<form method="post" action="submitupdatehotel.php">
		Hotel id:	<br><input type="text" name="hid" value=<?php echo $hid ?> ><br><br>
		Name:	<br><input type="text" name="Name" value=<?php echo $Name ?>><br><br>	
		Image:	<br><input type="text" name="image" value=<?php echo $image ?>><br><br>	
		Price:	<br><input type="text" name="price" value=<?php echo $price ?>><br><br>	
		Stars:<br><input type="text" name="star" value=<?php echo $star ?>><br><br>	
		Address:<br><input type="text" name="Address" value=<?php echo $address ?>><br><br>
		Link:<br><input type="text" name="link" value=<?php echo $link ?>><br><br>
		Category:<br><input type="text" name="category" value=<?php echo $category ?>><br><br>

		<input type="submit" value="Update" id="submit">

		</form>
	</center>	
	