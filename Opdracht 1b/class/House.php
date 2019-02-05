<?php

include 'Room.php';

class House 
{
    private $floors;
    private $rooms;
    private $priceCubicMeter;
    private $price;
    private $room;
    
    public function __construct($floors, $rooms, $priceCubicMeter)
    {
        $this->floors = $floors;
        $this->rooms = $rooms;
        $this->priceCubicMeter = $priceCubicMeter;
        $this->price = $this->room * $this->priceCubicMeter;
        $this->$room = $room;
    }

    public function addRooom(Room $room)
    {
        $this->room[] = $room;
    }

    public function getRoom()
    {
        return $this->room;
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