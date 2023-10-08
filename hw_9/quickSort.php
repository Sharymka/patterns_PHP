<?php
$iterationsCount = 0;
function quickSort($arr, $low, $high) {
    global $iterationsCount;
    $i = $low;
    $j = $high;
    $middle = $arr[ceil(( $low + $high ) / 2 )]; // middle – опорный элемент; в
//    нашей реализации он находится посередине между low и high
    do {
        while($arr[$i] < $middle) {
            ++$i;
            $iterationsCount++;
        } // Ищем элементы для правой части
        while($arr[$j] > $middle) {
            --$j;
            $iterationsCount++;
        }  // Ищем элементы для левой части
        if($i <= $j){
            // Перебрасываем элементы
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
            // Следующая итерация
            $i++; $j--;
        }
        $iterationsCount++;
    }
    while($i < $j);
    if($low < $j){
        // Рекурсивно вызываем сортировку для левой части
        quickSort($arr, $low, $j);
    }
    if($i < $high){
        // Рекурсивно вызываем сортировку для правой части
        quickSort($arr, $i, $high);
    }

    return $iterationsCount;
}
