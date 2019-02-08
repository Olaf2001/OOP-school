<?php

include './class/Figure.php';
include './class/Circle.php';
include './class/Rectangle.php';
include './class/Square.php';
include './class/Triangle.php';

$figure1 = new Circle('blue');
$figure2 = new Square('blue');
$figure3 = new Triangle('blue');
$figure4 = new Rectangle('blue');

print $figure1->getFigure();
print $figure2->getFigure();
print $figure3->getFigure();
print $figure4->getFigure();
