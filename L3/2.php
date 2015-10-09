<?php
	print "<table>";
	for($i=1;$i<=25;$i++){
		print "<tr>";
		for($j=1;$j<=25;$j++){
		print "<td>";
		print $i*$j;
		print "</td>";
		}
		print "</tr>";		

	}
	print "</table>";