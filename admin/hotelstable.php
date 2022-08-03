<?php

require"config.php";
?>




<button> <a href="addhotel.php"> Add New </button>
			<div>
			<table border="1" width="100%">
				<tr>
					<th> Hotel ID</th>
					<th> Hotel Name</th>
					<th> Image</th>
					<th> price
					<th> Star</th>
					<th> Address</th>
					<th> Link</th>
					<th> Category</th>
					<th> Edit</th>
					<th> Delete</th>
				</tr>
			<!-- GET DATA FROM ITEM TABLE-->	
			<?php
				$sql="SELECT * FROM hotel";
				
				$result=$con ->query($sql);
				
				if($result -> num_rows > 0)
				{
					while($row = $result -> fetch_assoc())
					{ 
						$id=$row["Hotelid"];
						echo"<tr>
								 <td>".$row["Hotelid"]."</td>
								 <td>".$row["Hotelname"]."</td>
								 <td>".$row["image"]."</td>
								 <td>".$row["price"]."</td>
								 <td>".$row["star"]."</td>
								 <td>".$row["address"]."</td>
								 <td>".$row["link"]."</td>
								 <td>".$row["category"]."</td>
								 <td><button type='submit'><a href='edithotel.php?id=$id'>Edit</a></button></td>
								 <td><input type='button' value='Delete'></td>
							 </tr>";
					}
				}
				else
				{
					echo "no result";
				}	
			echo"</table>";
			?>
			</div>