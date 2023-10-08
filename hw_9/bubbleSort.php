<?php
function bubbleSort($array){
    $iterationsCount = 0;
    for($i=0; $i<count($array); $i++){
        $iterationsCount ++;
        $count = count($array);
        for($j=$i+1; $j<$count; $j++){
            $iterationsCount ++;
            if($array[$i]>$array[$j]){
                $temp = $array[$j];
                $array[$j] = $array[$i];
                $array[$i] = $temp;
            }
        }
    }
    echo 'Количество итераций : ' . $iterationsCount . "\n";
}




