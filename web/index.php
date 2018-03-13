<?php

class worked
{
public $name;
public $age ;
public $salary;
}

$rab1 = new worked();
$rab1->name = 'Иван';
$rab1->age = 25;
$rab1->salary = 1000;

$rab2 = new worked();
$rab2->name = 'Вася';
$rab2->age = 26;
$rab2->salary = 2000;

$sumSalary = $rab1->salary + $rab2->salary;
$sumAge = $rab1->age + $rab2->age;


echo 'Сумма зарплат Вани и Васи = '.$sumSalary.'<br/>';
echo 'Сумма возрастов Вани и Васи = '.$sumAge;


