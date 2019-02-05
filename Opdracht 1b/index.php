<?php

class AllRooms
{
    private $allRooms = [];

    public function addAllRooms($sizeOfRoom)
    {
        $this->allRooms[] = $sizeOfRoom;
    }
}

class House 
{
    private $floors;
    private $rooms;
    private $priceCubicMeter;
    private $size;
    private $price;
    
    public function __construct($floors, $rooms, $size, $priceCubicMeter)
    {
        $this->floors = $floors;
        $this->rooms = $rooms;
        $this->priceCubicMeter = $priceCubicMeter;
        $this->size = $size;
        $this->price = $rooms * $this->priceCubicMeter;
        // Notice: Object of class AllRooms could not be converted to int in D:\school\Xampp\htdocs\bestanden\
        // school\OOP basis\OOP opdrachten\Opdracht 1b\index.php on line 27 Huis 1
    }

    public function getHouse()
    {
        return "aantal verdiepingen = ".$this->floors."<br>
                aantal kamers = ".$this->rooms."<br>
                Recoverable fatal error: Object of class AllRooms could not be converted to string in D:\school\Xampp\
                htdocs\bestanden\school\OOP basis\OOP opdrachten\Opdracht 1b\index.php on line 33
                inhoud = ".$this->size."<br>
                prijs = &euro; ".$this->price." <br>"
                ;
    }

//Recoverable fatal error: Object of class AllRooms could not be converted to string in D:\school\Xampp\htdocs\
//bestanden\school\OOP basis\OOP opdrachten\Opdracht 1b\index.php on line 35
}

class Room
{
    private $width;
    private $length;
    private $height;
    private $size;
    
    public function __construct($width, $length, $height)
    {
        $this->width = $width;
        $this->length = $length;
        $this->height = $height;
        $this->size = $this->width * $this->length * $this->height;
    }
    
    public function getRoom()
    {
        return $this->size;
    }
}

$room1 = new Room(3, 3, 3);
$room2 = new Room(3, 3, 3);
$room3 = new Room(2, 3, 4);

$allRooms1 = new AllRooms();
$allRooms1->addAllRooms($room1->getRoom());
// Kan maar 1 waarde invullen, alleen wil alle kamers in kunnen vullen zodat de grootte kan worden bepaald van het
// huis/

$house1 = new House(2, $allRooms1, $allRooms1, 4);

print '<strong>Huis 1</strong> <br>';
print $house1->getHouse();
