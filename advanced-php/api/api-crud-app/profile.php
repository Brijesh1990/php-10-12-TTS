<?php
require_once 'functions.php';
require_once 'header.php';
// check if user is logged in, if not redirect to login page
if(!isset($_SESSION['r_id'])){
    header("Location: login.php");
    exit();
}
// get user details from database using session r_id in decoded json format
$user = getUserDetails($_SESSION['r_id']);

?>

<div class="container mt-5">
    <h1>Profile</h1>
    <p><strong>Name:</strong> <?php echo $user['name']; ?></p>
    <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
    <a href="edit.php" class="btn btn-warning">Edit Profile</a>
    <a href="delete.php" onclick="return confirm('Are you sure to delete users ?')" class="btn btn-danger">Delete Account</a>
    
    <a href="dashboard.php" class="btn btn-primary">Back to Dashboard</a>
    <a href="functions.php?logout=1" class="btn btn-danger">Logout</a>
</div>

<?php
require_once 'footer.php';
?>