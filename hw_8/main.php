<?php

//задание №1
$iterator = new DirectoryIterator('../hw_6/Command');

foreach ($iterator as $fileInfo) {
    if ($fileInfo->isDot()) continue;
    echo $fileInfo->getFilename() . "\n";
    echo $fileInfo->getPathname() . "\n";
}

//задание №2
//● поиск элемента массива с известным индексом - O(logn)
//● дублирование массива через foreach - O(n)
//● рекурсивная функция нахождения факториала числа - 2^n
function numberFactorial(int $n) {

    if ($n == 1) {
        return 1;
    }
   return $n * numberFactorial($n - 1);
}

//echo numberFactorial(5);

//задание №3
// Сложность алгоритма O(n log n ), Операция произойдет 100 * 7 = 700
function a(){
    $n = 100;
    $array= [[],[]];
    for ($i = 0; $i < $n; $i++) {
        for ($j = 1; $j < $n; $j *= 2) {
            $array[$i][$j]= $j;
            echo $j . ' ';
        }
        echo "\n";
    }
}

// Сложность алгоритма O(n2/2), Операция произойдет 50 * 100 = 5000;
function b() {
    $n = 100;
    $array= [[],[]];
    for ($i = 0; $i < $n; $i += 2) {
        for ($j = $i; $j < $n; $j++) {
            $array[$i][$j]= $j;
        } }
}

//задание №4 Если подставить число 600851475143 программа не выполняется
function maxDivider(){
    $number =  13195;

    $array = [];
    for($i = 1; $i < $number; $i++) {

      if($number % $i == 0) {
          $array[] = $i;
      }

    }

    foreach ($array as $key => $num) {
        for ($j = 2; $j < $num; $j++) {
            if ($num % $j == 0) {
                unset($array[$key]);
            }

        }
    }
    echo "максимальный делитель числа $number являющийся простым числом : " . $array[count($array) - 1];
}

maxDivider();

