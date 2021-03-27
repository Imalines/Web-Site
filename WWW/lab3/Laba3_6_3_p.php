<?php 
mb_internal_encoding("UTF-8");
$userTEXT = $_POST["userText"];
$lenght = mb_strlen($userTEXT);	
//$mass = str_split($userTEXT);
$verh = 0;
$niz = 0;

for ($i=0; $i < $lenght; $i++) { 
		$mass[$i] = mb_substr($userTEXT,$i,1, 'utf-8');
		//$mass[$i] = mb_convert_encoding($mass[$i],"UTF-8");
	}
for ($i=0; $i < $lenght; $i++) { 
		if (mb_strtolower($mass[$i], 'utf-8') != $mass[$i]) {
		$verh++;
		}
	} 

echo "Количество больших символов " . $verh . "<br>";
echo "Длина строки " . $lenght . "<br>";
$niz = $lenght - $verh;
echo "Количество маленьких символов " . $niz . "<br>";
echo "Преобразованный текст: " . "<br>";
if ($verh > $niz) {
	for ($i=0; $i < $lenght; $i++) { 
	echo mb_strtolower($mass[$i]);
}
} elseif ($verh < $niz) {
		for ($i=0; $i < $lenght; $i++) { 
echo mb_strtoupper($mass[$i]);
}
} elseif ($verh == $niz) {
for ($i=0; $i < $lenght; $i++) { 
echo $mass[$i];
}
}
 ?>