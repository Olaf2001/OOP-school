<?php

namespace OOP_basis_Opdracht_5;

class Schooltrip
{
    private $name;
    private $tripList = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function addSchooltripList($schooltripList)
    {
        $this->tripList[] = $schooltripList;
    }

    public function getSchooltrip()
    {
        $print = '';
        $listNumber = 0;

        foreach ($this->tripList as $schooltripList)
        {
            $listNumber++;

            $print .= '<table border="1"><thead><tr><th colspan="3">lijst:'.$listNumber.'</th>'.$schooltripList->getSchooltripList().'</table>';
        }

        return '<strong>'.$this->name.'</strong>'.$print;
    }
}