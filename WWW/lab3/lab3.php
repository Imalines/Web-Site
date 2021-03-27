<?
$N = $_POST["number"];
$deliteli = array($N/2);
$k = 0; // индекс длины массива
$c = 0; // он мне просто нужен, забей)
for ($i=1; $i < $N ; $i++) {
	if ($N % $i == 0) {
		$deliteli[$k] = $i;
		$k++;
	}
}

switch ($_POST["list"]) {
	case 1:
		echo "Четные делители числа: " . $N . "<br/>";
		for ($i=0; $i < $k; $i++) {
			if ($deliteli[$i] % 2 == 0) {
				echo $deliteli[$i] . " ";
			}
		}
		break;
	case 2:
		echo "Нечетные делители числа: " . $N . "<br/>";
		for ($i=0; $i < $k; $i++) {
			if ($deliteli[$i] % 2 != 0) {
				echo $deliteli[$i] . " ";
			}
		}
		break;
	case 3:
	echo "Простые делители числа: " . $N . "<br/>";
		for ($i=0; $i < $k; $i++) {
			for ($j=1; $j <=$deliteli[$i] ; $j++){
			 if ($deliteli[$i] % $j == 0) {
				$c++;
			}
			}
			if ($c == 2) {
				echo $deliteli[$i] . " ";
			}
			$c = 0;
		}
		break;
	case 4:
		echo "Составные делители числа: " . $N . "<br/>";
		for ($i=0; $i < $k; $i++) {
			for ($j=1; $j <=$deliteli[$i] ; $j++){
			 if ($deliteli[$i] % $j == 0) {
				$c++;
			}
			}
			if ($c != 2) {
				echo $deliteli[$i] . " ";
			}
			$c = 0;
		}
		break;
	case 5:
		echo "Все делители числа: " . $N . "<br/>";
		for ($i=0; $i < $k; $i++) {
			echo ($deliteli[$i] . " ");
		}
		break;
}
?>
