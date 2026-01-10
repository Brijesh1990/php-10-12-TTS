<?php 
//add connection
include 'config.php';
// if session expired
// session lifetime in seconds
$session_lifetime = 10;
if (isset($_SESSION['expire_time']) && time() > $_SESSION['expire_time']) {
session_unset();
session_destroy();
header("Location: login.php?msg=expired");
exit;
}
// session lifetime in seconds
if(!isset($_SESSION["rid"]))
{
header("Location: login.php");
}
else 
{
?>
<?php     
// add header file
include 'header.php';
// fetch task list here
$session_lifetime = 10;
$rid=$_SESSION['rid'];
$sql="SELECT * FROM tbl_task WHERE rid='$rid'";
$query=mysqli_query($conn,$sql);
// reset expiry time on each request
$_SESSION['expire_time'] = time() + $session_lifetime;
// approved task to insert data
if(isset($_POST['approveTask'])){
$rid=$_SESSION['rid'];
$approvedTasks=implode(",",$_POST['taskChk']);
$sql="INSERT INTO tbl_approved_tasks (rid,approved_task_name) VALUES ( '$rid', '$approvedTasks')";
$query=mysqli_query($conn,$sql);
if($query)
{
echo "<script>
alert('Task Approved Successfully');
window.location.href='managetask.php';
</script>";
}
else
{
echo "Error: ".mysqli_error($conn);
}
}

?>
<!-- create a content -->
<div class="task-box mx-auto bg-white p-5">
<div class="row">
<div class="col-md-12">
<h2 class="">Good Evening, <br> <?php echo $_SESSION['name']; ?>!</h2>
<form method="post">
<div class="text-center mt-4">
<!-- show task list  -->
<div class="list-group">
<?php
while($row=mysqli_fetch_array($query)){
?>
<div class="d-flex w-100 justify-content-between mb-3 p-3 border">
<h5 class="mb-1"><?php echo $row['task_name']; ?></h5>
<!-- add radio button -->
<input type="checkbox" name="taskChk[]" value="<?php echo $row['task_name']; ?>">
</div>

<?php
}
?>

<div class="text-center mt-0 p-2 mb-5">

<button type="submit" name="approveTask" class="btn  rounded-pill float-end btn-dark">Approved Task</button>
</div>
</div>
</form>
</div>
</div>

<?php 
}
?>