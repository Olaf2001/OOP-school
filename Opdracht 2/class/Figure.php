<?php

abstract class Figure
{
    protected $color;

    public function __construct($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        $this->arrayColor = array('red','blue','white');

        for($loop = 0; $loop<count.$this->arrayColor; $loop++)
        {
            if($this->color == $this->arrayColor)
            {
                return $this->color;
            }
        }
    }

    abstract public function getFigure();
}