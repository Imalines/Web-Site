<?php
mb_internal_encoding("UTF-8");
$text = $_POST["userTEXT"];
$len_text = mb_strlen($text);
$sign = $_POST["char"];

$count_char = 0; //подсчет количества символов в тексте

$l = array($len_text);
echo $text;
echo "<br/>";
echo "Порядковыее номера символа " . $sign . " в тексте: ";

	for ($i=0; $i < $len_text; $i++) {
		$l[$i] = mb_substr($text,$i,1);
		if ($l[$i] == $sign) {
		$count_char = $count_char + 1;
		echo $i . " ";
	}
	}


	echo "<br/>";
echo "<br/>";
echo "Количество символа " . $sign . " - "  . $count_char;


 ?>
