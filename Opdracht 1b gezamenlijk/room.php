<?php

class Room
{
    private $length;
    private $width;
    private $height;

    public function setRoom($lengt, $width, $height)
    {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
    }

    public function getRoom()
    {
        return $this;
    }

    public function getVolume()
    {
        $volume = $this->width * $this->length * $this->height;
        return $volume;
    }
}