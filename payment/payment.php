
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
		<h1>Your Payment </h1>
		<h4>We accept</h4>
		
		<h2>Card details</h2><hr>
		

		
		
		</div>
	  
		<div class="wrap">
		<h1>Your Payment Information</h1>
		<h4>We accept</h4>
		<img  src="images/img.jpg" height="100" width="20%">
		<img  src="images/mcard.png" height="100" width="20%">
		<img  src="images/dcvr.png" height="100" width="20%">
		<img  src="images/aexpress.png" height="100" width="20%">
		
		
		
		
		<h2>Card details</h2><hr>
	<form method="post" action="paysucesss.php">	
		<label>Card Number</label><br>
		<input type="text" id="cnum"><br><br>
		
		
		
		
			<label>Expiration date?</label><br>
				<input type="date" id="edate"><br><br>
		
			<label>CCV</label><br>
				<input type="text" id="ccv"><br><br>
		
		<input type="submit" id="pnow" value="pay now" align="left">
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
		<label id="cpyrgt">Copyright 2019 ?? EXCITO. All Rights Reserved.</label>
		</div></div>
	</footer>

		
	</body>
</html>