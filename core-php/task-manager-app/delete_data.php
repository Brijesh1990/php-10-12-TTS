<?php 
require_once("config.php");
// set id del_id 
if(isset($_GET["del_id"]))
{
$del_id=$_GET["del_id"];
$delete="delete from tbl_task where taskid='$del_id'";
$query=mysqli_query($conn,$delete);
if($query)
{
 echo "<script>
    alert('Task deleted successfully')
    window.location='index.php';
    </script>"; 
}   
else 
{
 echo "<script>
    alert('something went wrong while deleting data')
    window.location='index.php';
    </script>";
}
}

?>