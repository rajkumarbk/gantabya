<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style1.css">
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form action="validation.php" method="post"onsubmit="return validate()">

    
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
      
        <input type="submit" value="Login">
        <div class="signup_link">
          Do not have account? Register <a href="signup.php">Here</a>
        </div>
      </form>
    </div>

    <script>
  /*      function validate(){

            emails=document.getElementById('emails').value;
          //  pass=document.getElementById('pass').value;


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
       } */
</script>
       <script type="text/javascript">
        function validate(){

    	//get form values
        var email = document.getElementById('emails');
        var password = document.getElementById('pass');

    //check wheather email and password fileds are empty or not
if(email.value==''){
    document.getElementById('emailids').innerHTML =" *Required Field";
return false ;
}
else{
var pos = email.value.search(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/);

if(pos!=0){
    document.getElementById('emailids').innerHTML =" *Invalid Email";
    return false;
}else{

}
}

    if(password.value==''){
    document.getElementById('passwords').innerHTML =" *Password can not be empty";
 return false;
    }	
}
 </script>
    
  </body>
</html>