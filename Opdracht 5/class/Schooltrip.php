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

        foreach ($this->tripList as $schooltripList) {
            $print .= $schooltripList->getSchooltripList().'<br';
        }

        return '<strong>'.$this->name.'</strong><br>'.$print;
    }
}