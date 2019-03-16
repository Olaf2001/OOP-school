<?php

namespace OOP_basis_Opdracht_5;

class Student extends Person
{
    private $paid;
    private $className;

    public function setPayment($paid = 'nog niet betaald')
    {
        $this->paid = $paid;
    }

    public function addGroup($className)
    {
        $this->className = $className;
    }

    public function getPayment()
    {
        return $paid;
    }
}