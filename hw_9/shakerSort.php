<?php

function shakerSort ($array) {
    $n = count($array);
    $iterationsCount = 0;
    $left = 0;
    $right = $n - 1;

    do {
        for ($i = $left; $i < $right; $i++) {
            $iterationsCount ++;
            if ($array[$i] > $array[$i + 1]) {
                list($array[$i], $array[$i + 1]) = array($array[$i + 1],
                    $array[$i]);
            }
        }
        $right -= 1;
        for ($i = $right; $i > $left; $i--) {
            $iterationsCount ++;
            if ($array[$i] < $array[$i - 1]) {
                list($array[$i], $array[$i - 1]) = array($array[$i - 1],
                    $array[$i]);
            }
        }
        $left += 1;
    } while ($left <= $right);
    echo 'Количество итераций : ' . $iterationsCount . "\n";
}

