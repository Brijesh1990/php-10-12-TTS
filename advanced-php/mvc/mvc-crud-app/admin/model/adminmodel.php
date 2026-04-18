<?php 
class adminmodel 
{
 public  $conn="";   
 public function __construct()
 {
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

}

?>