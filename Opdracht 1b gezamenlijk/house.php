<?php

class House
{
    private $floors;
    private $price;
    private $rooms = [];
    
    public function setHouse($floors, $price)
    {
        $this->floors = $floors;
        $this->price = $price;
    }

    public function getHouse()
    {
        return "het huis heeft ".$this->floors." verdiepingen en kost ".$this->price;
    }

    public function addRoom($room)
    {
        $this->rooms[] = $room;
    }
}