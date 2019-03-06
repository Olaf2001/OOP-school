<?php

namespace OOP_basis;

abstract class Staff extends Person
{
    protected $salaryHour;
    protected $appointmentHour;

    abstract public function setSalary($salaryHour, $appointmentHour);
}