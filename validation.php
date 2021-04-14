<?php 
session_start();
$con = mysqli_connect('localhost','id16555773_pregisster','DB-pw@181427');

mysqli_select_db($con,'id16555773_userregistration');

$pname = $_POST['pname'];
$pnum = $_POST['pnum'];

$s = "SELECT * FROM usertable WHERE name='$pname' && number='$pnum'";

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
 if ($num==1) {
 	$_SESSION['pname'] = $pname;
 	header('location:hire-me.html');
 }else{
 	header('location:index1.html');
 }

 ?>