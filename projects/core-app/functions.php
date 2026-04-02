<?php 
require_once 'config.php';
// create a function to register user
function registerApp($name,$email,$password,$cpassword,$added_date){
    global $conn;
    //check password with confirmed password
    if($password !== $cpassword){
        echo "<div class='alert alert-danger'>Password and Confirmed Password do not match.</div>";
        return false;
    }
    else {
        // Proceed with registration logic
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO tbl_register (name, email, password,added_date) VALUES ('$name', '$email', '$hashedPassword','$added_date')";

        if(mysqli_query($conn, $sql)) 
            {
            echo "<div class='alert alert-success'>Registration successful!</div>";
            header("refresh:2;url=login.php");
        } 
        else 
            {
            echo "<div class='alert alert-danger'>Error: " . mysqli_error($conn) . "</div>";
            header("refresh:2;url=register.php");
        }
        return true;

    }

}

// create a function to login user
function loginApp($email,$password){
    global $conn;
    $sql = "SELECT * FROM tbl_register WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['password'])){
            $_SESSION['r_id'] = $row['rid'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $row['email'];
            header("Location: dashboard.php");
        }
        else{
            echo "<div class='alert alert-danger'>Invalid Password.</div>";
            header("refresh:2;url=login.php");
        }
    }
    else{
        echo "<div class='alert alert-danger'>No user found with this email.</div>";
        header("refresh:2;url=login.php");
    }
}

// create a function to get user details
function getUserDetails($rid){
    global $conn;
    $sql = "SELECT * FROM tbl_register WHERE rid='$rid'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        return mysqli_fetch_assoc($result);
    }
    else{
        return false;
    }
}
// create a function edit user details
function editUserDetails($rid){
    global $conn;
    $sql = "SELECT * FROM tbl_register WHERE rid='$rid'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        return mysqli_fetch_assoc($result);
    }
    else{
        return false;
    }
}
// create a function to update user details
function updateUserDetails($rid,$name,$email){
    global $conn;
  $sql = "UPDATE tbl_register SET name='$name', email='$email' WHERE rid='$rid'";
    if(mysqli_query($conn, $sql)){
        return true;
        header("refresh:2;url=profile.php");
    }
    else{
        return false;
        header("refresh:2;url=edit.php");
    }
}

// create to delete users
function deleteUsers($rid)
{
    global $conn;
    $rid=$_SESSION['r_id'];
    $delete="delete from tbl_register where rid='$rid'";
    $query=mysqli_query($conn,$delete);
    if($query)
        {
            return true;
        }
        else 
            {
                return false;
            }
}
// create a function to logout user
if(isset($_GET['logout'])){
    unset($_SESSION['r_id']);
    unset($_SESSION['name']);
    unset($_SESSION['email']);
    session_destroy();
    header("Location: login.php");

}

?>