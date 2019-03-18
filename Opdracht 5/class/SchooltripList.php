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

    public function addTeacher($teacher = 'er is nog geen leraar toegevoegd')
    {
        $this->teacher = $teacher;
    }

    public function getSchooltripList()
    {
        $print = '';
        $studentsToList = 2;

        if(count($this->studentList) < $studentsToList) {

            foreach ($this->studentList as $student) {
                $print .= $student->getName().' '.$student->getGroup()."<br>";
            }

            return $print. '<br> leraar: '. $this->teacher;
        }

        else {

            $studentsToMuch = count($this->studentList) - $studentsToList;

            return  'een lijst mag maar '.$studentsToList.' studenten bevatten en in deze lijst zitten er '
                    .$studentsToMuch.' studenten te veel';
        }
    }
}