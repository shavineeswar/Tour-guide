 <?php   
		require 'config.php';
 ?>
 
 	<br>	
	<button id="addv"><a href="addvehi.php"> Add New </a></button>	
	<br>
	<br>	
<center>	
		<div>
		<table border="1" width="100%">
		<tr>
			<th> Vehicle Id </th>
			<th> Brand </th>
			<th> Type </th>			
			<th> Price </th>
			<th> Image </th>
			<th> No of adult passengers </th>
			<th> No of suitcases </th>
			<th> No of doors </th>
			<th> Edit </th>
			<th> Delete </th>			
		</tr>
	<?php 
		$sql = "SELECT * FROM vehicle";

		$result = $con -> query($sql);

	if( $result -> num_rows > 0)
	{
		while( $row = $result -> fetch_assoc())
		{
			$id = $row["vehicle_id"];
			
			echo "<tr> <td>".$row['vehicle_id']."</td>
						<td>".$row['brand']."</td>
						<td>".$row['type']."</td>
						<td>".$row['price']."</td>						
						<td>".$row['imgdir']."</td>
						<td>".$row['apassengers']."</td>
						<td>".$row['lsuitcases']."</td>
						<td>".$row['doors']."</td>
						<td><button type='submit'><a href='editvehicle.php?id=$id'>EDIT</a></button></td>
						<td><button type='submit'><a href='deletevehicle.php?id=$id'>DELETE</a></button></td>
			</tr>";
			
		}	
	}
	else
	{
		echo "No result";
	}
	
	?>	
		
		</table>		
		</div>
</center>