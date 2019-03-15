<?php

namespace OOP_basis;

class Nurse extends Staff
{
    public function setRole()
    {
        $this->role = 'nurse';
    }

    public function addAppointment($appointmentTime)
    {
        parent::addAppointment($appointmentTime);
    }
    
    public function setSalary($salaryHour)
    {
        $this->salary = $salaryHour * 40 + $this->appointmentTotalTime * $salaryHour;
    }
}