<?php
//Модель виводу каталога

class Application_Models_Catalog extends Lib_Conn
  {	  
	
	  function getList()
	  { 
	  
		// $connect = new PDO(TYPE.':host='.HOST.';dbname='.NAME_DB, USER, PASSWORD);
		 $result = $this->db->prepare('SELECT * FROM content');
		 $result->execute();
		 while ($row  = $result->fetch(PDO::FETCH_LAZY))
		 {		 
			$сatalogItems[]=array(
				"id"=>$row['id'],
				"title"=>$row['title'],
				"short_desc"=>$row['short_desc'],
				"timestamp"=>$row['timestamp']				
			);
		  }
		
		
		 return $сatalogItems; 
	  }
  } 

?>  
  