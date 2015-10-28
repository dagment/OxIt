<?php
// Контроллер редагування статті
  class Application_Controllers_Edit extends Lib_BaseController
  {
     function index()
	 {
	     $model=new Application_Models_Edit;
		 $edit = $model->articleEdit();	
		 $this->edit=$edit;
		
	 }
  }
?>
