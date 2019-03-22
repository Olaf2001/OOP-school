<?php

include 'vendor/autoload.php';

use OOP_basis\Patient;
use OOP_basis\Nurse;
use OOP_basis\Doctor;
use OOP_basis\Appointment;

$patient1 = new Patient('Giel','Houtepen','blauw', 'blond','1.85', '70kg');
$patient2 = new Patient('Bram','Vuur','bruin', 'bruin','1.82', '68kg');
$patient3 = new Patient('Kelly','de Vogel','grijs', 'rood','1.65', '56kg');

$doctor1 = new Doctor('Jan', 'Patat','blauw', 'blond', '1,79','78kg', 23);
$doctor2 = new Doctor('Peter', 'de Vries','groen', 'grijs', '1,95','89kg', 25);
$doctor3 = new Doctor('Bart', 'Smits','blauw', 'bruin', '1,71','63kg', 30);

$nurse1 = new Nurse('Klaas','de Aap','bruin','grijs','1.81','68kg', 26);
$nurse2 = new Nurse('Tim','de Koning','blauw','blond','1.97','87kg', 19);

$appointment1 = new Appointment('9:30', '10:30', $doctor1->getPerson(), $patient1->getPerson());
$appointment2 = new Appointment('10:30', '12:00', $doctor2->getPerson(), $patient2->getPerson(), $nurse1->getPerson());
$appointment3 = new Appointment('12:30', '13:30', $doctor1->getPerson(), $patient3->getPerson(), $nurse2->getPerson());
$appointment4 = new Appointment('13:10', '14:10', $doctor3->getPerson(), $patient1->getPerson());
$appointment5 = new Appointment('14:30', '16:45', $doctor2->getPerson(), $patient2->getPerson(), $nurse1->getPerson());

$doctor1->addAppointment($appointment1->getTimeInterval());
$doctor1->addAppointment($appointment3->getTimeInterval());
$doctor2->addAppointment($appointment2->getTimeInterval());
$doctor2->addAppointment($appointment5->getTimeInterval());
$doctor3->addAppointment($appointment4->getTimeInterval());

$nurse1->addAppointment($appointment2->getTimeInterval());
$nurse1->addAppointment($appointment5->getTimeInterval());
$nurse2->addAppointment($appointment3->getTimeInterval());

print $appointment1->getAppointment(). '<br>';
print $appointment2->getAppointment(). '<br>';
print $appointment3->getAppointment(). '<br>';
print $appointment4->getAppointment(). '<br>';
print $appointment5->getAppointment(). '<br>';

print '<strong>Uitbetalingen</strong><br>';
print $doctor1->getSalary(). '<br>';
print $doctor2->getSalary(). '<br>';
print $doctor3->getSalary(). '<br>';
print $nurse1->getSalary(). '<br>';
print $nurse2->getSalary(). '<br>';