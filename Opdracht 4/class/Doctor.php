<?php

namespace OOP_basis;

class Doctor extends Staff
{
    public function setRole()
    {
        $this->role = 'doctor';
    }

    public function addAppointment($appointmentTime)
    {
        parent::addAppointment($appointmentTime);
    }

    public function setSalary($salaryHour)
    {
        $this->salary = $salaryHour * array_sum($this->appointmentTotalTime);
    }
    
    public function getSalary()
    {
        return $this->salary;
    }
}