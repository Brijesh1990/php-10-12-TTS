<?php 
require_once 'functions.php';
require_once 'header.php';

// delete users
if(isset($_SESSION['r_id']))
{    
$rid=$_SESSION['r_id'];        
deleteUsers($rid);
echo "<div class='alert alert-success'>Profile Deleted successfully.</div>";
header("refresh:2;url=register.php");

}

if(!isset($_SESSION['r_id'])){
    header("Location: login.php");
    exit();
}

?>

