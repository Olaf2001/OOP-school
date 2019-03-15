<?php

namespace OOP_basis;

abstract class Staff extends Person
{
    protected $salaryHour;
    protected $appointmentTime;
    protected $appointmentTotalTime = [];

    public function addAppointment($appointmentTime)
    {
        $this->appointmentTotalTime[] = $appointmentTime;
    }

    abstract public function setSalary($salaryHour);
}