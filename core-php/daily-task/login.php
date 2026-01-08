<?php 
// add connection file
include 'config.php';
// add user login code here
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=base64_encode($_POST['password']);

    $sql="SELECT * FROM tbl_register WHERE email='$email' AND password='$password'";
    $query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($query);
    $count=mysqli_num_rows($query);
    if($count==1)
        {
            $_SESSION['rid']=$row['rid'];
            $_SESSION['name']=$row['name'];
            $_SESSION['email']=$row['email'];
            echo "<script>
            alert('Login Successful');
            window.location.href='content.php';
            </script>";
        }
    else
        {
            echo "<script>
            alert('Invalid Credentials');
            window.location.href='login.php';
            </script>";
        }
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>task</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<body>

    <container>
        <div class="task-box m-auto mt-5 p-4 bg-white  rounded-lg shadow-lg">
            <h2 class="mx-auto text-center">Login</h2>
            <form method="post">
            
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>



                <button type="submit" name="login" class="btn btn-primary">Login</button>
            <!-- create a next page button -->
            <div class="mt-0 p-2 mb-5">
                 <a href="register.php" class="btn  rounded-pill float-left fs-5 text-danger"><i class="bi bi-arrow-return-left"></i> Back</a>

                <a href="login.php" class="btn  rounded-pill float-end"><i class="bi bi-arrow-right-circle-fill fs-1 text-dark"></i></a>
            </div>
        </div>


</body>
</html>