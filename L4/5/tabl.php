<meta charset="UTF-8">
<link rel="stylesheet" href="css/bootstrap.css">
<?php
             
print '<table class="table table-bordered">';
	for($i=1;$i<=$_POST['stovp']+1;$i++){
		print '<tr>';
		if ($i==1) {
			print '<td class="warning"># </td>';
			for($j=1;$j<=$_POST['rad'];$j++){
			print '<td class="active">' . "<strong>$j</strong>" . '</td>';
			}
		}
		else
		for($j=1;$j<=$_POST['rad']+1;$j++){
			
			if ($j==1) {
				$k=$i-1;
				print '<td class="active">' . "<strong>$k</stong>" . '</td>';
			}
			else {
			print '<td>' . strip_tags($_POST["qwe$i$j"]) . '</td>';}
			
		}
		print '</tr>';		

	}
print '</table>';

