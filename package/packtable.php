<?php   
		require 'config.php';
 ?>
 
 	<br>	
	<button id="addp"><a href="addpackage.php"> Add Package </a></button>	
	<br>
	<br>	
<center>	
		<div>
		<table border="1" width="100%">
		<tr>
			<th> Package Id </th>
			<th> Title </th>
			<th> Route </th>			
			<th> Price </th>
			<th> Highlights </th>
			<th> Image </th>
			<th> No of days </th>
			<th> No of nights </th>
			<th> Edit </th>
			<th> Delete </th>			
		</tr>
	<?php 
		$sql = "SELECT * FROM package";

		$result = $con -> query($sql);

	if( $result -> num_rows > 0)
	{
		while( $row = $result -> fetch_assoc())
		{
			$id = $row["PackageID"];
			
			echo "<tr> <td>".$row['PackageID']."</td>
						<td>".$row['Name']."</td>
						<td>".$row['Route']."</td>
						<td>".$row['price']."</td>						
						<td>".$row['Highlights']."</td>
						<td>".$row['img']."</td>
						<td>".$row['days']."</td>
						<td>".$row['nights']."</td>
						<td><button type='submit'><a href='editpackage.php?id=$id'>EDIT</a></button></td>
						<td><input type='button' value ='Delete' </td>						
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