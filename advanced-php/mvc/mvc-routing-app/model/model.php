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
// create a member function for select all data 
public function selectalldata($table)
{
  $select="select * from $table";
  $query=mysqli_query($this->conn,$select);
  while($fetch=mysqli_fetch_array($query))
    {
      $arr[]=$fetch;
    }
    return $arr;
} 

// create a member function for insertall data
public function insertalldata($table,$data)
{
  // convert array as string of columns of table
  $key=array_keys($data);
  $key1=implode(",",$key);
  // convert array as string of values of table
  $value=array_values($data);
  $value1=implode("','",$value);
  // insert data query
  $insert="insert into $table($key1) values('$value1')";
  $query=mysqli_query($this->conn,$insert);
  return $query;
}
}

?>