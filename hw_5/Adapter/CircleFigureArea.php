<?php

require_once "FigureArea.php";
class CircleFigureArea implements FigureArea
{
    private string $shape = "circle";

    /**
     * @return string
     */
    public function getShape(): string
    {
        return $this->shape;
    }
    function area(int $circumference): int {
        return (int)($circumference**2 / 4 * M_PI);
    }
}