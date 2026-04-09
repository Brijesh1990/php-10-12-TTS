<?php
require_once 'functions.php';
require_once 'header.php';
// check if user is logged in, if not redirect to login page
if(!isset($_SESSION['r_id'])){
    header("Location: login.php");
    exit();
}
// get user details
$edUsers = editUserDetails($_SESSION['r_id']);
// update user details when form is submitted
if(isset($_POST['update'])){
    $name = $_POST['name'];
    $email = $_POST['email'];

    if(updateUserDetails($_SESSION['r_id'],$name,$email)){
        echo "<div class='alert alert-success'>Profile updated successfully.</div>";
        header("refresh:2;url=profile.php");
    }
    else{
        echo "<div class='alert alert-danger'>Error updating profile.</div>";
        header("refresh:2;url=edit.php");
    }
}
?>
<form method="POST" class="mx-auto mt-5 shadow p-4">
    <h2 class="text-center mb-4">Edit Profile</h2>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="<?php echo $edUsers['name']; ?>" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="<?php echo $edUsers['email']; ?>" required>
    </div>
    <button type="submit" name="update" class="btn btn-primary w-100">Update Profile</button>

</form>

<?php 
require_once 'footer.php';
?>