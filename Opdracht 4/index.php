<?php

include 'vendor/autoload.php';

use OOP_basis\Patient;
use OOP_basis\Nurse;
use OOP_basis\Doctor;
use OOP_basis\Appointment;

$patient1 = new Patient('Tim','Smitz','blue', 'blond','1.85', '70kg');
$doctor1 = new Doctor('Zoute', 'Pinda','blue', 'blond', '1,79','58kg');
$nurse1 = new Nurse('Meneer','de Entiteit','blue','blond','1.82','66kg');

$appointment1 = new Appointment($doctor1->seePerson(), $patient1->seePerson(), '10:05:00', '11:55:00', $nurse1->seePerson());

print $appointment1->getPersons();