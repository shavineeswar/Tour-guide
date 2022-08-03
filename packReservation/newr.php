<?php 
		require 'config.php';
      $pid = $_GET['id'];

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
	<link rel="stylesheet"  href="reservation2.css">
	<script>
  function validation()
  {
	  var name=document.getElementById('name').value;
	  var email=document.getElementById('email').value;
	  var mobile=document.getElementById('mobile').value;
	  var pn=document.getElementById('pid').value;
	  var nom=document.getElementById('nom').value;
	   var address=document.getElementById('address').value;
	   var pul=document.getElementById('pul').value;
	   var dol=document.getElementById('dol').value;
	    var sd=document.getElementById('sd').value;
		 var ed=document.getElementById('ed').value;
		 
	  

	  
	  if(name=="")
	  {
		document.getElementById('message').innerHTML="**Please fill your name";
		
		return false;
	  }
	  if(email=="")
	  {
		document.getElementById('em').innerHTML="**Please fill your email";
		return false;
	  }
	  
	  
	  
	  if(mobile=="")
	  {
		document.getElementById('mb').innerHTML="**Please fill your mobile number";
		return false;
	  }
	  
	   
	  if(mobile.length!=10)
	  {
		document.getElementById('mb').innerHTML="**Mobile number should have 10 digits";
		return false;
	  }
	  if(isNaN(mobile)){
		  document.getElementById('mb').innerHTML="**Mobile number should contain 10 digits only";
		return false;
	  }
	  
	  	  if(pn=="")
	  {
		document.getElementById('pn').innerHTML="**Please fill your package id";
		return false;
	  }
	  if(nom=="")
	  {
		document.getElementById('nm').innerHTML="**Please fill the number of members";
		return false;
	  }
	  if(address=="")
	  {
		document.getElementById('add').innerHTML="**Please fill the address";
		return false;
	  }
	  
	   if(pul=="")
	  {
		document.getElementById('pal').innerHTML="**Please fill the pick up location";
		return false;
	  }
	  
	    if(dol=="")
	  {
		document.getElementById('dul').innerHTML="**Please fill the pick up location";
		return false;
	  }
	    if(sd=="")
	  {
		document.getElementById('start').innerHTML="**Please fill the start date";
		return false;
	  }
	    if(ed=="")
	  {
		document.getElementById('end').innerHTML="**Please fill the end date";
		return false;
	  }
	  
	  
	  
	  
  }




</script>
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
<div id="bgpic">

 <br><br><br><br>

<form method="post" action="addpReservetion.php" onsubmit="return validation()">
<div class="wrap">
			<h1>Make your reservation</h1><br><br>
	
				
		<label>Name:</label>
		<input type="text" name="name"  placeholder="Name" id="name" class="text-danger"><span id="message"></span>
		<br><br>
		
		
		
		<label>Email:</label>
		<input type="email" name="email" placeholder="email" id="email"><span id="em"></span>
		<br><br>
	
		<label>Mobile:</label>
		<input type="text" name="mobile" size="10" placeholder="mobile" id="mobile"><span id="mb"></span><br><br>
		
		
		
		<label>Package ID</label>
		<input type="text" name="pId" value="<?php echo $pid ?>" size="10" id="pid"><span id="pn"></span><br><br>
		
		
		
		<label>Number of members:</label>
		<input type="text" name="number"id="nom"><span id="nm"></span><br><br>
		
		<label>Address:</label>
		<textarea id="address" name="address"></textarea><span id="add"></span><br><br>
		
		
		
		<label>Pick up location:</label>
		<input type="text" name="Location" placeholder="Location" id="pul"><span id="pal"></span><br><br>
		
		<label>Drop Off loaction</label>.
		<input type="text" name="DLocation" placeholder="Location" id="dol"><span id="dul"></span><br><br>
		
		
		<label>Start day:</label>
		<input type="Date" name="sday" id="sd"><span id="start"></span><br><br>
		
		<label>End day:</label>
		<input type="Date" name="eday" id="ed"><span id="end"></span><br><br>
		
		<label>Guest request:</label>
		<textarea name="req"></textarea><br><br>
		
		<input type="submit" name="submit" value="submit">
		
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
</body

 




</html>