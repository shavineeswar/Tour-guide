<?php

require 'config.php';

?>



			<?php
			
			$recordId=$_GET['id'];
			
			$sql="SELECT * FROM user WHERE UserID=$recordId";
			$result=$con -> query($sql);
			
			if($result ->num_rows>0)
			{
				while($row =$result->fetch_assoc())
				{
					$id=$row["UserID"];
					$password=$row["Password"];
					$Email=$row["Email"];
					$Username=$row["Username"];					
				}
			}	
			?>
			
			<form method="post" action="submiteditrecord.php" >
			
				<label>User ID</label>
				<input type="text" name="id" value=<?php echo $id?> >
				<br><br>
				
				<label>User E-mail</label>
				<input type="text" name="Email" value=<?php echo $Email ?> >
				<br><br>
				
				<label>Userame</label>
				<input type="text" name="Userame" value=<?php echo $Username ?> >
				<br><br>
				
				<label>Password</label>
				<input type="text" name="Password" value=<?php echo $password ?> >
				<br><br>
				
				
				
				<input type="submit" value="Update user" >
				<br><br>
				
				
			</form>
			
			
			