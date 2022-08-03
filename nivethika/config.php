<?php
$servername="localhost";
$username="root";
$password="";
$database="tour_guide";

$conn=new mysqli($servername,$username,$password,$database);

if($conn->connect_error){
	die("connection failed: ".$conn->connect_error);
}
echo"connected successfully"; 

?>

