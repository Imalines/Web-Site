<!DOCTYPE html>
<html>
<head>
	<title>Исаев Илья</title>
</head>
<body>
	<img src="2.png">

<?php
echo '<br/>';
$a = rand(-20,20);
$b = rand(-20,20);

echo 'Первое число: ' . $a . '<br/>';
echo 'Второе число: ' . $b;

// вторая часть первого условия
$a1 = $a+1/$b;
$b1=pow($b,8)/pow($a,6);

$a2=pow($a,3/4)+pow($b,5/6);
$b2=$b-$a;

$F = array(2);

for ($i=0; $i < 2; $i++) {

	//1
if ($a1 >= 0 && $b1 >= 0) {
	$F[$i] = $a1/$b1-$b1*$b1;
} elseif ($a2 >= 0 && $b2 >=0) {
	$F[$i] = $a2/$b2-$b2*$b2;
}
	//2
if ($a1 < 0 && $b1 >= 0) {
	$F[$i] = $a1 + $b1*$b1/$a1;
} elseif ($a2 < 0 && $b2 >= 0) {
	$F[$i] = $a2 + $b2*$b2/$a2;
}
	//3
if ($a1 >= 0 && $b1 < 0) {
	$F[$i] = $a1 - $b1;
} elseif ($a2 >= 0 && $b2<0) {
	$F[$i] = $a2 - $b2;
}

	//4
if ($a1 < 0 && $b1 < 0) {
	$F[$i] = ($b1+3*$a1)/$a1*$b1;
} elseif ($a2 < 0 && $b < 0) {
	$F[$i] = ($b2+3*$a2)/$a2*$b2;
}

}

$z = $F[0] + $F[1]; // Сумма функций
echo '<br/>' . 'Сумма функций равна: ' . $z;
?>
</body>
</html>
