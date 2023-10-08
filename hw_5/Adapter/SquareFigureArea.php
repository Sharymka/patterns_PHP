<?php

class SquareFigureArea implements FigureArea
{
    function area(int $side): int {
        return $side * 2;
    }
}