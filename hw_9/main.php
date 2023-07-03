<?php
require_once 'bubbleSort.php';
require_once 'arrayGenerating.php';
require_once 'shakerSort.php';
$iterationsCount = require_once 'quickSort.php';
require_once 'heapify.php';

$array = arrayGenerating(30000);

//$start = microtime(true);
//bubbleSort($array);
//echo 'сортировки пузырьком: ' .round(microtime(true) - $start, 4).' сек.' . "\n";

//$start = microtime(true);
//shakerSort($array);
//echo 'сортировки шейкерная: ' .round(microtime(true) - $start, 4).' сек.' . "\n";

//$start = microtime(true);
//quickSort($array, 0 , $array[count($array) - 1]);
//echo 'количество итераций: '. $iterationsCount . "\n";
//echo 'быстрая сортировка: ' .round(microtime(true) - $start, 4).' сек.' . "\n";


$start = microtime(true);
heapify($array, 0 , $array[count($array) - 1]);
echo 'количество итераций: '. $iterationsCount . "\n";
echo 'пирамидальная сортировка: ' .round(microtime(true) - $start, 4).' сек.' . "\n";
