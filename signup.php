<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <script type="text/javascript">
function validate() {
var a = document.getElementById('mobilenumber').value;
if(a==""){
	document.getElementById('messages').innerHTML="*This field can't be empty";
	return false;
}
if(isNaN(a)){
	document.getElementById('messages').innerHTML="*Enter Numeric value only";
	return false;
}
if(a.length<10){
	document.getElementById('messages').innerHTML="*Mobile Number should be of 10 digit";
	return false;
}	
if(a.length>10){
	document.getElementById('messages').innerHTML="*Mobile Number should be of 10 digit";
	return false;
}
if((a.charAt(0)!=9) && (a.charAt(1)!=8)){
document.getElementById('messages').innerHTML="*Mobile Number must start with 98";
	return false;
}
}
	
</script>

 	<div class="login-box">
			<form action="registration.php" method="post" onsubmit="return validate()">
			<h3 style="color: white;">Create an account</h3>
				<div class="signup"><label>Name</label><br>
				<input type="text" name="pname"  required><br><br>
			
			
				<label>Phone</label><br>
				<input type="text" id="mobilenumber" value=""><br><br>
				<span id="messages" style="color:red;"></span>
				</div>
			<button type="submit" value="Submit" class="but2">Sign up</button>

			</form>
	</div>
</body>
</html>