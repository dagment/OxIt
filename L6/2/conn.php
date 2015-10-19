<?php
session_start();

try {
    $conn = new PDO('mysql:host=localhost;dbname=base1', 'admin', '123456'); 
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$username=$_POST['name'];
	$password=md5($_POST['pass']);
	$data = $conn->query("SELECT * FROM Users WHERE name='$username' and password='$password'");
	$row = $data->fetch();
	if(is_array($row)){
		$_SESSION["message"]="Даний користувач вже існує в бд";
	}
	else {
		$data = $conn->query('
		INSERT INTO Users
			(name,password)
		VALUES
			("'.$username.'","'.$password.'");
	');
	$_SESSION["message"]="Додано нового користувача";
	}
	

	} catch(PDOException $e) {
	$_SESSION["message"]='ERROR: ' . $e->getMessage();	
}
header("Location:2.php");
?>
<html>
<head>
	<meta charset="utf-8">
</head>
 <body>

 </body>
</html>