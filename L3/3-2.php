<meta charset="UTF-8">
<?php
	function nomery($a){
	switch ($a){
		case 1:
			print 'first';
			break;
		case 2:
			print 'second';	
			break;
		case 3:
			print 'third';
			break;
		case 4:
			print 'fourth';	
			break;
		case 5:
			print 'fifth';	
			break;
	 	default:
		print 'Не правильне значення!!!';	

}
	}
nomery(5);