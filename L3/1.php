<?php
	
	function numbers($a){
	$b=0;
	for($i=0;$i<$a;$i++){
		$b=$b*10+$i+1;
		}
		print $b;
	}
	numbers(8);