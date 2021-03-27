<!DOCTYPE html>
<html>
<head>
	<title>Исаев Илья</title>
</head>
<body>
	<img src="1.png">
<?php
echo '<br/>';

$a = rand(-20,20);
$b = rand(-20,20);

echo 'Первое число: ' . $a . '<br/>';
echo 'Второе число: ' . $b;

// вторая часть первого условия
$a1 =$a-$b*$b;
$b1=$b-$a;
$b2=$b-$a*$a;
$F = array(3);

for ($i=0; $i < 3; $i++) {
	//1
if ($a1 >= 0 && $b1 >= 0) {
	$F[$i] = $a1;
} elseif ($a >= 0 && $b2 >=0) {
	$F[$i] = $a;
}
	//2
if ($a1 < 0 && $b1 >= 0) {
	$F[$i] = $b1;
} elseif ($a < 0 && $b2 <= 0) {
	$F[$i] = $b2;
}
	//3
if ($a1 >= 0 && $b1 < 0) {
	$F[$i] = $a1 - 2*$b1;
} elseif ($a >= 0 && $b2 < 0) {
	$F[$i] = $a - 2*$b2;
}
	//4
if ($a1 < 0 && $b1 < 0) {
	$F[$i] = $a1*$b1+3*$b1;
} elseif ($a < 0 && $b2 < 0) {
	$F[$i] = $a*$b2+3*$b2;
}
}
$z = $F[0] + $F[1]; // Сумма функций

echo '<br/>' . 'Сумма функций равна: ' . $z;

?>
</body>
</html>
