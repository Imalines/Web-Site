<h3>Исаев Илья</h3>
<?php
  $A=[];
  $count=rand(1,20);

  echo "Исходный массив: ";
  for ($i=0; $i < $count; $i++) {
    $A[$i]=rand(-100,100)/2;
    echo $A[$i].' | ';
  }
  echo '<br>';

  for ($i=0; $i < $count; $i++) {
    if (-2>$A[$i]) {
      $A[$i]=$A[$i]*$A[$i];
    }
  }

  echo "Cкорректированный массив: ";
  for ($i=0; $i < $count; $i++) {
      echo $A[$i].' | ';
  }

 ?>
