<?php 
class model 
{
public $conn="";    
public function __construct()
{
//connection used here
try 
{
  $this->conn=new mysqli("localhost","root","","mvcapp");

}   
catch(err)
{
die(mysqli_error(err));
}
}    
}

?>