<?php 
class Model 
{
 public $connection="";   
 public function __construct()
 {
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

}

?>