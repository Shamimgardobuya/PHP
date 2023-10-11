<?php 
//using knowledge of traits and inheritance, create a program that helps Shamim
//to learn
trait Learning{
    public function memoryPalace()
    { 
       $steps = ['place1'=>'Laravel Framework','place2'=>'MySQL','place3'=>'PHP'];
       foreach($steps as $places){
          echo ''.$places.'';
       }
    }

}

class Laravel{
    use Learning;
    public $qualities;
    public $benefits;

    public function __construct($qualities,$benefits)
    
    {
         $this->qualities = $qualities; 
         $this->benefits = $benefits;
    }
    public function __toString()
    {
       return ' '.$this->qualities.'';
        // $this->benefits;


    }
    public function showbenefits(){
        echo 'Laravel offers' . $this->qualities . 'which helps in quick and secure querrying data from Mysql';
    }

}

class Mysql extends Laravel{

}

$Student  = new Laravel('ORM','MVC');
// echo $Student->showbenefits();
// echo ''. $Student->memoryPalace().'';
$dbLearning = new Mysql('Select','Joins');
echo $dbLearning->memoryPalace();








?>