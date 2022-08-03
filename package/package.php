<?php
	require 'config.php';
	
	$sql = "SELECT * FROM package";
    $result=$con->query($sql);
	
	if ($result->num_rows>0)
 {
?>
<html>

	<head>
			<link rel="stylesheet"  href="pack.css">
		<title align = "center"> Packages </title>
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
			<meta name="viewport" content="width=device-width, initial-scale=1">

		<title align = "center"> Home </title>
	<div>
		<h3 id="logo"><img src="logo.png"></h3>
		<div class="box-img"><a href="../login/login.php"><img src="profile.jpg" width="100px" align="right"></div>
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



	<div class="content">
		<h1 align="center">Welcome to Sri Lanka</h1>
		<h3 align="center">Find best Sri Lanka tour packages to plan your holiday in Sri Lanka.<br>
    Customized Sri Lanka tour packages to suit your requirements with best guide.</h3>
<?php	 while($row=$result->fetch_assoc())
	 {
		$pid=$row['PackageID'];
		$pname=$row['Name']; 
		$route=$row['Route'];
		$Highlights=$row['Highlights'];
		$days=$row['days'];
		$nights=$row['nights'];		
		$price=$row['price'];		
		$img=$row['img'];		
?>	
	<div class="polaroid">
		<label class="lbl"><?php echo $pname ?></label>
		
	  <img src="<?php echo $img ?>" style="width:100%">
	  <br><br>
	  <div class="details" >
			
			Route: <?php echo $route ?><br><br>
			Highlights:<?php echo $Highlights ?><br><br>
			Duration: <?php echo $days ?> days & <?php echo $nights ?> night<br><br>
		Includes:
	  <div class="details" >
			<ul>
			<li>Transportation by air-conditioned vehicle from pick up to drop off at hotel.</li>
			<li>tour guide with intimate knowledge of the city</li>
			<li>Tour can be customized according to your requirements.</li>			
			</ul>
	  </div>
		Excludes:
	  <div class="details" >
			<ul>
			<li>Entrance tickets.</li>
			<li>Foods & drinks</li>
			</ul>
	  </div>	  
	  </div>
	  <div class="price">
	  <label class="pri">LKR <?php echo $price ?></label>
	  
	  </div>
	  <div class="btns">
	  <?php echo"<a href='../packReservation/newr.php?id=$pid' class='book'>Book Now</a>";?>
		</div>
	  </div>
	</div>
	

	</div>
	<?php
	 }
 }
?>
	
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