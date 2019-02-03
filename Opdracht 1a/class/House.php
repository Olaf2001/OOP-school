<?php

class House 
{
    private $floors;
    private $rooms;
    private $width;
    private $length;
    private $height;
    private $priceCubicMeter;
    private $size;
    private $price;

    public function __construct($floors, $rooms, $width, $length, $height, $priceCubicMeter)
    {
        $this->floors = $floors;
        $this->rooms = $rooms;
        $this->width = $width;
        $this->length = $length;
        $this->height = $height;
        $this->priceCubicMeter = $priceCubicMeter;
        $this->size = $this->width * $this->length * $this->height;
        $this->price = $this->size * $this->priceCubicMeter;
    }

    public function getHouse()
    {
        return "aantal verdiepingen = ".$this->floors."<br>
                aantal kamers = ".$this->rooms."<br>
                breedte = ".$this->width." meter <br>
                lengte = ".$this->length." meter <br>
                hoogte = ".$this->height." meter <br>
                inhoud = ".$this->size." m<sup>3</sup> <br>
                prijs = &euro; ".$this->price." <br>"
                ;
    }
}