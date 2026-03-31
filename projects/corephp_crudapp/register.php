<?php
require_once "functions.php";

if (isset($_POST['register'])) 
{
    registerUser($_POST['name'], $_POST['email'], $_POST['password']);
    setFlash("success", "Registration successful! Please login.");
    header("refresh:4;url=login.php");
}
include "header.php";
?>

<h2>Register</h2>
<form method="POST">
<input class="form-control mb-2" name="name" placeholder="Name" required>
<input class="form-control mb-2" name="email" type="email" required>
<input class="form-control mb-2" name="password" type="password" required>
<button class="btn btn-primary" name="register">Register</button>
</form>

<?php include "footer.php"; ?>