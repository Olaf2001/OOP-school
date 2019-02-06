<?php

class House
{
    private $floors;
    private $priceCubicMeter;
    private $rooms = [];
    
    public function __construct($floors, $priceCubicMeter)
    {
        $this->floors = $floors;
        $this->priceCubicMeter = $priceCubicMeter;
    }

    public function addRoom($room)
    {
        $this->rooms[] = $room;
    }

    public function getHouse()
    {
        $rooms = count($this->rooms);
        $volume = array_sum($this->rooms);
        $price = $volume * $this->priceCubicMeter;

        return "aantal verdiepingen = ".$this->floors."<br>
                aantal kamers = ".$rooms."<br>
                inhoud = ".$volume." m<sup>3</sup> <br>
                prijs = &euro; ".$price." <br>"
                ;
    }
}