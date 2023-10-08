<?php

function arrayGenerating (int $size) {

    $array = [];
    for($i = 0; $i < $size; $i ++) {
        $array[$i] = mt_rand(1, 99);
    }
    return $array;
}
