<?php

include 'vendor/autoload.php';

use OOP_basis\Patient;
use OOP_basis\Nurse;
use OOP_basis\Doctor;
use OOP_basis\Appointment;

$patient1 = new Patient('Giel','Houtepen','blauw', 'blond','1.85', '70kg');
$patient1->setRole();
$patient2 = new Patient('Bram','Vuur','bruin', 'bruin','1.82', '68kg');
$patient2->setRole();
$patient3 = new Patient('Kelly','de Vogel','grijs', 'rood','1.65', '56kg');
$patient3->setRole();

$doctor1 = new Doctor('Jan', 'Patat','blauw', 'blond', '1,79','78kg', 23);
$doctor1->setRole();
$doctor2 = new Doctor('Peter', 'de Vries','groen', 'grijs', '1,95','89kg', 25);
$doctor2->setRole();
$doctor3 = new Doctor('Bart', 'Smits','blauw', 'bruin', '1,71','63kg', 30);
$doctor3->setRole();

$nurse1 = new Nurse('Klaas','de Aap','bruin','grijs','1.81','68kg', 26);
$nurse1->setRole();
$nurse2 = new Nurse('Tim','de Koning','blauw','blond','1.97','87kg', 19);
$nurse2->setRole();

$appointment1 = new Appointment($doctor1->getPerson(), $patient1->getPerson());
$appointment1->setTime('9:30', '10:30');
$appointment2 = new Appointment($doctor2->getPerson(), $patient2->getPerson(), $nurse1->getPerson());
$appointment2->setTime('10:30', '12:00');
$appointment3 = new Appointment($doctor1->getPerson(), $patient3->getPerson(), $nurse2->getPerson());
$appointment3->setTime('12:30', '13:30');
$appointment4 = new Appointment($doctor3->getPerson(), $patient1->getPerson());
$appointment4->setTime('13:10', '14:10');
$appointment5 = new Appointment($doctor2->getPerson(), $patient2->getPerson(), $nurse1->getPerson());
$appointment5->setTime('14:30', '16:45');

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