<?php

namespace OOP_basis_Opdracht_5;

class Student extends Person
{
    private $paid;
    private $className;

    public function setPayment($paid)
    {
        $this->paid = $paid;
    }

    public function getPayment()
    {
        return $paid;
    }
}