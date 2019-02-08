<?php

class Square extends Figure
{
    public function getFigure()
    {
        return "<div class='square $this->color'>Dit is een cirkel en heeft de kleur ".$this->color."</div>";
    }
}