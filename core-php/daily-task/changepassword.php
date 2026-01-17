<?php 
//add connection
include 'config.php';
// add header file
include 'header.php';
// change password 
if(isset($_POST["chngpass"]))
{
$rid=$_SESSION['rid'];
$opass=base64_encode($_POST["opass"]);
$npass=base64_encode($_POST["npass"]);
$cpass=base64_encode($_POST["cpass"]);
//select old password 
$select="select password from tbl_register where rid='$rid'";
$query=mysqli_query($conn,$select);
$fetch=mysqli_fetch_array($query);
$pass=$fetch["password"]; //get old password 
// update your password 
if($opass==$pass && $npass==$cpass)
{
$update="update tbl_register set password='$npass' where rid='$rid'";
$query=mysqli_query($conn,$update);
echo "<script>
alert('Your password are changed successfully')
window.location='content.php';
</script>";
}
else 
{
echo "<script>
alert('Your Old,New and confirmed password does not matched')
window.location='changepassword.php';
</script>";
}

}

?>
<!-- create a content -->
<div class="mx-auto bg-white p-5 task-box">
<div class="row">
<div class="col-md-12">
<h2 class="">Good Evening, <br> <?php echo $_SESSION['name']; ?>!</h2>
<div class="mt-4">
<!-- add task here -->
<form method="post">
<h4>Change your password ? </h4>
<div class="mb-3">
<label for="taskName" class="form-label">Old Password</label>
<input type="password" class="form-control" id="taskName" name="opass" placeholder="Enter Old password">
</div>


<div class="mb-3">
<label for="taskName" class="form-label">New  Password</label>
<input type="password" class="form-control" id="taskName" name="npass" placeholder="Enter New password">
</div>



<div class="mb-3">
<label for="taskName" class="form-label">Confirmed Password</label>
<input type="password" class="form-control" id="taskName" name="cpass" placeholder="Enter Confirmed password">
</div>
<button type="submit" name="chngpass" class="btn btn-primary">Change Password</button>
</form>
</div>
</div>
</div>