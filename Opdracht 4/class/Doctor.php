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

    public function calculateSalary()
    {
        $this->salary = $this->salaryHour * array_sum($this->appointmentTotalTime);
    }
}