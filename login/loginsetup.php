<?php  

	include 'config.php'; 
	 session_start();
	if(!empty($_POST['username']) && !empty($_POST['password']))
	{
		 $username= $_POST['username'];
		$password = $_POST['password'];
		
		
			$query = "SELECT * FROM user WHERE username='$username' AND Password='$password'";
			$result = mysqli_query($con, $query);
			$count = mysqli_num_rows($result);
			if($count == 1 )
			{
				header('location:home.php');
			}
			else
			{
				$message = "You have Entred a Wrong Username or Password!";
				
			}
	
	$q= "INSERT INTO `login` (`id`, `email`, `password`, `date`) VALUES ('', '$username', '$password', CURRENT_TIMESTAMP)";
	echo $q;
	
	mysqli_query($con,$q);
		
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
<form method="POST" action="action.php">
<div class="textbox">
<i class="fa fa-user" aria-hidden="true"></i>
 <input type="text"placeholder="Username"name="username" id="username" required pattern="[a-zA-Z0-9._%$-]+@[a-zA-Z0-9]+\.[a-z]{2,3}">
 </div>

<div class="textbox">
<i class="fa fa-lock" aria-hidden="true"></i>

 <input type="password"placeholder="Password"name="pwd" id="password" required pattern="(?=.*[a-z])(?=.*\d)(?=.*[A-Z]).{5,10}">
 </div>
<button>submit</button>
<h5><a href="../signup/signup.php"><font color="black">Create account<font></a></h5></form>

 </div>
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