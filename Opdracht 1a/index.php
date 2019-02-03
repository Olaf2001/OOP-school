<?php

include './class/House.php';

$house1 = new House(3, 5, 10, 15, 8, 5);
$house2 = new House(2, 3, 8, 7, 6, 10);
$house3 = new House(2, 4, 10, 8, 5.5, 30);

print '<strong>Huis 1</strong> <br>';
print $house1->getHouse();
print '<strong>Huis 2</strong> <br>';
print $house2->getHouse();
print '<strong>Huis 3</strong> <br>';
print $house3->getHouse();