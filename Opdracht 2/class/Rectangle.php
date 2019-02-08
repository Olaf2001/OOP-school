<?php

class Rectangle extends Figure
{
    public function getFigure()
    {
        return "<div class='rectangle $this->color'></div>";
    }
}