<?php
require_once "functions.php";
checkLogin();
$user = getUser($_SESSION['user']['id']);
include "header.php";
?>

<h2>Profile</h2>
<p>Name: <?php echo $user['name']; ?></p>
<p>Email: <?php echo $user['email']; ?></p>

<a href="edit.php" class="btn btn-warning">Edit</a>
<a href="delete.php" class="btn btn-danger">Delete</a>

<?php include "footer.php"; ?>