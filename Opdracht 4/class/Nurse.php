<?php

namespace OOP_basis;

class Nurse extends Staff
{
    public function setRole()
    {
        $this->role = 'nurse';
    }
    
    protected function calculateSalary()
    {
        $this->salary = $this->salaryHour * 40 + array_sum($this->appointmentTotalTime) * $this->salaryHour;
    }
}