<?php 
require_once 'functions.php';
require_once 'header.php';
// login user when form is submitted
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    loginApp($email,$password);
}
?>
<form  method="POST" class="mx-auto mt-5 shadow p-4">
    <h2 class="text-center mb-4">Login</h2>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" required>
    </div>
  
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control" required>
    </div>

    
    
    <button type="submit" name="login" class="btn btn-primary w-100">Login</button>

<?php 
require_once 'footer.php';
?>