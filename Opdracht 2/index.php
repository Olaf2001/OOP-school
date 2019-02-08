<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' type='text/css' href='./styling/styling.css'>
    <title>Figuren - Opdracht 2</title>
</head>
<body>
    <?php

    include './class/Figure.php';
    include './class/Circle.php';
    include './class/Rectangle.php';
    include './class/Square.php';
    include './class/Triangle.php';

    $figure1 = new Circle('red');
    $figure2 = new Square('blue');
    $figure3 = new Triangle('yellow');
    $figure4 = new Rectangle('green');

    print $figure1->getFigure();
    print $figure2->getFigure();
    print $figure3->getFigure();
    print $figure4->getFigure();

    ?>  
</body>
</html>



