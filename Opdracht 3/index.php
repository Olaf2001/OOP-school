<?php

include 'vendor/autoload.php';

use OOP_basis\Product;
use OOP_basis\Music;
use OOP_basis\Film;
use OOP_basis\Game;

$produt1 = new Music('auto', 5 , 1, 'hallo');
print $produt1->getProduct();