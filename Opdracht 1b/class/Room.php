<?php

class Room
{
    private $length;
    private $width;
    private $height;

    public function __construct($length, $width, $height)
    {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
    }

    public function getVolume()
    {
        $volume = $this->width * $this->length * $this->height;
        return $volume;
    }
}