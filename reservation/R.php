<html>
<head>
	<title></title>
	<link rel="stylesheet"  href="reservation.css">
</head>
<body>
<div class="wrap">
			<h1>Make your reservation</h1><br><br>
			
	<form method="POST"  onsubmit="return Validate()" action="#" name="vform">
		
		<label>Reservation ID</label>
		<input type="text"  name="rid">
		<br><br>
		
		
			<div id="username_div">
   	  <label>Name</label> <br>
   	  <input type="text" name="username" class="textInput">
   	  <div id="name_error"></div>
   	</div>
	
		
		
		<div id="email_div">
   	  <label>Email</label> <br>
   	  <input type="email" name="email" class="textInput" >
   	  <div id="email_error"></div><br>
   	</div>
		
		
	
		<label>Mobile:</label>
		<input type="text" name="mobile" size="10" placeholder="mobile"required><br><br>
		
		
		
		<label>Package ID</label>
		<input type="text" name="pId" size="10"required><br><br>
		
		
		
		<label>Number of members:</label>
		<input type="text" name="number"required><br><br>
		
		<label>Address:</label>
		<textarea></textarea><br><br>
		
		
		
		<label>Pick up location:</label>
		<input type="text" name="Location" placeholder="Location"required><br><br>
		
		<label>Drop Off loaction</label>.
		<input type="text" name="DLocation" placeholder="Location"><br><br>
		
		
		<label>Start day:</label>
		<input type="Date" name="day"required><br><br>
		
		<label>End day:</label>
		<input type="Date" name="day"required><br><br>
		
		<label>Guest request:</label>
		<textarea></textarea><br><br>
		
		<input type="submit" name="submit" value="submit" class="btn">
		
		</form>
	
	<script>

// SELECTING ALL TEXT ELEMENTS
var username = document.forms['vform']['username'];
var email = document.forms['vform']['email'];
var password = document.forms['vform']['password'];
var password_confirm = document.forms['vform']['password_confirm'];
// SELECTING ALL ERROR DISPLAY ELEMENTS
var name_error = document.getElementById('name_error');
var email_error = document.getElementById('email_error');
var password_error = document.getElementById('password_error');
// SETTING ALL EVENT LISTENERS
username.addEventListener('blur', nameVerify, true);
email.addEventListener('blur', emailVerify, true);
password.addEventListener('blur', passwordVerify, true);
// validation function
function Validate() {
  // validate username
  if (username.value == "") {
    username.style.border = "1px solid red";
    document.getElementById('username_div').style.color = "red";
    name_error.textContent = "Username is required";
    username.focus();
    return false;
  }
  // validate username
  if (username.value.length < 3) {
    username.style.border = "1px solid red";
    document.getElementById('username_div').style.color = "red";
    name_error.textContent = "Username must be at least 3 characters";
    username.focus();
    return false;
  }
  // validate email
  if (email.value == "") {
    email.style.border = "1px solid red";
    document.getElementById('email_div').style.color = "red";
    email_error.textContent = "Email is required";
    email.focus();
    return false;
  }
  // validate password
  if (password.value == "") {
    password.style.border = "1px solid red";
    document.getElementById('password_div').style.color = "red";
    password_confirm.style.border = "1px solid red";
    password_error.textContent = "Password is required";
    password.focus();
    return false;
  }
  // check if the two passwords match
  if (password.value != password_confirm.value) {
    password.style.border = "1px solid red";
    document.getElementById('pass_confirm_div').style.color = "red";
    password_confirm.style.border = "1px solid red";
    password_error.innerHTML = "The two passwords do not match";
    return false;
  }
}
// event handler functions
function nameVerify() {
  if (username.value != "") {
   username.style.border = "1px solid #5e6e66";
   document.getElementById('username_div').style.color = "#5e6e66";
   name_error.innerHTML = "";
   return true;
  }
}
function emailVerify() {
  if (email.value != "") {
  	email.style.border = "1px solid #5e6e66";
  	document.getElementById('email_div').style.color = "#5e6e66";
  	email_error.innerHTML = "";
  	return true;
  }
}
function passwordVerify() {
  if (password.value != "") {
  	password.style.border = "1px solid #5e6e66";
  	document.getElementById('pass_confirm_div').style.color = "#5e6e66";
  	document.getElementById('password_div').style.color = "#5e6e66";
  	password_error.innerHTML = "";
  	return true;
  }
  if (password.value === password_confirm.value) {
  	password.style.border = "1px solid #5e6e66";
  	document.getElementById('pass_confirm_div').style.color = "#5e6e66";
  	password_error.innerHTML = "";
  	return true;
  }
}

</script>

	
	
	
	
	
</body>







</html>