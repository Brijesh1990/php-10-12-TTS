<?php 
session_start();
$ser="localhost";
$user="root";
$pass="";
$db="coreapp";
$conn=mysqli_connect($ser,$user,$pass,$db);
if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}
?>