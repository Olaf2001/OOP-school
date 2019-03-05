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
use OOP_basis\ProductList;

$productList1 = new ProductList();


$product1 = new Music('Mooie muziek naam', 20 , 20);
$product2 = new Game('Ik speel een spel', 50 , 100);
$product3 = new Film('Mooiste film ooit', 30 , 50);
$product4 = new Game('Helaas altijd verloren', 20 , 70);
$product5 = new Music('Ik kan niet zingen', 15 , 40);
$product6 = new Game('Gamen is zo fijn, dat maakt mij vrolijk gelukkig en blij', 60 , 150);
$product7 = new Film('Avatar', 20 , 90);
$product8 = new Film('Titanic', 15 , 30);
$product9 = new Music('Test van Zoute Pinda', 25 , 10);
$product10 = new Music('Flip de Beer', 17 , 45);

$productList1->addProduct($product1);
$productList1->addProduct($product2);
$productList1->addProduct($product3);
$productList1->addProduct($product4);
$productList1->addProduct($product5);
$productList1->addProduct($product6);
$productList1->addProduct($product7);
$productList1->addProduct($product8);
$productList1->addProduct($product9);
$productList1->addProduct($product10);

print $productList1->getProducts();

?>
</body>
</html>


