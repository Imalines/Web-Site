<!DOCTYPE html>
<html>
<head>
	<title>Исаев Илья</title>
</head>
<body>

<?php

$Massive = array(array(1,1,1,1,1,1,1,1,1),
				 	 array(1,1,1,1,1,1,1,1,1),
				 	 array(1,1,1,1,1,1,1,1,1),
				 	 array(1,1,1,1,1,1,1,1,1),
				 	 array(1,1,1,1,1,1,1,1,1),
				 	 array(1,1,1,1,1,1,1,1,1),
				 	 array(1,1,1,1,1,1,1,1,1),
				 	 array(1,1,1,1,1,1,1,1,1),
				 	 array(1,1,1,1,1,1,1,1,1)
				 );

echo 'Исходный массив' . '<br/>';
for ($i=0; $i < 9; $i++) {
	for ($j=0; $j < 9; $j++) {
	$Massive[$i][$j] = rand(-20,20);
	echo $Massive[$i][$j] . ' ';
	}
	echo '<br/>';
}
echo '<br/>';

for ($j=0; $j < 9; $j++) {
		for($i=0; $i < 9; $i++){
				$B[$j]=$B[$j]+$Massive[$i][$j];
		}
}

echo 'Скорректированный массив' . '<br/>';
for ($i=0; $i < 9; $i++) {
		echo $B[$i] . ' ';
}

?>
</body>
</html>
