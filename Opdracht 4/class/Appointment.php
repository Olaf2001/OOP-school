<?php

namespace OOP_basis;

class Appointment
{
    // een functie om een nurse, doctor en patient toe te voegen aan de afspraak :)
    private $doctor;
    private $patient;
    private $startTimeHour;
    private $startTimeMinutes;
    private $endTimeHour;
    private $endTimeMinutes;
    private $nurse;

    public function __construct($doctor, $patient, $nurse = '')
    {
        $this->doctor = $doctor;
        $this->patient = $patient;
        $this->nurse = $nurse;
        // $this->timeDifference = $startTime->diff($endTime); tijden lukken nog even niet
    }

    public function setTime($startTimeHour, $startTimeMinutes , $endTimeHour, $endTimeMinutes)
    {
     $this->startTime = date("h:i", mktime($startTimeHour, $startTimeMinutes));
     $this->endTime = date("h:i", mktime($endTimeHour, $endTimeMinutes));
    }
    
    public function getTime()
    {
        $time = date_diff($this->endTime, $this->startTime) ;

        return $this->startTime.'<br>'.$this->endTime.'<br>'.$time;
    }
    public function getPersons()
    {
        return $this->doctor.'<br>'.$this->patient.'<br>'.$this->nurse.'<br>';
        // .$this->startTime.'<br>'.$this->endTime;
    }

}

// geen idee hoe je static moet gebruiken want het moet juist dynamisch worden en daar gebruik je geen static voor
