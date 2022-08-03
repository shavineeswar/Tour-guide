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
						else 
						{
							echo "<script>alert('Username or Password incorrect')</script>";
							
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
<title>Transparent login form</title>
<link rel="stylesheet"href="login.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
			<meta name="viewport" content="width=device-width, initial-scale=1">

		<title align = "center"> Home </title>
	<div>
		<h3 id="logo"><img src="logo.png"></h3>
	</div>	
	<div id="cart">	
		<i class='fas fa-cart-plus' style='font-size:30px'></i>
	</div>	
	
</head>


<body>
<div id="bgpic">
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
	  
<div class="login-box">
<h1>Login</h1>
<form method="POST">
<div class="textbox">
<i class="fa fa-user" aria-hidden="true"></i>
 <input type="text"placeholder="Username"name="username" required>
 </div>

<div class="textbox">
<i class="fa fa-lock" aria-hidden="true"></i>

 <input type="password"placeholder="Password"name="pwd" required>
 </div>
<button name="btn">submit</button>
<h5><a href="../signup/signup.php"><font color="black">Create account<font></a></h5>
<a href="forget.php">forgot password</a>
 </div></form>
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <br><br><br><br><br><br><br><br><br><br><br>

 
 
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