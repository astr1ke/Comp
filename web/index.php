<?php

class worked
{
private $name;
private $age ;
private $salary;

        private function checkAge($pr)
        {if ($pr < 100 and $pr > 1)
        {return true;}}

        public function setName($Pname)
        {    $this->name = $Pname;}

        public function getName()
        {    return $this->name;}

        public function setAge($Page)
        {   if ($this->checkAge($Page)) {
            $this->age = $Page;}
            else echo 'Некоректный возраст';}

        public function getAge()
        {       return $this->age;}

        public function setSalary($Psalary)
        {    $this->salary = $Psalary;}

        public function getSalary()
        {    return $this->salary;}


}

$rab1 = new worked();
$rab1->setName('Иван');
$rab1->setAge(25);
$rab1->setSalary(1000);

$rab2 = new worked();
$rab2->setName('Вася');
$rab2->setAge(26);
$rab2->setSalary(2000);

$sumSalary = $rab1->getSalary() + $rab2->getSalary();
$sumAge = $rab1->getAge() + $rab2->getAge();


echo 'Сумма зарплат Вани и Васи = '.$sumSalary.'<br/>';
echo 'Сумма возрастов Вани и Васи = '.$sumAge;


