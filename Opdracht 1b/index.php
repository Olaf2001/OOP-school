<?php

include('./class/House.php');
include('./class/Room.php');

$house1 = new House(3, 10);

$room1 = new Room(3, 3, 3);
$room2 = new Room(5, 4, 3);
$room3 = new Room(10, 5, 3);

$house2 = new House(3, 20);

$house1->addRoom($room1->getVolume());
$house1->addRoom($room2->getVolume());

$house2->addRoom($room1->getVolume());

print '<strong>Huis 1</strong> <br>';
print $house1->getHouse();
print '<strong>Huis 2</strong> <br>';
print $house2->getHouse();
