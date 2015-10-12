<?php
             
print '<table border="1">';
	for($i=1;$i<=$_GET['stovp'];$i++){
		print '<tr>';
		for($j=1;$j<=$_GET['rad'];$j++){
		print '<td>';
		print rand(0,($_GET['rad']*$_GET['stovp']));
		print '</td>';
		}
		print '</tr>';		

	}
print '</table>';

