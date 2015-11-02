<?php
//контролер обрабатывает данные каталога
  class Application_Controllers_Catalog extends Lib_BaseController
  {
     function index()
	 {
	     $model=new Application_Models_Catalog;
		 $Items = $model->getList();	
		 $this->Items=$Items;
		
	 }
  }

?>