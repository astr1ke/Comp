<?php


class user
{

    protected $name;
    protected $age;

    public function setName($Sname)
    {$this->name = $Sname;}
    public function getName()
    {return $this->name;}
    public function setAge($Sage)
    {{$this->age = $Sage;}}
    public function getAge()
    {return $this->age;}

}

class worker extends user
{
    private $salary;

    public function getSalary()
    {return $this->salary;}
    public function setSalary($Ssalary)
    {$this->salary = $Ssalary;}

}

class Student extends user
{

    private $stipend;
    private $kurs;

    public function setStipend($Sstipend)
    {$this->stipend = $Sstipend;}
    public function getStipend()
    {return $this->stipend;}
    public function setKurs($Skurs)
    {{$this->kurs = $Skurs;}}
    public function getKurs()
    {return $this->kurs;}

}

class Driver extends worker
{

    private $VStage;
    private $VKat;

    public function setVStage($SVStage)
    {$this->VStage = $SVStage;}
    public function getVStage()
    {return $this->VStage;}
    public function setVKat($SVKat)
    {{$this->VKat = $SVKat;}}
    public function getVKat()
    {return $this->VKat;}
}


$work1 = new worker();
$work1->setAge(25);
$work1->setName('Иван');
$work1->setSalary(1000);

$work2 = new worker();
$work2->setAge(26);
$work2->setName('Вася');
$work2->setSalary(2000);

$res = $work1->getSalary() + $work2->getSalary();
echo 'Сумма зарплат Васи и Ивана равна '.$res;