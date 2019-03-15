<?php

include 'vendor/autoload.php';

use OOP_basis\Patient;
use OOP_basis\Nurse;
use OOP_basis\Doctor;
use OOP_basis\Appointment;

$patient1 = new Patient('Tim','Smitz','blue', 'blond','1.85', '70kg');
$patient1->setRole();
$doctor1 = new Doctor('Zoute', 'Pinda','blue', 'blond', '1,79','58kg');
$doctor1->setRole();
$nurse1 = new Nurse('Meneer','de Entiteit','blue','blond','1.82','66kg');
$nurse1->setRole();

$appointment1 = new Appointment($doctor1->getPerson(), $patient1->getPerson(), $nurse1->getPerson());
$appointment1->setTime('10:00', '12:50');
$appointment2 = new Appointment($doctor1->getPerson(), $patient1->getPerson(), $nurse1->getPerson());
$appointment2->setTime('11:00', '12:00');

$doctor1->addAppointment($appointment1->getTimeInterval());
$doctor1->addAppointment($appointment2->getTimeInterval());
$doctor1->setSalary(12);

print $appointment1->getAppointment(). '<br>';
print $appointment1->getTimeInterval(). '<br>';
print $doctor1->getSalary();