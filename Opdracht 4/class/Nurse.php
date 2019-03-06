<?php

namespace OOP_basis;

class Nurse extends Staff
{
    public function setRole()
    {
        $this->role = 'nurse';
    }  
    
    public function setSalary($salaryHour, $appointmentHour)
    {
        $this->salary = $salaryHour * 40 + $appointmentHour * $salaryHour;
    }
}