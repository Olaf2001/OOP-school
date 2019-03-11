<?php

namespace OOP_basis;

class Appointment
{
    // een functie om een nurse, doctor en patient toe te voegen aan de afspraak :)
    private $doctor;
    private $patient;
    private $startTime;
    private $endTime;
    private $nurse;

    public function __construct($doctor, $patient, $startTime, $endTime, $nurse = '')
    {
        $this->doctor = $doctor;
        $this->patient = $patient;
        $this->startTime = $startTime;
        $this->endTime = $endTime;
        $this->nurse = $nurse;
        // $this->timeDifference = $startTime->diff($endTime); tijden lukken nog even niet
    }

    public function getPersons()
    {
        return $this->doctor.'<br>'.$this->patient.'<br>'.$this->nurse.'<br>'.$this->startTime.'<br>'.$this->endTime;
    }

}

// geen idee hoe je static moet gebruiken want het moet juist dynamisch worden en daar gebruik je geen static voor
