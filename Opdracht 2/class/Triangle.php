<?php

class Triangle extends Figure
{
    public function getFigure()
    {
        return "<div class='triangle $this->color'></div>";
    }
}