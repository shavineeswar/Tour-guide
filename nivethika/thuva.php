<?php
	require 'config.php';
	
	
?>



<html>

	<head>
			<link rel="stylesheet"  href="ss.css">
			<link rel="stylesheet"href="hotel1.css">
<link rel="stylesheet"  href="hotel2.css">
		<title align = "center"> Vehicles </title>
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
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
			<li><a href="../home/home.html">Home</a></li>
			<li><a href="../destinations/destination.html">Destination</a></li>
			<li><a href="../aboutus/aboutus.html">About Us</a></li>
			<li><a href="#">Contact Us</a></li>
		<form class="search-form">
		<input type="text" placeholder="Search">
		<button id="sbtn">Search</button>
		</form>
		</ul>

	  </div>
	  
	  <div id="bgpic">	  
	  
<br><br><br><br>

<div class="content-wrapper">
      <img src="hot1.png">
	  </div>
	 
 <div class="text-wrapper">
 <h1 align="center"style="font-family:chiller;">FIND THE PERFECT PLACE TO STAY</h1>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br>
<div id="des1">
<h1 align="center"style="font-family:forte;">THE UNDISCOVERED COUNTRY</h1>
<Pre> <h3 align="center"style="font-family:forte;"><font size="5" font color="grey">Lying between the more trodden parts of India and Southeast Asia,
 Sri Lanka's history, culture and natural beauty are undeniably alluring. 
 It's the place you haven't been to yet, that you SHOULD.</font></h3></Pre>
</div>
<br><br><br>


	<div class="content">
	<h1 align="left" class="place">Kandy</h1>
	
		<?php	
      $sql = "SELECT * FROM hotel where category='kandy'";
    $result=$conn->query($sql);
	
	if ($result->num_rows>0)
 {
		while($row=$result->fetch_assoc())
	 {
		
		$vprice=$row['price'];
		$name=$row['Hotelname'];
        $image=$row['image'];
        $price=$row['price'];
		$star=$row['star'];
		$address=$row['address'];
		$link=$row['link'];
	
?>
	
	<div class="polaroid">
	<div class="x">
		<label class="lbl"><?php echo $name?></label><br>
		
		<br>
		<div class="container">
	  <img src="<?php echo $image ?>" style="width:100%">
	  <div class="text-block">LKR<?php echo $price?></div>
	  </div>
	</div>
	<div class="x">
	  <div class="details" >
	 
			<ul>
			 <br><br><br><h2 class="star"><pre><?php echo $star?></pre></li></h2><br>
			<li><pre><h3>&nbsp<?php echo $address?></h3></pre></li><br>
			<li><i class="fa fa-wifi">&nbsp&nbsp&nbspFree wifi</i></li>         
			<li><i class='fas fa-taxi'>&nbsp&nbsp&nbspFree parking</i></li><br>
			<button id="btn"><a href="<?php echo $link?>">view more</a></button><br>
			</ul>
			
	  </div>

	  </div>
	</div>
	
	<?php
	 }
 }
?>	</div>





<div class="content1">
	<h1 align="left"class="place">Sigiriya</h1>
		<?php	
      $sql = "SELECT * FROM hotel where category='sigiriya'";
    $result=$conn->query($sql);
	
	if ($result->num_rows>0)
 {
		while($row=$result->fetch_assoc())
	 {
		
		$vprice=$row['price'];
		$name=$row['Hotelname'];
        $image=$row['image'];
        $price=$row['price'];
		$star=$row['star'];
		$address=$row['address'];
		$link=$row['link'];
	
?>
	
	<div class="polaroid">
	<div class="x">
		<label class="lbl"><?php echo $name?></label><br>
		
		<br>
		<div class="container">
	  <img src="<?php echo $image ?>" style="width:100%">
	  <div class="text-block">LKR<?php echo $price?></div>
	  </div>
	</div>
	<div class="x">
	  <div class="details" >
	 
			<ul>
			 <br><br><br><h2 class="star"><pre><?php echo $star?></pre></li></h2><br>
			<li><pre><h3>&nbsp&nbsp&nbsp<?php echo $address?></h3></pre></li><br>
			<li><i class="fa fa-wifi">&nbsp&nbsp&nbspFree wifi</i></li>         
			<li><i class='fas fa-taxi'>&nbsp&nbsp&nbspFree parking</i></li><br>
			<button id="btn"><a href="<?php echo $link?>">view more</a></button><br>
			</ul>
			
	  </div>

	  </div>
	</div>
	
	<?php
	 }
 }
?></div>





<div class="content2">
	<h1 align="left"class="place">Yala</h1>
		<?php	
      $sql = "SELECT * FROM hotel where category='yala'";
    $result=$conn->query($sql);
	
	if ($result->num_rows>0)
 {
		while($row=$result->fetch_assoc())
	 {
		
		$vprice=$row['price'];
		$name=$row['Hotelname'];
        $image=$row['image'];
        $price=$row['price'];
		$star=$row['star'];
		$address=$row['address'];
		$link=$row['link'];
	
?>
	
	<div class="polaroid">
	<div class="x">
		<label class="lbl"><?php echo $name?></label><br>
		
		<br>
		<div class="container">
	  <img src="<?php echo $image ?>"style="width:100%">
	  <div class="text-block">LKR<?php echo $price?></div>
	  </div>
	</div>
	<div class="x">
	  <div class="details" >
	 
			<ul>
			 <br><br><br><h2 class="star"><pre><?php echo $star?></pre></li></h2><br>
			<li><pre><h3>&nbsp&nbsp&nbsp<?php echo $address?></h3></pre></li><br>
			<li><i class="fa fa-wifi">&nbsp&nbsp&nbspFree wifi</i></li>         
			<li><i class='fas fa-taxi'>&nbsp&nbsp&nbspFree parking</i></li><br>
			<button id="btn"><a href="<?php echo $link?>">view more</a></button><br>
			</ul>
			
	  </div>

	  </div>
	</div>
	
	<?php
	 }
 }
?>	</div>







<div class="content3">
	<h1 align="left"class="place">Arugambe</h1>
		<?php	
      $sql = "SELECT * FROM hotel where category='Arugambe'";
    $result=$conn->query($sql);
	
	if ($result->num_rows>0)
 {
		while($row=$result->fetch_assoc())
	 {
		
		$vprice=$row['price'];
		$name=$row['Hotelname'];
        $image=$row['image'];
        $price=$row['price'];
		$star=$row['star'];
		$address=$row['address'];
		$link=$row['link'];
	
?>
	
	<div class="polaroid">
	<div class="x">
		<label class="lbl"><?php echo $name?></label><br>
		
		<br>
		<div class="container">
	  <img src="<?php echo $image ?>" style="width:100%">
	  <div class="text-block">LKR<?php echo $price?></div>
	  </div>
	</div>
	<div class="x">
	  <div class="details" >
	 
			<ul>
			 <br><br><br><h2 class="star"><li><pre><?php echo $star?></pre></li></h2><br>
			<li><pre><h3>&nbsp&nbsp&nbsp<?php echo $address?></h3></pre></li><br>
			<li><i class="fa fa-wifi">&nbsp&nbsp&nbspFree wifi</i></li>         
			<li><i class='fas fa-taxi'>&nbsp&nbsp&nbspFree parking</i></li><br>
			<button id="btn"><a href="<?php echo $link?>">view more</a></button><br>
			</ul>
			
	  </div>

	  </div>
	</div>
	
	<?php
	 }
 }
?>	</div>










	
	
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