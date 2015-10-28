<?php
//модель авторизации
 class Application_Models_Auth  extends Lib_Conn
  {	  
	//проверка данных авторизации
	  function ValidData($login,$pass)
	  {
		 // $connect = new PDO(TYPE.':host='.HOST.';dbname='.NAME_DB, USER, PASSWORD);
		
		$res = $this->db->prepare("SELECT * FROM user WHERE login='$login' and pass='$pass'");
		$res->execute();
		if($result = $res->fetchColumn())
		    { 
			$_SESSION["Auth"]=true;  
			$_SESSION["User"]=$login;  
			} 
		else $_SESSION["Auth"]=false;  

		if (!$_SESSION["Auth"]){
			$msg="<em><span style='color:red'>Не вірно введені дані!</span></em>";
		}	
		else {
			$msg="<em><span style='color:green'>Усе правильно ввели)!</span></em>";
			$unVisibleForm=true;
		}
		
		$result=array("unVisibleForm"=>$unVisibleForm,
						"userName"=>$login,
						"msg"=>$msg,
						"login"=>$login,
						"pass"=>$pass,);
		return $result;
	  }
  } 

?>  
  