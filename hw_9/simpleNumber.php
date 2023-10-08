<?php
 $i = 2;
$array = [];

 do {
     global $i;
     global $array;
     $trigger = true;
     for($j = 2; $j <= sqrt($i); $j ++) {
         if ($i % $j == 0) {
             $trigger = false;
         }
     }
     if($trigger) {
         $array[] = $i;
     }
     ++$i;
     $trigger = true;
 } while (count($array) <= 10001);

 echo $array[count($array) - 1];