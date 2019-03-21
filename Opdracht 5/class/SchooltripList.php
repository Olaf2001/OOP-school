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
        $studentsToList = 25;

        if(count($this->studentList) < $studentsToList) {
            foreach ($this->studentList as $student) {
                $print .= '<tr><td>'.$student->getName().'</td><td>'.$student->getGroup().'</td><td>&euro; '.$student->getPayment().'</td></tr>';
            }

            return '<tr>
                        <th>Naam</th>
                        <th>Klas</th>
                        <th>Betaald</th>
                    </tr>'
                    .$print.
                    '<tr>
                        <td>'.$this->teacher.'</td>
                        <td>Leraar</td>
                        <td>Leraren hoeven niet te betalen</td>
                      </tr>';
        }

        else {
            $studentsToMuch = count($this->studentList) - $studentsToList;

            return  'een lijst mag maar '.$studentsToList.' studenten bevatten en in deze lijst zitten er '
                    .$studentsToMuch.' studenten te veel';
        }
    }
}