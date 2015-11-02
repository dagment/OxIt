<?php
//Модель виводу cстатті
 class Application_Models_Article  extends Lib_Conn
  {	  
	  function getArticle($id)
	  { 
		 $result=$this->db->prepare("SELECT * FROM content WHERE id='$id'");
		 $result->execute();
		 if($row = $result->fetch(PDO::FETCH_OBJ))
		 {		 
		
			$article=array(
				"id"=>$row->id,
				"title"=>$row->title,
				"full_desc"=>$row->full_desc,
				"timestamp"=>$row->timestamp
			);
			
		  }
		  return $article; 
	  }
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
  