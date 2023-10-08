<?php

class SquareAreaLib
{
    public function getSquareArea(int $diagonal):int
    {
        $area = (int)(($diagonal**2)/2) ;
        return $area;
    }
}