<?php
//контролер обрабатывает данные каталога
  class Application_Controllers_Article extends Lib_BaseController
  {
     function index()
	 {
	     $model=new Application_Models_Article;
		 $article = $model->getArticle($_REQUEST['id']);	
		 $this->article=$article;
		
	 }
  }

?>