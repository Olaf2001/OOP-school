<?php

namespace OOP_basis;

abstract class Staff extends Person
{
    protected $salaryHour;
    protected $appointmentTotalTime = [];

    public function __construct($firstname, $lastname, $eyeColor, $hairColor, $length, $weight, $salaryHour)
    {
        parent::__construct($firstname, $lastname, $eyeColor, $hairColor, $length, $weight);

        $this->salaryHour = $salaryHour;
    }

    public function addAppointment($appointmentTime)
    {
        $this->appointmentTotalTime[] = $appointmentTime;
    }

    public function getSalary()
    {
        $this->calculateSalary();

        return parent::getPerson().' krijgt een salaris van &euro; '.$this->salary;
    }

    abstract protected function calculateSalary();
}