<?php
require_once "bootstrap.php";

$circleFigureArea = new CircleFigureArea();
$adapter = new Adapter($circleFigureArea);
;
echo "Square of " . $circleFigureArea->getShape() . " = " . $adapter->getArea('45');




