<?php

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
        return "breedte = ".$this->width." meter <br>
                lengte = ".$this->length." meter <br>
                hoogte = ".$this->height." meter <br>
                inhoud = ".$this->size." m<sup>3</sup> <br>"
                ;
    }
}