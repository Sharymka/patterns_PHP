<?php
require_once 'bubbleSort.php';
require_once 'arrayGenerating.php';
require_once 'shakerSort.php';
require_once 'quickSort.php';
require_once 'heapsort.php';

$array = arrayGenerating(30);

$start = microtime(true);
bubbleSort($array);
echo 'сортировки пузырьком: ' .round(microtime(true) - $start, 4).' сек.' . "\n";

$start = microtime(true);
shakerSort($array);
echo 'сортировки шейкерная: ' .round(microtime(true) - $start, 4).' сек.' . "\n";

//$start = microtime(true);
//$quickSortIterationsCount = quickSort($array, 0 , $array[count($array) - 1]);
//echo 'количество итераций: '. $quickSortIterationsCount . "\n";
//echo 'быстрая сортировка: ' .round(microtime(true) - $start, 4).' сек.' . "\n";


$start = microtime(true);
$heapSortIterationsCount = heapSort($array);
echo 'количество итераций: '. $heapSortIterationsCount  . "\n";
echo 'пирамидальная сортировка: ' .round(microtime(true) - $start, 4).' сек.' . "\n";
