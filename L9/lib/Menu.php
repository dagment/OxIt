<?php
//класс меню, возвращает html код для меню. 
//Экземпляр класса может быть вызван лишь один раз.
//Реализован патерн Singleton
  class Lib_Menu
  {
	public $MenuItem = array("Головна сторінка"=>"/", "Блог"=>"/catalog", "Вхід"=>"#modal");     
   
	protected static $instance; //(экземпляр объекта) Защищаем от создания через new Singleton
	private function __construct() {}	
	public static function getInstance() {//Возвращает единственный экземпляр класса
		if (!is_object(self::$instance)) self::$instance = new self;
		return self::$instance;
    }
	 
	public function  getMenu()
	 {	
	   $print="<ul>";	 
       foreach($this->MenuItem as $name=>$item ){
		 if ($name=="Вхід" && $_SESSION["User"]==""){
			 $print.='<li><a id="modal_trigger" href="'.$item.'">'.$name.'</a></li>';
		 }
	    elseif ($name=="Вхід" && $_SESSION["User"]!=""){
				$print.='<li><a href="/enter">'.$_SESSION["User"].'</a> [ <a href="/enter?out=1"><span style="font-size:10px">вийти</span></a> ]</li>';
			}			
		else $print.='<li><a href="'.$item.'">'.$name.'</a></li>';
	   }
	   $print.="</ul>";	
	   return  $print;		 
	 }
 }

?>