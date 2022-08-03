<?php

require 'config.php';

?>


<html>
<head>
<script src="admin.js"></script>
<link rel="stylesheet"  href="admin.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<h3 id="logo"><img src="logo.png"></h3>
<h1 id="adpnl"> ADMIN PANEL</h1>
<a href="../login/login.php"><button id="logoutbtn"> Logout</button>	</a>		
</head>
<body>

<button class="tablink" onclick="openPage('hotels', this, 'black')">HOTELS</button>
<button class="tablink" onclick="openPage('packages', this, 'black')" id="defaultOpen">PACKAGES</button>
<button class="tablink" onclick="openPage('vehicles', this, 'black')">VEHICLES</button>
<button class="tablink" onclick="openPage('reservation', this, 'black')">RESERVATION</button>

<div id="hotels" class="tabcontent">
  <h3>HOTELS</h3>
  <p><button> <a href="addhotel.php"> Add New </button>
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
								 <td><button type='submit'><a href='deletehotel.php?id=$id'>delete</a></button></td>
							 </tr>";
					}
				}
				else
				{
					echo "no result";
				}	
			echo"</table>";
			?>
			</div></p>
			
 
</div>


  
 
  
  
</div>

<div id="packages" class="tabcontent">
  <h3> PACKAGES</h3>
 

 
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
						<td><button type='submit'><a href='deletepack.php?id=$id'>Delete</a></td> </td>						
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
  
  
</div>




<div id="vehicles" class="tabcontent">
  <h3>VEHICLES</h3>
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
</div>

<div id="reservation" class="tabcontent">
  <h3>Reservation</h3>
  	
<center>	
		<div>
		<table border="1" width="100%">
		<tr>
			<th> Reservation Id </th>
			<th> User Id </th>
			<th> Name </th>
			<th> Email </th>			
			<th> Mobile </th>
			<th> No of members </th>
			<th> Address </th>
			<th> Pick up location </th>
			<th> Drop of location </th>
			<th> Start date </th>
			<th> Edit </th>
			<th> Delete </th>			
		</tr>
	<?php 
		$sql = "SELECT * FROM packreservation";

		$result = $con -> query($sql);

	if( $result -> num_rows > 0)
	{
		while( $row = $result -> fetch_assoc())
		{
			$id = $row["RID"];
			
			echo "<tr> <td>".$row['RID']."</td>
						<td>".$row['UserID']."</td>
						<td>".$row['name']."</td>
						<td>".$row['Email']."</td>
						<td>".$row['mobile']."</td>						
						<td>".$row['nomembers']."</td>
						<td>".$row['address']."</td>
						<td>".$row['pickuplocation']."</td>
						<td>".$row['dropoflocation']."</td>
						<td>".$row['startdate']."</td>
						<td><button type='submit'><a href='edit.php?id=$id'>EDIT</a></button></td>
						<td><button type='submit'><a href='delete.php?id=$id'>Delete</a></td> </td>						
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
</div>




<br><br><br><br><br><br><br><br>

<h1 align="center">Welcome to Admin Panel </h1>


			<div>
			<table border="1" width="100%">
				<tr>
					<th> User ID</th>
					<th> User E-mail</th>
					<th> Userame</th>
					<th> Password</th>
					<th> Edit</th>
					<th> Delete</th
				</tr>
			<!-- GET DATA FROM ITEM TABLE-->	
			<?php
				$sql="SELECT * FROM user";
				
				$result=$con ->query($sql);
				
				if($result -> num_rows > 0)
				{
					while($row = $result -> fetch_assoc())
					{ 
						$id=$row["UserID"];
						echo"<tr>
								 <td>".$row["UserID"]."</td>
								 <td>".$row["Email"]."</td>
								 <td>".$row["Username"]."</td>
								 <td>".$row["Password"]."</td>
								 
								 <td><button type='submit'><a href='edituser.php?id=$id'>Edit</a></button></td>
								 <td><button type='submit'><a href='deleteuser.php?id=$id'>Delete</a></td>
							 </tr>";
					}
				}
				else  
				{
					echo "no result";
				}	
			echo"</table>";

		?>	








<br><br><br><br><br><br>

<footer>
	
		<div class="footer-main-div"><div class="footer-social-icons" align="right">
		<ul>
		<li><a href="https://twitter.com" target="blank"><img src ="twt.png" width ="30px" height ="30px"  class="logo1"></a></li>
		<li><a href="https://www.instagram.com" target="blank"><img src ="isg.png" width ="30px" height ="30px"  class="logo1"></a></li>
		<li><a href="https://www.facebook.com/" target="blank"><img src ="fbb.png" width ="30px" height ="30px"  class="logo1"></a></li>
		<li><a href="https://www.facebook.com/" target="blank"><img src ="yt.png" width ="30px" height ="30px"  class="logo1"></a></li>
		</ul>
		<label id="cpyrgt">Copyright 2019 © EXCITO. All Rights Reserved.</label>
		</div></div>
	</footer>
   
</body>
</html> 
