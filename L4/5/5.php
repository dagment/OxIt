<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Введення даних в таблицю</title>
</head>
<body>
<form class="form-signin" action="tabl.php" method="POST">
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
			print '<td>' . '<input type="text" name="qwe' . $i . $j . '"></td>';}
			
		}
		print '</tr>';		

	}
print '</table>';
print '<input type="hidden" value="' . $_POST['rad'] . '" name="rad">';
print '<input type="hidden" value="' . $_POST['stovp'] . '" name="stovp">';

?>
<button class="btn btn-large btn-primary" type="submit">Вивести таблицю</button>
</form>
</body>
</html>

