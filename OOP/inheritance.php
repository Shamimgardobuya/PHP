<?php

class Cars{
    
     public function __construct(protected string $model)
     {   
        if(gettype($model) == "string")
        {
            $this->model = $model;

        }
        else
        {
            echo "Please add a string for the model not a number";
        }
     }
     public function __toString()
     {
        return $this->model;
     }
     public function getModel()
     {
        return $this->model;
     }
     public function id(){
        return uniqid();
     }

}

class Volkswagen extends Cars{
      
    public function __construct(protected int $numberPlate, protected string $model)
    {   
        parent::__construct($model);

        $this->numberPlate = $numberPlate;
    }
    public function returnModel()
    {
        return $this->getModel();  //for me to access function of model I have to use the $this object 
    }

    public function getModel()
    {
        $myModel = parent::getModel();    //accessing parents function and overriding

        
        return 'This is my model' . $myModel;
    }
    public function id()
    {
        return uniqid('Volkswagen');
    }
    public function __toString()
    {
        $myArray = array(
            $this->numberPlate,
             $this->numberPlate
        );
        return $myArray ;
        
    }

}
//create an object of Volkswagen
//
$myCar = new Volkswagen(4565,'Volkswagen');
echo $myCar->returnModel().PHP_EOL;
echo $myCar->getModel().PHP_EOL;
echo $myCar->id().PHP_EOL;

?>