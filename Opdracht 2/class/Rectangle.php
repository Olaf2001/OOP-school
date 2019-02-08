<?php

class Rectangle extends Figure
{
    public function getFigure()
    {
        return "<div class='rectangle $this->color'>Dit is een cirkel en heeft de kleur ".$this->color."</div>";
    }
}