<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My first pHp</h1>
    <?php
    $text = "PHP";
    $_practising = 'build an app';
    $number = 944;
    // var_dump($number);
    
    function practising(){
        global $text,$_practising;
        $text = $text . $_practising;
    }
    $cars = array('volks','subaru','benz');
    // var_dump($cars);
    practising();
    // echo "<h1>I love .$text!.</h1>";      //variables can be referenced inside a string 
    // echo "<h1> $text </h1>";      //variables can be referenced inside a string 
    //create a class Car
    //initialize properties of the car
    //using constructor function assign the attributes
    //create a function within the class and the funtction to show the color of the car
    class Car{
        public $color;
        public $model;
        
        public function __construct($color,$model){
            $this->color = $color;
            $this->model = $model;
        }
        public function message(){
         return  "My car is color $this->color and a $this->model type";
        }       
    }
   $objectOne = new Car('red','Subaru');
   echo  $objectOne->message();
   //declaring a constant value in php
    define("cars",[
        "audi",
        "probox"
    ]);
    echo cars[0];
    //echo takes argument of type String, cars stands for array which is not suitable
    //-> used as an access symbol for objects with properties

//int(944) array(3) { [0]=> string(5) "volks" [1]=> string(6) "subaru" [2]=> string(4) "benz" }

// => symbol is used ^ associative array key value assignment
    ?>
</body>
</html>