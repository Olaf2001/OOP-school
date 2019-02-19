<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<style>
    td {
        width: 300px;
        height: 20px;
        text-align: center;
    }
</style>

<?php

include 'vendor/autoload.php';

use OOP_basis\Music;
use OOP_basis\Film;
use OOP_basis\Game;

$produt1 = new Music('Mooie muziek naam', 20 , 20);
$produt2 = new Game('Ik speel een spel', 50 , 100);
$produt3 = new Film('Mooiste film ooit', 30 , 50);
$produt4 = new Game('Helaas altijd verloren', 20 , 70);
$produt5 = new Music('Ik kan niet zingen', 15 , 40);
$produt6 = new Game('Gamen is zo fijn, dat maakt mij vrolijk gelukkig en blij', 60 , 150);
$produt7 = new Film('Avatar', 20 , 90);
$produt8 = new Film('Titanic', 15 , 30);
$produt9 = new Music('Test van Zoute Pinda', 25 , 10);
$produt10 = new Music('Flip de Beer', 17 , 45);

?>

<table border="1">
    <thead>
        <tr>
            <th>Product Naam</th>
            <th>Verkoopprijs</th>
            <th>Categorie</th>
        </tr>
    </thead>
    <tbody>
        <?php
        print $produt1->getProduct();
        print $produt2->getProduct();
        print $produt3->getProduct();
        print $produt4->getProduct();
        print $produt5->getProduct();
        print $produt6->getProduct();
        print $produt7->getProduct();
        print $produt8->getProduct();
        print $produt9->getProduct();
        print $produt10->getProduct();
        ?>
    </tbody>
<table/>
</body>
</html>


