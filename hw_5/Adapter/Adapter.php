<?php

 class Adapter
{
    function __construct(
        private FigureArea $figureArea
    ){

    }
    function getArea(int $param) {
        if(get_class($this->figureArea) == "CircleFigureArea"){
            $diagonal = (int)sqrt($param**2/M_PI**2);
            $circleAreaLib = new CircleAreaLib();
            return $circleAreaLib->getCircleArea($diagonal);
        }
        if(get_class($this->figureArea) == "SquareFigureArea"){
            $squareAreaLib = new SquareAreaLib();
            $diagonal = sqrt((2*$param)**2);
            return $squareAreaLib->getSquareArea($diagonal);
        }
        return null;
    }
}