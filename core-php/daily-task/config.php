<?php 
session_start();
// create a connection for localhost
$conn=new mysqli("localhost","root","","rensitaskdb");
// create a live server database connection 
// $conn=new mysqli("sql100.byethost12.com","b12_40946069","d123456","b12_40946069_rensitaskdb");
if($conn->connect_error){
die("Connection failed: ".$conn->connect_error);
}
else 
{
// echo "Connected successfully";
}   

?>