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
  } 

?>  
  