
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
		<h2 align="center"> <?php echo $_SESSION['logged_user'];?> Payment Information</h1>
		<h4>We accept</h4>
		<img  src="images/img.jpg" height="100" width="20%">
		<img  src="images/mcard.png" height="100" width="20%">
		<img  src="images/dcvr.png" height="100" width="20%">
		<img  src="images/aexpress.png" height="100" width="20%">
		
		
		
		
		<h2>Card details</h2><hr>
	<form method="post" action="submitpay.php">	
	
			<label>Username: </label><br>
		<input type="text" name="uname" value="<?php echo $_SESSION['logged_user'];?>" readonly ><br><br>
		
		<label>Card Number:</label><br>
		<input type="text" name="cnum" required><br><br>
		
		
		<label>Expiration date:</label><br>
				<input type="date" name="edate"><br><br>
		
			<label>CCV:</label><br>
				<input type="text" name="ccv" required><br><br>
		
		<input type="submit"  value="pay now">
		</div>
	</form>	
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