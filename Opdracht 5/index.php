<?php

include 'vendor/autoload.php';

use OOP_basis_Opdracht_5\Teacher;
use OOP_basis_Opdracht_5\Student;
use OOP_basis_Opdracht_5\Group;
use OOP_basis_Opdracht_5\Schooltrip;
use OOP_basis_Opdracht_5\SchooltripList;

$group1 = new Group('APM2A');

$student1 = new Student('Giel','Houtepen', $group1->getGroupName(), 5);
$student2 = new Student('Jochem','Wortel', $group1->getGroupName());
$student3 = new Student('Dirk','de Beer', $group1->getGroupName(), 10);

$group1->addStudent([$student1, $student2, $student3]);

$teacher1 = new Teacher('Jan','Slim');

$schooltripList1 = new SchooltripList();
$schooltripList1->addStudent($student1);
$schooltripList1->addStudent($student2);
$schooltripList1->addStudent($student3);
$schooltripList1->addTeacher($teacher1->getName());

$schooltrip1 = new Schooltrip('pretpark HappyLand');
$schooltrip1->addSchoolTripList($schooltripList1);
$schooltrip1->addSchoolTripList($schooltripList1);

print $schooltrip1->getSchooltrip();
