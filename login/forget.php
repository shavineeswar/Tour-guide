<?php

require 'config.php';
?>



<html>
	<head>
		<link rel="stylesheet"  href="forget.css">
	</head>
	<body>
	<center>
<div class="wrap">
<form method="POST" action="forget.php">
<p><input name="email" type="email"placeholder="Type your Email...">
<p><input name="submit" type="submit"value="submit">
</form>
</div>
<?php


if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	
	$sql="SELECT * FROM user where Email='$email'";
	$result=$con->query($sql);
	if($result->num_rows>0)
	{
	while($row=$result->fetch_assoc())
	{
		$username=$row['Username'];
		$password=$row['Password'];
		$email1=$row['Email'];
		}
	if($email==$email1)	
	{
		
		$from="From:g2.3project@gmail.com";
		$to=$email;
		$subject="Lost password or username";
		$body="Dear $username \n>Your username is:$username \n>Your password is:$password";
		mail($to,$subject,$body,$from);
		echo "Check your inbox";
	}
	else{
		echo "<h3 align='center'>Incorrect email</h3>";
	}
   }
}   
else
{
	echo "Please fill your email";
}
?>
</center>
</body>
</html>
