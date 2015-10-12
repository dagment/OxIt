<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Таблиця</title>
</head>
<body>
<?php
             
print '<table class="table table-bordered">';
	for($i=1;$i<=$_GET['stovp']+1;$i++){
		print '<tr>';
		if ($i==1) {
			print '<td class="warning"># </td>';
			for($j=1;$j<=$_GET['rad'];$j++){
			print '<td class="active">' . "<strong>$j</strong>" . '</td>';
			}
		}
		else
		for($j=1;$j<=$_GET['rad']+1;$j++){
			
			if ($j==1) {
				$k=$i-1;
				print '<td class="active">' . "<strong>$k</stong>" . '</td>';
			}
			else {
			print '<td>' . rand(0,($_GET['rad']*$_GET['stovp'])) . '</td>';}
			
		}
		print '</tr>';		

	}
print '</table>';
?>
</body>
</html>
