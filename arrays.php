<!-- Write a program to loop through an associative
 array using foreach. Suppose an associative array is - -->
 <!-- $a = array('one' => 'I', 'two' => 'II', 'three' =>'III', 'four' => 'IV'); -->

 <?php
 
 
$a = array('one' => 'I', 'two' => 'II', 'three' =>'III', 'four' => 'IV');
// echo $a;

 foreach($a as $item=>$value){   //first iteration without variable value, only brought as values of the keys without keys. $value helps identify values and each item as key
    echo $item.'' . $value . "\r\n";
 } 


 foreach($a as $item){   //first iteration without variable value, only brought as values of the keys without keys. $value helps identify values and each item as key
    echo $item . "\r\n";
 } 

 //abstract classes -  cannot be instantiated
 //if a class extends||inherits an abstract class - it has to implment all methods ore declare itslef as abstract


//interfaces - acontract that a class must implement
//if a class uses an interface, it implements it, a class can implement many interfaces
//can not gain multiple inheritance but class can implement many interface
//creating a logging system using Interfaces
//input- create a Logger class that implements the functionality 
//output  have the class that logs messages 

 ?>