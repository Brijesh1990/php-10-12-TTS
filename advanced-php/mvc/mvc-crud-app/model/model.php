<?php 
class model 
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
// create a member function for insert all data
public function insalldata($table,$data)
{
 
  $column=array_keys($data);
  $column1=implode(",",$column);

  $values=array_values($data);
  $values1=implode("','",$values);
 
  $insert="insert into $table($column1) values('$values1')";
  $query=mysqli_query($this->conn,$insert);
  return $query; 
}
}

?>