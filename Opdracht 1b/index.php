<?php

class AllRooms
{
    private $allRooms = [];

    public function addAllRooms($room)
    {
        $this->allRooms[] = $rooms;
    }
}

class House 
{
    private $floors;
    private $rooms;
    private $priceCubicMeter;
    private $price;   
    
    public function setHouse($floors, $rooms, $priceCubicMeter)
    {
        $this->floors = $floors;
        $this->rooms = $rooms;
        $this->priceCubicMeter = $priceCubicMeter;
        $this->price = $this->addAllRooms * $this->priceCubicMeter;
    }

    public function getHouse()
    {
        return "aantal verdiepingen = ".$this->floors."<br>
                aantal kamers = ".$this->rooms."<br>
                inhoud = ".$this->size." m<sup>3</sup> <br>
                prijs = &euro; ".$this->price." <br>"
                ;
    }
}

class Room extends House
{
    private $width;
    private $length;
    private $height;
    private $size;
    
    public function setRoom($width, $length, $height)
    {
        $this->width = $width;
        $this->length = $length;
        $this->height = $height;
        $this->size = $this->width * $this->length * $this->height;
    }
    
    public function getRoom()
    {
        return "breedte = ".$this->width." meter <br>
                lengte = ".$this->length." meter <br>
                hoogte = ".$this->height." meter <br>
                inhoud = ".$this->size." m<sup>3</sup> <br>"
                ;
    }
}

$house1 = new Room(2, 3, 4);
$house1->setRoom(2, 2, 2);
print '<strong>Huis 1</strong> <br>';
print $house1->getHouse();
