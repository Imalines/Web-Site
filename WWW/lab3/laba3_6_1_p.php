<?php
mb_internal_encoding("UTF-8");
$text = $_POST["givenText"];
$len_text = mb_strlen($text);

echo "Слово: $text <br>";

$begin = mb_substr($text,0,$len_text-3, 'utf-8');
$end = mb_substr($text,$len_text-3,$len_text, 'utf-8');
$text_itog=$end.$begin;

echo "Зашифрованное слово: $text_itog";
 ?>
