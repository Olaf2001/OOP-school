<?php

class Triangle extends Figure
{
    public function getFigure()
    {
        return "<div class='triangle $this->color'>Dit is een cirkel en heeft de kleur ".$this->color."</div>";
    }
}