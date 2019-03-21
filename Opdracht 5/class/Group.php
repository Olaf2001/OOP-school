<?php

namespace OOP_basis_Opdracht_5;

class Group
{
    private $name;
    private $group = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function addStudent($student)
    {
        $this->group[] = $student;
    }

    public function getGroupName()
    {
        return $this->name;
    }

    public function getGroup()
    {
        $print = '';

        foreach ($this->group as $student)
        {
            $print .= $student->getName()."<br>";
        }

        return $this->name. '<br>' .$print;
    }
}