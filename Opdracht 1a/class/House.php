<?php

class House 
{
    private $floors;
    private $rooms;
    private $width;
    private $length;
    private $height;

    public function __construct($floors, $rooms, $width, $length, $height)
    {
        $this->floors = $floors;
        $this->rooms = $rooms;
        $this->width = $width;
        $this->length = $length;
        $this->height = $height;
    }

    public function getHouse()
    {
        return "aantal verdiepingen = ".$this->floors."<br>
                aantal kamers = ".$this->rooms."<br>
                breedte = ".$this->width." meter <br>
                lengte = ".$this->length." meter <br>
                hoogte = ".$this->height." meter <br>";
    }
}