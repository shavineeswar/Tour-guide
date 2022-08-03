<?php 
		require 'config.php';



session_start();
	
	if(isset($_POST["btn"]))
	{
		$username=$_POST["username"];
		$password=$_POST["pwd"];
		
		echo $username;
		
	$sql="SELECT Username,Password FROM user";
				
				$result=$con ->query($sql);
				
				if($result -> num_rows > 0)
				{
					while($row = $result -> fetch_assoc())
					{ 		$id=$row["UserID"];	
						if($username==$row["Username"] && $password==$row["Password"])
						{
							$_SESSION['logged_user']=$username;
							header("Location:../home/Home.php");
						}
						else if($username=='admin' && $password=='Abcd1234#')
						{
							header("Location:../admin/admin.php");
						}
					}
				}
				else{
				echo $conn->error;
				}
	}
?>
	
<html>
	<head>
		<title></title>
		<link rel="stylesheet"  href="pay.css">
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
			<meta name="viewport" content="width=device-width, initial-scale=1">

		<title align = "center"> Home </title>
	<div>
		<h3 id="logo"><img src="logo.png"></h3>
		<div class="box-img"><a href="../login/login.html"><img src="profile.jpg" width="100px" align="right"></div>
	</div>	
	<div id="cart">	
		<i class='fas fa-cart-plus' style='font-size:30px'></i>
	</div>	
	
	</head>
	<body>
	 <div class="nav">
		<ul>
			<li><a href="../home/Home.html">Home</a></li>
			<li><a href="../destinations/destination.html">Destination</a></li>
			<li><a href="../aboutus/aboutus.html">About Us</a></li>
			<li><a href="../contactus/contactus.html">Contact Us</a></li>
		<form class="search-form">
		<input type="text" placeholder="Search">
		<button id="sbtn">Search</button>
		</form>
		</ul>

	  </div>
	  <div class="wrap">
	
				<h1 align="center">Payment submitted sucessfully for <?php echo $_SESSION['logged_user'];?> </h1>
		
		
		</div>
	  
		<div >
		
		<h3>Previous Vehicle Bookings </h3>
<center>	
		<div>
		<table border="1" width="100%">
		<tr>
			<th> Reservation Id </th>
			<th> Vehicle ID </th>			
			<th> Mobile no </th>
			<th> pickUp </th>
			<th> Drop off </th>
			<th> Tour distance </th>
			<th> Guest request </th>
			<th> Edit </th>
			<th> Delete </th>			
		</tr>
		<?php 
		$sql = "SELECT * FROM v_reservation WHERE Username = 'IT19244044'";

		$result = $con -> query($sql);

	if( $result -> num_rows > 0)
	{
		while( $row = $result -> fetch_assoc())
		{
			$id = $row["v_Rid"];
			
			echo "<tr> <td>".$row['v_Rid']."</td>
						<td>".$row['vehicle_id']."</td>
						<td>".$row['mobile']."</td>						
						<td>".$row['pickUp']."</td>
						<td>".$row['dropOff']."</td>
						<td>".$row['km']."</td>
						<td>".$row['guest_req']."</td>
						<td><button type='submit'><a href='editvbook.php?id=$id'>EDIT</a></button></td>
						<td><button type='submit'><a href='deleteVreservation.php?id=$id'>DELETE</a></button></td>
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
		

		
		<footer>
	<br><br><br><br><br><br>
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