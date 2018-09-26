<?php

include 'Person.php';

$joeyS = new Person(Joey, smitchz);
//$joeyS->firstname = 'Joey';
//$joeyS->lastname = 'Smitchz';
echo 'hallo ' . strtoupper($joeyS->getFullName()) . '\n\n' ;

