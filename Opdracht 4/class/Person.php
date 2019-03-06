<?php

namespace OOP_basis;

abstract class Person
{
    // kleur ogen, kleur haar, lengte, gewicht

    private $eyeColor;
    private $hairColor;
    private $length;
    private $weight;

    public function __construct($eyeColor, $hairColor, $length, $weight)
    {
        $this->eyeColor = $eyeColor;
        $this->hairColor = $hairColor;
        $this->length = $length;
        $this->weight = $weight;
    }

    abstract public function setRole();
}