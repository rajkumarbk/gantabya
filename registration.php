<?php
session_start();
header('location:index1.html');

	$fname = $_POST['fname'];
	$email= $_POST['email'];
	$pass= $_POST['pass'];
	$pnum= $_POST['pnum'];

	// Database connection
	$conn = new mysqli('localhost','id16555773_pregisster','DB-pw@181427','id16555773_userregistration');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into userdetails(fname, email,pass, pnum) values(?, ?, ?, ?)");
		$stmt->bind_param("sssi", $fname,$email, $pass, $pnum);
		$execval = $stmt->execute();
		echo $execval;
		
		$stmt->close();
		$conn->close();
	}
?>