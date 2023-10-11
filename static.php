<?php
class Car{

   public $color;
   private $model;
   
   const MODEL_NAME = 'bmw';  //declare without adding public or private
   public function __construct($color, $model)
   {
     $this->color = $color;
     $this->model = $model;

   }
   public function __toString()  ///magic method for converting object to string
   {
        return "Color $this->color, Model : $this->model";
   } 
   public function __get($propertyName){  //retrieves property of an undefined/unimplemented variable 
           if ($propertyName === 'color3'){
             return $this->color;


           }
         return 'property does not exist';
   }
   //set method, assign value to an undefined value
   
   public function __set($propertyName,$variable){   //perform what you want to do with non existing properties.
    // if($propertyName === 'mymodel'){   //identical comparison  checks type and values 
    //     return $this->
    // }
    // return $this->model = $propertyName; 
  return    "I like color" . $propertyName;
    // var_dump($propertyName,$variable);

   }
   public function __call($name, $arguments)  //handle unexisting method calls
   {
      if($name === 'getModel'){
        return $this->getCar();

      }
      else if($name === 'setModelCar'){
        return $this->setCar($arguments[0]);

      }

   }
   public function getCar()
   {
    return $this->model;
   }
   public function setCar($model)
   {
    $this->model = $model;
   }
   public function __invoke() //makes object of the class callable/act like a function
   { 
    echo "I am callable";
    
   }
   //serialize function converts into storage of 

}

$myCar = new Car('red',Car::MODEL_NAME);

// echo $myCar->name;
// echo $myCar->color3;
// echo $myCar->__set($name,'mazda');
echo $myCar->getModel('mazda');
echo $myCar();
$serialiedCar = serialize($myCar);
$notserialized = unserialize($myCar);
var_dump($serialiedCar,$notserialized)


//construct and destruct are 



?>