<?php

namespace OOP_basis;

abstract class Person
{
    private $firstname;
    private $lastname;
    private $eyeColor;
    private $hairColor;
    private $length;
    private $weight;

    public function __construct($firstname, $lastname, $eyeColor, $hairColor, $length, $weight)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->eyeColor = $eyeColor;
        $this->hairColor = $hairColor;
        $this->length = $length;
        $this->weight = $weight;
    }

    public function getPerson()
    {
        $this->setRole();
        return $this->role.' <i>'.$this->firstname.' '.$this->lastname.'</i>';
    }

    abstract public function setRole();
}