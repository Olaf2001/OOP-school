<?php

include 'vendor/autoload.php';

use OOP_basis_Opdracht_5\Teacher;
use OOP_basis_Opdracht_5\Student;
use OOP_basis_Opdracht_5\Group;
use OOP_basis_Opdracht_5\Schooltrip;
use OOP_basis_Opdracht_5\SchooltripList;

$student1 = new Student('Olaf','Kramer');

print $student1->getName();