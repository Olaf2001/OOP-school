<?php

class Circle extends Figure
{
    public function getFigure()
    {
        return "<div class='circle $this->color'>Dit is een cirkel en heeft de kleur ".$this->color."</div>";
    }
}