<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	
</head>
<body>
    
<div class="center">
 	<div class="login-box">
			<form action="registration.php" method="post" onsubmit="return validate()">
			<h1 style="color: black;">Create an account</h1>
				<div class="txt_field">
          <input type="text" name="fname" id='user'>
		  <span id="username" style="color:red;"></span>
          <label>Full Name</label>
        </div>
				
				<div class="txt_field">
          <input type="text" name="email" id='emails'>
          <span id="emailids" style="color:red;"></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="password" name="pass" id='pass'>
		  <span id="passwords" style="color:red;"></span>
          <label>Password</label>
        </div>
			
				<div class="txt_field">
				<input type="text" id="mobilenumber" name="pnum" >
				<span id="message" style="color:red;"></span>
				<label>Contact Number</label>
				</div>
			<input type="submit" value="Sign Up">
			</div>
			</form>
	</div>


	<script type="text/javascript">
			function validate() {


			var user = document.getElementById('user').value;
			var emails = document.getElementById('emails').value;
			var pass = document.getElementById('pass').value;
			var a = document.getElementById('mobilenumber').value;


			if(user == ""){
				document.getElementById('username').innerHTML =" *required field";
				return false;
			}
			if((user.length <= 5) || (user.length > 20)) {
				document.getElementById('username').innerHTML =" *Username lenght must be between 5 and 20";
				return false;	
			}
			if(!isNaN(user)){
				document.getElementById('username').innerHTML =" *Only characters are allowed";
				return false;
			}

			if(emails == ""){
				document.getElementById('emailids').innerHTML =" *required field";
				return false;
			}
			if(emails.indexOf('@') <= 0 ){
				document.getElementById('emailids').innerHTML =" *Invalid email";
				return false;
			}

			if((emails.charAt(emails.length-4)!='.') && (emails.charAt(emails.length-3)!='.')){
				document.getElementById('emailids').innerHTML =" *Invalid email";
				return false;
			}


			if(pass == ""){
				document.getElementById('passwords').innerHTML =" *password can not be empty";
				return false;
			}
			if((pass.length <= 8) || (pass.length > 20)) {
				document.getElementById('passwords').innerHTML =" *Use 8 characters or more for your password";
				return false;	
			}

if(a==""){
	document.getElementById('message').innerHTML="*This field can't be empty";
	return false;
}
if(isNaN(a)){
	document.getElementById('message').innerHTML="*Enter Numeric value only";
	return false;
}
if(a.length<10){
	document.getElementById('message').innerHTML="*Mobile Number should be of 10 digit";
	return false;
}	
if(a.length>10){
	document.getElementById('message').innerHTML="*Mobile Number should be of 10 digit";
	return false;
}
if((a.charAt(0)!=9) && (a.charAt(1)!=8)){
document.getElementById('message').innerHTML="*Mobile Number must start with 98";
	return false;
}
}
	
</script>
	

</body>
</html>