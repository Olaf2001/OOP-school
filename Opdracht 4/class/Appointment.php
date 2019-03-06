<?php

namespace OOP_basis;

class Appointment
{
    // een functie om een nurse, doctor en patient toe te voegen aan de afspraak :)
    private $doctor;
    private $patient;

    public function __construct($doctor, $patient)
    {
        $this->doctor = $doctor;
        $this->patient = $patient;
    }

    public function getPersons()
    {
        return $this->doctor.'<br>'.$this->patient;
    }

}
