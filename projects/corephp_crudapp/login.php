<?php
require_once "functions.php";

if (isset($_POST['login'])) {
    if (loginUser($_POST['email'], $_POST['password'])) {
         setFlash("success", "Login successful!");
         header("refresh:2;url=dashboard.php");
       
    } else {
        setFlash("danger", "Invalid credentials");
        header("refresh:2;url=login.php");
    }
}
include "header.php";
?>

<h2>Login</h2>
<form method="POST">
<input class="form-control mb-2" name="email" type="email" required>
<input class="form-control mb-2" name="password" type="password" required>
<button class="btn btn-success" name="login">Login</button>
</form>

<?php include "footer.php"; ?>