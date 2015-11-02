<?php
 class Application_Models_Delete  extends Lib_Conn
  {	  
	//Модель видалення статті
	  function articleDelete()
	  {
		 
		if (isset($_POST['yes'])) {
			$stmt = $this->db->prepare("DELETE FROM content WHERE id = :id");
			$stmt->bindParam(':id', $_POST['idd'], PDO::PARAM_INT);
			$status = $stmt->execute();
			
			return header("Location: /catalog");
		 }
		  elseif (isset($_POST['no'])) {
			return header('Location: /catalog');
		}
	   } 
  }
?>
