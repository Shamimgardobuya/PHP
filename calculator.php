<?php 
//do while loop practise - 
//do while looping exercises to work on
//working with loops
//executes the statement once, like checking an email, though it results to 
//similar output as while loop
// Create a script that displays
//  1-2-3-4-5-6-7-8-9-10 on one line. 
//  There will be no hyphen(-) at starting and ending position.
//start at 0
//print in  a new line
///
$x = 0;
do{
   $x++;
//    echo "$x\r\n";
}
while($x<9); 
 //will cover up to 10 because at first the expression will execute without code.
// echo ++$x;// will give output of the last value of the loop.
//when condition is wrong does that mean whats in the loop stops



// <!-- Create a script using a for loop 
// to add all the integers between 0 and 30 and 
// display the total. -->
//input - number from 0 to 30.
//output - sum of the range of numbers from 0 to 30.
//condition for while, 0 is less than 29
//create a second variable to calculate sum of the values using the + operator
//output the total of the value
//f4thought, must we always increament  = yes drling 
//manually in do while loop to cater for the next values
$start = 0;
$sum = 0;
do{
    $sum+=$start;
    $start++;
}
while($start <=30);
// echo $sum;


// Write a program to calculate 
// and print the factorial of a number using a for loop. 
// The factorial of a number is the product of all integers up to
//  and including that number, so the factorial of 4 is 4*3*2*1= 24.
//factorial are all numbers multiplied  up to that number 
//no factorial of 0
//decreamenting is not working
$starts = 7;
$factorial = 1;
do{
    $factorial *= $starts;
    // echo $factorial;
    $starts--;

}
while($starts > 0);  //initial condition was false making the function inside the do loop not work 
// echo $factorial;


// Write a program which will count the
//  "r" characters in the text "w3resource".



//
$c = 0;
for($i = 0; $i < 10; ++$i) {
  if ($i%2 === 1) { //for first iteration is 0, 2, 4,6
    continue;
  } elseif ($i === 8) {
    break;
  }
  ++$c;
}
// echo $c;

$a = ['a'=>'A','b'=>'B'];
$b = ['a'=>'A','B'=>'B'];
if($a<>$b){//<> not equal in php
    echo "Not equal"; //not equal because there is difference in key
}else{
echo 'equal';

//



}


// Write a simple PHP class which displays an introductory message
//  like "Hello All, I am Scott", where "Scott"
//   is an argument value of the method within the class.

//argument like parameter 
//input a class message 
//output - message with name printed

//create class message
//create atribute message and name
//create public function and output the message and name with concatenation
//create object and echo object

class Message{
 public $message;
 public $name;

 function __construct($message,$name)
 {
    $this->message = $message;
    $this->name = $name;

 }
 public function greeting(){
       echo $this->message . $this->name ."hope you are doing good";
 }

};
$objectOne = new Message("Hello","Sam");
$objectOne->greeting();
// echo $objectOne->greeting();


// Write a PHP Calculator 
// class which will accept two values as arguments, 
// then add them, subtract them, 
// multiply them[] together, or divide them on request.
class Calculator{
    public $numberOne;
    public $numberTwo;

    function __construct($numberOne,$numberTwo)    
    {
        $this->numberOne = $numberOne;
        $this->numberTwo = $numberTwo;


    }

    public function addition(){
      
        return  $this->numberOne+$this->numberTwo;

    }
    public function subtraction(){
        if($this->numberOne > $this->numberTwo){
        return $this->numberOne - $this->numberTwo;
        }
        else{
            return $this->numberTwo - $this->numberOne;
        }
    }
    public function multiplication(){
        return $this->numberOne * $this->numberTwo;

    }
    public function division(){
        return $this->numberOne / $this->numberTwo;

    }
    public function factorial_for_first(){
     $start = 1;
    do{
           $start *= $this->numberOne;
           $this->numberOne --;
    }
    while($this->numberOne > 0);
    echo "\r\n".$start;
    }
    
    
    

}
$calc = new Calculator(5,7);
// $calc->factorial_for_first();
// echo "\r\n".$calc->addition();
echo "\r\n".$calc->subtraction();

?>


