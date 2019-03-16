<?php

namespace OOP_basis;

class Doctor extends Staff
{
    public function setRole()
    {
        $this->role = 'doctor';
    }

    protected function calculateSalary()
    {
        $this->salary = $this->salaryHour * array_sum($this->appointmentTotalTime);
    }
}