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

        $this->setRole();
    }

    public function getPerson()
    {
        return $this->role.' <i>'.$this->firstname.' '.$this->lastname.'</i>';
    }

    abstract protected function setRole();
}