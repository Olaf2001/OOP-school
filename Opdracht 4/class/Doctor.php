<?php

namespace OOP_basis;

class Doctor extends Staff
{
    public function setRole()
    {
        $this->role = 'doctor';
    }

    public function setSalary($salaryHour, $appointmentHour)
    {
        $this->salary = $salaryHour * $appointmentHour;
    }
    
}