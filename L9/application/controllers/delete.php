<?php
  class Application_Controllers_Delete extends Lib_BaseController
  {
     function index()
	 {
	     $model=new Application_Models_Delete;
		 $delete = $model->articleDelete();	
		 $this->delete=$delete;
		
	 }
  }
?>
