<?php
 class Application_Models_Add  extends Lib_Conn
  {	  
	//проверка данных авторизации
	  function articleAdd()
	  {
		  if (isset($_POST['submit'])) {
		    $stmt = $this->db->prepare('INSERT INTO content VALUES(NULL, :title, :short_desc, :full_desc, :timestamp)');
			// Обрізаємо усі теги у загловку.
			$stmt->bindParam(':title', strip_tags($_POST['title']));
			// Екрануємо теги у полях короткого та повного опису.
			$stmt->bindParam(':short_desc', htmlspecialchars($_POST['short_desc']));
			$stmt->bindParam(':full_desc', htmlspecialchars($_POST['full_desc']));
			// Беремо дату та час, переводимо у UNIX час.
			$date = "{$_POST['date']}  {$_POST['time']}";
			$stmt->bindParam(':timestamp', strtotime($date));
			// Виконуємо запит, результат запиту знаходиться у змінні $status.
			// Якщо $status рівне TRUE, тоді запит відбувся успішно.
			$status = $stmt->execute();
			return header("Location: /catalog");
		  }
		  
  } 
  }
?>
