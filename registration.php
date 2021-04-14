<?php 
session_start();
header('location:index1.html');
$con = mysqli_connect('localhost','id16555773_pregisster','DB-pw@181427');

mysqli_select_db($con,'id16555773_userregistration');

$pname = $_POST['pname'];
$pnum = $_POST['pnum'];

$s = "SELECT * FROM usertable WHERE name='$pname'";

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
 if ($num==1) {
 	echo "User already taken";
 }else{
 	$reg = "INSERT INTO usertable(name, number) VALUES('$pname' , '$pnum')";
 	mysqli_query($con,$reg);
 	echo "Account Created Successfully";
 }

 ?>