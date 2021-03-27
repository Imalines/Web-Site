<h3>Исаев Илья</h3>
<?php
    $A=[];
    $count=rand(10,30);

    echo "Исходный массив: ";
    for ($i=0; $i < $count; $i++) {
      $A[$i]=rand(-10,10);
      echo $A[$i].' ';
    }

    $А1 = [];

    $i = 0;

    foreach($A as $array){
      if($array > 0){
          $i++;
      }else{
          $A1[] = $i;
          $i = 0;
      }
    }
    echo "<br>";
    echo 'Максимальное количество подряд идущих положительных элементов - ' . max($A1);

 ?>
