<?php
session_start();
$_SESSION["user_name"] = $_POST["name"];
$_SESSION["password"] = $_POST["pass"];
if($_SESSION["user_name"] == "admin"  && $_SESSION["password"] == "123456") {
header("Location:welcome.php");
} else {
$_SESSION["message"] = "Invalid Username or Password!";
header("Location:1.php");
}
?>
