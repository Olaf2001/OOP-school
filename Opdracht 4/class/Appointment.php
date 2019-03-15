<?php

namespace OOP_basis;

class Appointment
{
    private $doctor;
    private $patient;
    private $startTimeHour;
    private $startTimeMinutes;
    private $endTimeHour;
    private $endTimeMinutes;
    private $nurse;
    private $startTime;
    private $endTime;

    public function __construct($doctor, $patient, $nurse = '')
    {
        $this->doctor = $doctor;
        $this->patient = $patient;
        $this->nurse = $nurse;
    }

    public function setTime($startTime, $endTime)
    {
        $this->startTime = $startTime;
        $this->endTime = $endTime;
    }
    
    public function getTimeInterval()
    {
        $this->timeInterval = (strtotime($this->endTime) - strtotime($this->startTime)) / 3600;

        return $this->timeInterval;
    }

    public function getPersons()
    {
        return $this->doctor.'<br>'.$this->patient.'<br>'.$this->nurse.'<br>';
    }
}

// geen idee hoe je static moet gebruiken want het moet juist dynamisch worden en daar gebruik je geen static voor
