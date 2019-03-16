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
    
    public function calculateSalary()
    {
        $this->salary = $this->salaryHour * 40 + array_sum($this->appointmentTotalTime) * $this->salaryHour;
    }
}