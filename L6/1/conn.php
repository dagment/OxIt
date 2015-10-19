<?php
session_start();

try {
    $conn = new PDO('mysql:host=localhost;dbname='.$_POST["namebd"], $_POST["name"], $_POST["pass"]); 
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$data = $conn->query('
	CREATE TABLE Users(
	uid int NOT NULL AUTO_INCREMENT,
	name varchar(255),
	password varchar(255),
	PRIMARY KEY(uid)
	);');
	$_SESSION["message"]="Успішно створено";
	} catch(PDOException $e) {
	$_SESSION["message"]='ERROR: ' . $e->getMessage();	
}
header("Location:bs.php");
?>
<html>
<head>
	<meta charset="utf-8">
</head>
 <body>

 </body>
</html>