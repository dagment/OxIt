<?php
 session_start();
 ?>
<html>
<head>
	<link href="css/bootstrap.css" rel="stylesheet">
	<meta charset="utf-8">
	<title> Вітання!</title>
<head>
 <body>
	<br>
  <div class="container">
      <div class="jumbotron">
        <h1>Вітаємо вас</h1>
        <p>Вітаємо шановний <strong><?php echo $_SESSION["user_name"]; ?></strong>. Ви потрапили сюди, оскільки вірно ввели свої дані =). Натисність на кнопку, щоб вийти з цієї сторінки.</p>
        <p>
          <a class="btn btn-lg btn-primary" href="logout.php" title="Logout">Вихід</a>
        </p>
      </div>
    </div>
 </body>
</html>