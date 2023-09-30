<?php
//allow strict typing use declare(strict_types=1);

//constructor Promotion
class Houses{
   
}
class Cottage{
    // private $paint;
    // private $grass;
    

    // function __construct($paint,$grass)
    // {
    //     $this->paint = $paint;
    //     $this->grass = $grass;

    // }
    //constructor promotion - shortens code 
    //private,solely from the class
    //protected - class and derived classes
    //destructor called when object is deleted or script ends.

    public function __construct(public string $paint,protected string $grass, public readonly string $verandah)//automatic method called during object creation
    {
       $this->paint = $paint;
       $this->grass = $grass;
    //    $this->verandah = $verandah;


    }
    //adding type to property

}

$house1 = new Cottage(34,56,'Mary');
var_dump($house1->paint);//coercion in Php
var_dump($house1->verandah='Hobbit')//readonly property cannot be modified

?>