<?php
$origin = $_POST['origin'];
$destination = $_POST['destination'];
$date = $_POST['date'];

include 'dbconnection.php';

   $sql= "INSERT INTO passenger(origin, destination, date) VALUES ('$origin','$destination', '$date')";
$result= mysqli_query($conn, $sql);
if($result){
    header('Location:deluxe.html');
     die();
}
?>
