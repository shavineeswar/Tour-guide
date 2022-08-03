 <?php 
		require 'config.php';
      $vid = $_GET['id'];

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
<?php	

	$sql ="SELECT * FROM vehicle WHERE vehicle_id = $vid";
	
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


<html>
<head>
	<title></title>
	<link rel="stylesheet"  href="reservation.css">
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
			<li><a href="../home/Home.php">Home</a></li>
			<li><a href="../destinations/destination.php">Destination</a></li>
			<li><a href="../aboutus/aboutus.php">About Us</a></li>
			<li><a href="../contactus/contactus.php">Contact Us</a></li>
		<form class="search-form">
		<input type="text" placeholder="Search">
		<button id="sbtn">Search</button>
		</form>
		</ul>

	  </div>
<div id="bgpic">

 
 <br><br><br><br>
	  
<div class="wrap">
	<form method="post" action="addReservation.php">
		<h1 align="center">HELLO <?php echo $_SESSION['logged_user'];?> </h1>
		<h1 align="center">Make your reservation</h1><br>
		<label>Vehicle ID:</label>
		<input type="text" name="vehicleid" value="<?php echo $vid ?>" ><br><br>

		<label>price per km:</label>
		<input type="text" name="pricekm" value="<?php echo $price ?>" readonly ><br><br>
	
		<label>User Name:</label>
		<input type="text" name="uname" value="<?php echo $_SESSION['logged_user'];?>" readonly><br><br>

			
		<label>Mobile:</label>&nbsp
		<input type="text" name="telephone"  placeholder="telephone"><br><br>
		
		
		<label>Pick up location:</label>&nbsp
	    <input type="text" name="picklocation" size="10" placeholder="Pick up "required><br><br>
		
		<label>Drop off location:</label>&nbsp
	    <input type="text" name="droplocation" size="10" placeholder="Drop off"required><br><br>		

		<label>Tour length:</label>&nbsp
	    <input type="text" name="kms"  placeholder="km "required><br><br>
		

		
		<label>Guest Request:</label>
		<textarea name="text"></textarea><br><br>

		
		<input type="submit" name="submit" value="Add Reservation">
		
	</form>
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