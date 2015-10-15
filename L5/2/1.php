<?php
session_start();
?>
 <html>
 <head>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<style type="text/css">body{padding-top:40px;padding-bottom:40px;background-color:#f5f5f5;}.form-signin{max-width:300px;padding:19px 29px 29px;margin:0 auto 20px;background-color:#fff;border:1px solid #e5e5e5;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;-webkit-box-shadow:0 1px 2px rgba(0,0,0,.05);-moz-box-shadow:0 1px 2px rgba(0,0,0,.05);box-shadow:0 1px 2px rgba(0,0,0,.05);}.form-signin .form-signin-heading,.form-signin .checkbox{margin-bottom:10px;}.form-signin input[type="text"],.form-signin input[type="textarea"],.form-signin input[type="password"]{font-size:16px;height:auto;margin-bottom:15px;padding:7px 9px;}</style>
	<title> Створення файлу </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 </head>
 <body>
	<div class="container">
	 <form class="form-signin" action="file.php" method="post">
	 <strong class="text-danger"><?php echo $_SESSION["message"] ?></strong>
	 <h3 class="form-signin-heading"> Створіть файл з вмістом </h3>
     <input class="input-block-level" type="text" name="file_name" placeholder="Назва файлу">
     <input class="input-block-level" type="textarea" name="file_text" placeholder="Вміст файлу">
     <button class="btn btn-large btn-primary" type="submit" name="btn1">Клац</button>
 </form>
 </div>
 </body>
</html>
<?php
unset($_SESSION["message"]);
?>