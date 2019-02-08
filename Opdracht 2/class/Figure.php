<?php

abstract class Figure
{
    protected $color;

    public function __construct($color)
    {
        $this->arrayColor = array('red','blue','green','yellow');

        foreach($this->arrayColor as $value)
        {
            if($color == $value)
            {
                $this->color = $color;
            }
        }
        if($this->color == null)
        {
            $this->color = 'black';
        }       
    }

    abstract public function getFigure();
}