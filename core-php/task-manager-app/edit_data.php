
<!-- edit data content -->
<?php 
require_once("navbar.php");
require_once("config.php");
// edit data 
if(isset($_GET["edit_id"]))
{
    $edit_id=$_GET["edit_id"];
    $select="select tbl_task.*,username from tbl_task join tbl_assignto on tbl_task.userid=tbl_assignto.userid where taskid='$edit_id'";
    $query=mysqli_query($conn,$select);
    $fetch=mysqli_fetch_array($query);
}

// update task ...

if(isset($_POST["updatetask"]))
{
$edit_id=$_GET["edit_id"];
$taskname=$_POST["task_name"];
$assign=$_POST["assign-to"];
$status=$_POST["status"];
$added_date=$_POST["added_date"];

$upd="update tbl_task set taskname='$taskname',userid='$assign',status='$status',added_date='$added_date' where taskid='$edit_id'";
$query=mysqli_query($conn,$upd);
echo "<script>
    alert('Task updated successfully')
    window.location='index.php';
    </script>";

}

?>
<section id="content" class="container w-50  p-3 mt-5">
<h3>Edit   Task  </h3>

<form method="post">
<div class="form-group mt-3">
<label class="text-success">Edit Taskname *</label>    
<input type="text" name="task_name" value="<?php echo $fetch["taskname"];?>" placeholder="Task Name *" class="form-control" />    
</div>

<div class="form-group mt-3">
<label class="text-success">Edit assignTo *</label>
<select name="assign-to" class="form-control">
<option value="">-Assign To-</option>
<!-- fetch users -->
<?php 
$select1="select * from tbl_assignto";
$query1=mysqli_query($conn,$select1);
while($fetch1=mysqli_fetch_array($query1))
{
    if($fetch1["userid"]==$fetch["userid"])
    {
?>

<option value="<?php echo $fetch["userid"];?>" selected='selected'><?php echo $fetch["username"];?></option>

<?php 
    }
    else 
    {
        ?>    

<option value="<?php echo $fetch1["userid"];?>"><?php echo $fetch1["username"];?></option>
<?php 
}
}
?>
</select>    
</div>

<div class="form-group mt-3">

<label class="text-success">Edit status *</label>    
<select name="status" class="form-control">
<option value="pending">pending</option>
<option value="completed">completed</option>
</select>    
</div>
<div class="form-group mt-3">

<label class="text-success">Edit Date *</label>    

<input type="date" name="added_date" value="<?php echo $fetch["added_date"];?>" placeholder="Name *" class="form-control" />    
</div>

<div class="form-group mt-3">
<input type="submit" name="updatetask" value="Update Task"  class="btn btn-md btn-dark text-white" />    
</div>
</form>    


</div>
</section>


<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.3.6/js/dataTables.js"></script>
<script>
new DataTable('#example');
</script>