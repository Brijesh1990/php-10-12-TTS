<?php 
class adminmodel 
{
public  $conn="";   
public function __construct()
{
session_start();  
// connection
try 
{
$this->conn=new mysqli("localhost","root","","mvcappdb");
}
catch(Exception $e)
{
die(mysqli_error($e));
}
}   
// create a member function for logged in as admin
public function loginAdmin($table,$email,$password)
{
$select="select * from $table where email='$email' and password='$password'";
$query=mysqli_query($this->conn,$select);
$num_rows=mysqli_num_rows($query);
$fetch=mysqli_fetch_array($query);
if($num_rows==1)
{
 $_SESSION["admin_id"]=$fetch["admin_id"];
 $_SESSION["email"]=$fetch["email"];
 return true;
}
else 
{
return false;
}
}
// create a member function insert data via admin
public function insertAllData($table,$data)
{
//array as string of column 
 $column=array_keys($data);
 $column1=implode(',',$column);
//array as string of values
 $values=array_values($data);
 $values1=implode("','",$values);
 $insert="insert into $table($column1) values('$values1')";
 $query=mysqli_query($this->conn,$insert);
 return $query;
}

// create a member function for selectalldata
public function selectAllData($table)
{
  $select="select * from $table";
  $query=mysqli_query($this->conn,$select);
  while($fetch=mysqli_fetch_array($query))
    {
      $arr[]=$fetch;
    }
    return $arr;
}
// create an member function for logout as admin
public function logoutAdmin()
{
unset($_SESSION["admin_id"]);
unset($_SESSION["email"]);
session_destroy();
return true;
}

}

?>