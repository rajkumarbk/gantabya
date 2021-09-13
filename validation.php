<?php 
session_start();
$con = mysqli_connect('localhost','id16555773_pregisster','DB-pw@181427');

mysqli_select_db($con,'id16555773_userregistration');

$email = $_POST['email'];
$pass = $_POST['pass'];

$s = "SELECT * FROM userdetails WHERE email='$email' && pass='$pass'";

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
 if ($num==1) {
 	$_SESSION['email'] = $email;
 	header('location:hire-me.php');
 }else{
 	
 	header('location:index1.html');
 }

 ?>
