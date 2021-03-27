<?php
if ($_POST["One"] == $_POST["Two"]) {
	echo "Введеные числа равны";
} elseif ($_POST["One"] > $_POST["Two"]) {
	echo ("Наибольшее введенное число: " . $_POST["One"]);
} elseif ($_POST["One"] < $_POST["Two"]) {
	echo ("Наибольшее введенное число: " . $_POST["Two"]);
}
 ?>