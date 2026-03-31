<?php
require_once "config.php";

// FLASH MESSAGE
function setFlash($type, $message) {
    $_SESSION['flash'] = [
        "type" => $type,
        "message" => $message
    ];
}
// set a flash messages
function displayFlash() {
    if (isset($_SESSION['flash'])) {
        $type = $_SESSION['flash']['type'];
        $message = $_SESSION['flash']['message'];

        echo "<div class='alert alert-$type alert-dismissible fade show' role='alert'>
                $message
                <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
              </div>";
        unset($_SESSION['flash']);
    }
}
//create a function for  REGISTER
function registerUser($name, $email, $password) 
{
    global $conn;
    $password = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO users (name, email, password)
              VALUES ('$name', '$email', '$password')";
    return mysqli_query($conn, $query);
}

// LOGIN
function loginUser($email, $password) {
    global $conn;

    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $row['password'])) {
            $_SESSION['user'] = $row;
            return true;
        }
    }
    return false;
}

// GET USER
function getUser($id) {
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");
    return mysqli_fetch_assoc($result);
}

// UPDATE USER
function updateUser($id, $name, $email) {
    global $conn;

    $query = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
    return mysqli_query($conn, $query);
}

// DELETE USER
function deleteUser($id) {
    global $conn;

    $query = "DELETE FROM users WHERE id=$id";
    return mysqli_query($conn, $query);
}

// CHECK LOGIN
function checkLogin() {
    if (!isset($_SESSION['user'])) {
        header("Location: login.php");
        exit();
    }
}
?>