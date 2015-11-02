<?php
Error_Reporting(E_ALL & ~E_NOTICE);//не выводить предупреждения
 function __autoload ($class_name) //автоматическая загрузка кслассов
 {
    $path=str_replace("_", "/", $class_name);//разбивает имя класска получая из него путь

   if (file_exists($path.".php")) {
     include_once($path .".php");//подключает php файл по полученному пути	
	}
	else{
	header("HTTP/1.0 404 Not Found");
	echo "К сожалению такой страницы не существует.";
	exit;
	}
 }
 //константы для подключения к базе данных
 define('TYPE', 'mysql');
 define('HOST', 'localhost');
 define('USER', 'root');
 define('PASSWORD', '');
 define('NAME_DB', 'db1');




