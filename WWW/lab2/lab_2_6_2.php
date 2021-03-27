<!DOCTYPE html>
<html>
<head>
	<title>Исаев Илья</title>
</head>
<body>
<?php
$p = 1;
$Massive = array(array(1,1,1,1,1,1,1,1,1,1),
				 	 array(1,1,1,1,1,1,1,1,1,1),
				 	 array(1,1,1,1,1,1,1,1,1,1),
				 	 array(1,1,1,1,1,1,1,1,1,1),
				 	 array(1,1,1,1,1,1,1,1,1,1),
				 	 array(1,1,1,1,1,1,1,1,1,1),
				 	 array(1,1,1,1,1,1,1,1,1,1),
				 	 array(1,1,1,1,1,1,1,1,1,1),
				 	 array(1,1,1,1,1,1,1,1,1,1)
				 );

echo 'Исходный массив' . '<br/>';
for ($i=0; $i < 9; $i++) {
	 	for ($j=0; $j < 9; $j++) {
		 		$Massive[$i][$j] = rand(-5,5);
			 	echo $Massive[$i][$j] . ' ';
		}
	 	echo '<br/>';
}
echo '<br/>';

echo "Скорректированный массив";
echo "<br>";

// Сумма строк
for ($i=0; $i < 9; $i++) {
		for ($j=0; $j < 9; $j++) {
				$sum[$i]=$sum[$i]+$Massive[$i][$j];
		}
}

// Сумма столбцов
for ($j=0; $j < 9; $j++) {
		for ($i=0; $i < 9; $i++) {
				$sum[$j+9]=$sum[$j+9]+$Massive[$i][$j];
		}
}

// Разница
for ($i=0; $i < 9; $i++) {
		for ($j=0; $j < 9; $j++) {
			  $Massive[$i][$i]=$sum[$i]-$sum[$i+9];
				echo $Massive[$i][$j] . ' ';
		}
		echo '<br/>';
}


?>
</body>
</html>
