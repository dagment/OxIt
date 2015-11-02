<?php
// Контроллер добавлення статті
  class Application_Controllers_Add extends Lib_BaseController
  {
     function index()
	 {
	     $model=new Application_Models_Add;
		 $add = $model->articleAdd();	
		 $this->add=$add;
		
	 }
  }
?>
