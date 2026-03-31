<?php
require_once "functions.php";
checkLogin();
$user = getUser($_SESSION['user']['id']);

if (isset($_POST['update'])) {
    updateUser($user['id'], $_POST['name'], $_POST['email']);
    header("Location: profile.php");
}
include "header.php";
?>

<h2>Edit Profile</h2>
<form method="POST">
<input class="form-control mb-2" name="name" value="<?php echo $user['name']; ?>">
<input class="form-control mb-2" name="email" value="<?php echo $user['email']; ?>">
<button class="btn btn-primary" name="update">Update</button>
</form>

<?php include "footer.php"; ?>