<html>
<head>
	<title></title>
	<link rel="stylesheet"  href="reservation.css">
</head>
<body>
<div class="wrap">
			<h1>Make your reservation</h1><br><br>
	<form method="POST"  onsubmit="return myFun()" action="#">
		
		<label>Reservation ID</label>
		<input type="text"  name="rid">
		<br><br>
		
		
		<label>Name:</label>
		<input type="text" name="name"  placeholder="Name" id="name"><span id="message" required></span>
		<br><br>
		
		
		
		<label>Email:</label>
		<input type="email" name="email" placeholder="email" id="email"required><br><br>
		
		
	
		<label>Mobile:</label>
		<input type="text" name="mobile" size="10" placeholder="mobile"><br><br>
		
		
		
		<label>Package ID</label>
		<input type="text" name="pId" size="10"><br><br>
		
		
		
		<label>Number of members:</label>
		<input type="text" name="number"><br><br>
		
		<label>Address:</label>
		<textarea></textarea><br><br>
		
		
		
		<label>Pick up location:</label>
		<input type="text" name="Location" placeholder="Location"><br><br>
		
		<label>Drop Off loaction</label>.
		<input type="text" name="DLocation" placeholder="Location"><br><br>
		
		
		<label>Start day:</label>
		<input type="Date" name="day"><br><br>
		
		<label>End day:</label>
		<input type="Date" name="day"><br><br>
		
		<label>Guest request:</label>
		<textarea></textarea><br><br>
		
		<input type="submit" name="submit" value="submit">
		
		</form>
	
	<script>
	function myFun()
	{
		war correct_way=/^[A-Za-z]+$;
		var a=document.getElementById('name').value;
		
		
		if(a=="")
		{
			document.getElementById("message"),innerHTML="**Please fill name";
			return false;
		}
		if(a.length<3)
		{
			document.getElementById("message"),innerHTML="**Name must be at least 3 characters";
			return false;
		}
		if(a.length>20)
		{
			document.getElementById("message"),innerHTML="**Name must be less than 20 characters";
			return false;
		}
		if(a match(correct_way))
			true;
			else
			{
				document.getElementById("message"),innerHTML="**Name must be less than 20 characters";
			return false;
			}
			
	}
	</script>
</body>







</html>