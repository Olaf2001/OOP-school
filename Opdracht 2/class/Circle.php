<?php

class Circle extends Figure
{
    public function getFigure()
    {
        return "<div class='circle $this->color'></div>";
    }
}