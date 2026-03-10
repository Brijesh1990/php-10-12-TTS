<?php 
class Model 
{
public $connection="";   
public function __construct()
{
session_start();    
try 
{
$this->connection=new mysqli("localhost","root","","blinkitappdb");
//echo "successfully connected";
}
catch(err)
{
die(mysqli_error($this->connection,err));
}
}
//admin login create a member function 
public function adminLogin($table,$email,$password)
{
$select="select * from $table where email='$email' and password='$password'";
$query=mysqli_query($this->connection,$select);
$fetch=mysqli_fetch_array($query);
$num_rows=mysqli_num_rows($query);
if($num_rows==1)
{
$_SESSION["adminid"]=$fetch["adminid"];
$_SESSION["email"]=$fetch["email"];
return true;
}
else 
{
return false;
}
}
// create a member function for Logout as Admin
public function LogoutAdmin()
{
    unset($_SESSION["adminid"]);
    unset($_SESSION["email"]);
    session_destroy();
    return true;
}

}

?>