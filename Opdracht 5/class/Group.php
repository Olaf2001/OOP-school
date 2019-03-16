<?php

namespace OOP_basis_Opdracht_5;

class Group
{
    private $name;
    private $group = [];

    public function construct($name)
    {
        $this->name = $name;
    }

    public function addStudent($student)
    {
        $this->group[] = $student;
    }

    public function getGroup()
    {
        return $this->name. '<br>' .$this->group;
    }

}