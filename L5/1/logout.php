<?php
session_start();
unset($_SESSION["user_name"]);
unset($_SESSION["password"]);
unset($_SESSION["message"]);
header("Location:1.php");
?>