<?php 
require_once("config.php");
// set a button 
if(isset($_POST["addtask"]))
{
 $taskname=$_POST["task_name"];
 $assign=$_POST["assign-to"];
 $status=$_POST["status"];
 $added_date=$_POST["added_date"];
//  insert task query 
$insert="insert into tbl_task(taskname,userid,status,added_date) values('$taskname','$assign','$status','$added_date')";
$query=mysqli_query($conn,$insert);
if($query)
{
    echo "<script>
    alert('Task added successfully')
    window.location='index.php';
    </script>";
}
else 
{
     echo "<script>
    alert('something went wrong')
    window.location='index.php';
    </script>";
}
}


?>