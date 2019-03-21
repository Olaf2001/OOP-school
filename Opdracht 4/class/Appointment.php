<?php

namespace OOP_basis;

class Appointment
{
    private $doctor;
    private $patient;
    private $nurse;
    private $startTime;
    private $endTime;

    public function __construct($startTime, $endTime, $doctor, $patient, $nurse = 'geen assistent bij deze afspraak')
    {
        $this->startTime = $startTime;
        $this->endTime = $endTime;
        $this->doctor = $doctor;
        $this->patient = $patient;
        $this->nurse = $nurse;
    }
    
    public function getTimeInterval()
    {
        $timeInterval = (strtotime($this->endTime) - strtotime($this->startTime)) / 3600;

        return $timeInterval;
    }

    public function getAppointment()
    {
        return  '<strong>Afspraak </strong><br>'
                .$this->doctor.'<br>'
                .$this->patient.'<br>'
                .$this->nurse.'<br>
                starttijd <i>'.$this->startTime.'</i><br>
                eindtijd <i>'.$this->endTime.'</i>';
    }
}