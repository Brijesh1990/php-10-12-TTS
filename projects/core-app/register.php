<?php 
require_once 'functions.php';
require_once 'header.php';
// register user when form is submitted
if(isset($_POST['register'])){
    date_default_timezone_set('Asia/Calcutta');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmed_password'];
    $added_date = date('Y-m-d H:i:s');
    registerApp($name,$email,$password,$cpassword,$added_date);

}
?>
<div class="container register-container">
    <div class="row w-100 shadow register-card bg-white">

        <!-- LEFT SIDE (GIF) -->
        <div class="col-md-6 gif-side d-none d-md-flex">
            <img src="https://media.giphy.com/media/3o7btPCcdNniyf0ArS/giphy.gif" alt="register gif" class="img-fluid w-75 mt-5">
        </div>

        <!-- RIGHT SIDE (FORM) -->
        <div class="col-md-6 p-5">
            <form method="POST">
                <h2 class="text-center mb-4">Register</h2>

                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" name="confirmed_password" class="form-control" required>
                </div>

                <button type="submit" name="register" class="btn btn-primary w-100">
                    Register
                </button>
            </form>
        </div>

    </div>
</div>

<?php 
require_once 'footer.php';
?>