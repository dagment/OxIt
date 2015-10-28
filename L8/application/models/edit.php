<?php
 class Application_Models_Edit  extends Lib_Conn
  {	  
	//проверка данных авторизации
	  function articleEdit()
	  {
		  if (isset($_POST['submit'])) {
		    $stmt = $this->db->prepare('
			UPDATE content
			SET
				title=:title, short_desc=:short_desc, full_desc=:full_desc, timestamp=:timestamp
				WHERE id = :id');
			$stmt->bindParam(':id', $_POST['idd'], PDO::PARAM_INT);
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
