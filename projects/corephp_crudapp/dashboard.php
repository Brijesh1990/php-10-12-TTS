<?php
require_once "functions.php";
checkLogin();
include "header.php";
?>

<h2>Welcome <?php echo $_SESSION['user']['name']; ?></h2>

<a href="profile.php" class="btn btn-info">Profile</a>
<a href="logout.php" class="btn btn-danger">Logout</a>

<?php include "footer.php"; ?>