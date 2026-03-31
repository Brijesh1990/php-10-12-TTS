<?php
require_once "functions.php";
checkLogin();
deleteUser($_SESSION['user']['id']);
session_destroy();
header("Location: register.php");
?>