<?php

namespace OOP_basis_Opdracht_5;

class SchooltripList
{
    private $studentList = [];
    private $teacher;

    public function addStudent($student)
    {
        $this->studentList[] = $student;
    }

    public function addTeacher($teacher)
    {
        $this->teacher = $teacher;
    }
}