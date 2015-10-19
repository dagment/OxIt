<?php
session_start();
?>
 <html>
 <head>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	
	<title>Реєстрація користувача</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 </head>
 <body>
<div class="container">
	 <form class="form-signin" action="conn.php" method="post">
	 <strong class="text-danger"><?php echo $_SESSION["message"]  ?></strong>
	 <h3 class="form-signin-heading"> Реєстрація користувача</h3>
     Логін:<input class="input-block-level" type="text" name="name">
     Пароль:<input class="input-block-level" type="password" name="pass">
     <button class="btn btn-large btn-primary" type="submit">Відправити</button>
 </form>
 </div>
 </body>
</html>
<?php
unset($_SESSION["message"]);
?>