<?php

use Car as GlobalCar;
class Car{
    private $color  = 'red';
    // public $color;
    public $weight;
    private $year;  //can only be accessed within the class but can be accessed by using this keyword
    private $availableColors = [
        'red',
        'green',
        'yellow',
        'pink',
    ];
    public function setYear($year){
        $this->year = $year;

    }
    public function getYear(){
       return $this->year;

    }
    public function setColor($color){
        if(in_array($color,$this->availableColors)){
         $this->color = $color;

        }

    }
    public function getColor(){
        return  $this->color;      

    }
}

$myCar = new Car();
// $myCar->color = 'red';
$myCar->setYear(year:2023);
$myCar->setColor(color:'white');
// echo $myCar->getColor();
$myCar->setColor('green');
echo var_dump($car->color,$myCar);
// echo $myCar->getYear();
// echo $myCar->color 
//validation of requests
?>