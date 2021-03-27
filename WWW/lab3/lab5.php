<?php
$QUA = array(20);
for ($i=1; $i <= 20 ; $i++) {
	$QUA[$i-1] = $_POST["$i"];
	//echo $QUA[$i-1];
}
      $UN = $_POST["name"];

	$yes = [3, 9, 10, 13, 14, 19];
            $no = [1, 2, 4, 5, 6, 7, 8, 11, 12, 15, 16, 17, 18, 20];
    $A = "Да";
    $B = "Нет";
            $result = 0;

            for ($i=0; $i < 6; $i++) {
            	if ($QUA[$yes[$i]-1] == $A) {
            		$result++;
            	}
            }

            for ($i=0; $i < 14; $i++) {
            	if ($QUA[$no[$i]-1] == $B) {
            		$result++;
            	}
            }

            if ($result > 15) {
            	echo $UN . " ,так держать!";
            } elseif ($result > 8 & $result < 15) {
            	echo $UN . " ,У вас есть недостатки, но всё не так плохо";
            } elseif ($result < 8) {
            	echo $UN . " , сожалею, у вас дела не очень";
            }

 ?>
