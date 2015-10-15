<?php
session_start();

if (!empty($_POST["file_name"]) && !empty($_POST["file_text"])) {
$fl = fopen("files/" . $_POST["file_name"] . ".txt", "w+");
fwrite($fl,$_POST["file_text"]);
fclose($fl);
$_SESSION["message"]="Файл " . $_POST["file_name"] . ".txt створено у папці files";
}
else {
	$_SESSION["message"]="Заповніть обидва поля!";
}
header("Location:1.php");
?>
<html>
<head>
	<meta charset="utf-8">
</head>
 <body>

 </body>
</html>