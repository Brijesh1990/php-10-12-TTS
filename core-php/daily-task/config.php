<?php 
session_start();
$conn=new mysqli("localhost","root","","rensitaskdb");
// live database connection
// $conn=new mysqli("sql100.byethost32.com","b32_40854273","t123456","b32_40854273_rensitaskdb");

if($conn->connect_error){
die("Connection failed: ".$conn->connect_error);
}
else 
{
// echo "Connected successfully";
}   

?>