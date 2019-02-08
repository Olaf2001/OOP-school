<?php

class Square extends Figure
{
    public function getFigure()
    {
        return "<div class='square $this->color'></div>";
    }
}