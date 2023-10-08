<?php
$array = [3,5,7,1,2,3,4,5,7];


function deleteElement(array $array, int $value): array {
    $keys = array_keys($array, $value);

    foreach ($keys as $key) {
        unset($array[$key]);
    }
    return $array;
}

print_r(deleteElement($array, 5));