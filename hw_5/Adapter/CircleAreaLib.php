<?php

class CircleAreaLib
{
    public function getCircleArea(int $diagonal): int
    {
        $area = round((M_PI * $diagonal**2)/4) ;
        return $area;
    }
}