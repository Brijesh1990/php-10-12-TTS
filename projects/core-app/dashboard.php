<?php
require_once 'functions.php';
require_once 'header.php';
// check if user is logged in, if not redirect to login page
if(!isset($_SESSION['r_id'])){
    header("Location: login.php");
    exit();
}
?>

<div class="container mt-5">
    <h1>Welcome, <?php echo $_SESSION['name']; ?>!</h1>
    <p>This is your dashboard.</p>
    <a href="profile.php" class="btn btn-primary">View Profile</a>
    <a href="functions.php?logout=1" class="btn btn-danger">Logout</a>
</div>

<?php
require_once 'footer.php';
?>
