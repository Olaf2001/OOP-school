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

$productList1->addProductToList($product1->getProduct());
$productList1->addProductToList($product2->getProduct());
$productList1->addProductToList($product3->getProduct());
$productList1->addProductToList($product4->getProduct());
$productList1->addProductToList($product5->getProduct());
$productList1->addProductToList($product6->getProduct());
$productList1->addProductToList($product7->getProduct());
$productList1->addProductToList($product8->getProduct());
$productList1->addProductToList($product9->getProduct());
$productList1->addProductToList($product10->getProduct());

print $productList1->getProductList();

?>
</body>
</html>


