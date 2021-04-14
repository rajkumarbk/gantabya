<?php

$host='localhost';
$username='id16555773_pregisster';
$password='DB-pw@181427';
$dbname = 'id16555773_userregistration';

$conn=mysqli_connect($host,$username,$password, $dbname);
if($conn){
    echo "";
}
else {
    echo "connection failed!";
}

?>