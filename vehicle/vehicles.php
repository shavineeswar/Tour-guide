<?php
	require 'config.php';
	
	$sql = "SELECT * FROM vehicle";
    $result=$con->query($sql);
	
	if ($result->num_rows>0)
 {
?>

<html>

	<head>
			<link rel="stylesheet"  href="vehi.css">
		<title align = "center"> Vehicles </title>
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

<div class="content">
		<h1 class="h">Car Rental With EXCITO - Find And Book A Great Deal Today</h1>
<?php	 while($row=$result->fetch_assoc())
	 {
		$id=$row['vehicle_id'];
		$vprice=$row['price'];
		$vbrand=$row['brand'];
		$vtype=$row['type'];
		$vimg=$row['imgdir'];
		$adultp=$row['apassengers'];		
		$largs=$row['lsuitcases'];		
		$vdoors=$row['doors'];		
?>
	
	<div class="polaroid">
		<label class="lbl"><?php echo $vtype ?></label>
		<br><label><?php echo $vbrand ?></label>
	  <img src="<?php echo $vimg ?>" style="width:100%">
	  <div class="container">

		  <div class="tooltip"><img src="passagerare.png" ><span class="tooltiptext"><?php echo $adultp;?> adult passengers</span></div>
		  <div class="tooltip"><img src="bagage.png" ><span class="tooltiptext"><?php echo $largs;?> large suitcases</span></div>
		  <div class="tooltip"><img src="door.png" ><span class="tooltiptext"><?php echo $vdoors;?> doors</span></div>
		  <div class="tooltip"><img src="ac.png" ><span class="tooltiptext">Air Condition</span></div>
	  </div>
	  <div class="details" >
			<ul>
			<li>24h Roadside Assistance</li>
			<li>Third party insurance</li>
			<li>Fair  Fuel Policy </li>
			</ul>
	  </div>
	  <div class="price">
	  <label class="pri">LKR <?php echo $vprice;	?></label>
	  <label>per km</label>
	  </div>
	<div class="btns"><?php echo"<a href='../vehireservationphp/vehireservation.php?id=$id' class='book'>Book Now</a>";?>
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