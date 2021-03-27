<?
$a = $_POST["One"];
$b = $_POST["Two"];
echo "Результат: ";
switch ($_POST["list"]) {
	case '1':
		echo ("" . $_POST["One"] + $_POST["Two"]);
		break;
	case '2':
		echo ("" . $_POST["One"] - $_POST["Two"]);
		break;
	case '3':
		echo ("" . $_POST["One"] * $_POST["Two"]);
		break;
	case '4':
		echo ("" . $_POST["One"] / $_POST["Two"]);
		break;
}
?>
