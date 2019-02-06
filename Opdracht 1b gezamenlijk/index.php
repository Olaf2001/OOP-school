<?php

include('House.php');
include('Room.php');

$huis1 = new House();
$huis1->setHouse(2, 100000);

$kamer1 = new Room();
$kamer1->setRoom(3, 3, 3);

$kamer2 = new Room();
$kamer2->setRoom(5, 4, 3);

$kamer3 = new Room();
$kamer3->setRoom(10, 10, 3);


$huis2 = new House();
$huis2->setHouse(3, 200000);

$huis1->addRoom($kamer1);
$huis1->addRoom($kamer2);

$huis2->addRoom($kamer1);