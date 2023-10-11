<?php 
//prime numbers neither divisible by 2,3,5,7,9
//create a function that takes in a number
//inside the function compare the number if it has a modulus of no zero
//for the array above
//if the modulus is equal to 0, 
//output a message showing no prime number
function checkPrime($number){
    //find sqrt of number
    //create a third variable to act as counter to check when 
    //loop through starting from 1 up to the square root
    //inside the loop check if there is a remainder when dividing  number with 2
    //when modulus is completely 0
    //reduce flag to 0 and exit loop using break

    $squareRoot = sqrt($number);
    $start = 2;
    $flag = 1;
    for($start = 2; $start<=$squareRoot; $start++){  //4 number //2 square 
        if($number % $start ==0){
               $flag = 0;
               break;
               }
    }
    if($flag){
      echo $number . " is a prime number";

    }
    else{
        echo $number  ." is not prime";
    }
    // do{
    //    if($start / $number ==0){
    //     $flag = 0;
    //     break;
    //    }
    // //    if($flag){

    // //    }
    //    else{
    //      return $number . 'is a prime number';
    //    }
    //    $start ++;
    // }while($start< $squareRoot);

}
$lastNumber = 100;
$initial = 1;
for($initial = 0;$initial < $lastNumber;$initial++){
    echo checkPrime($initial);

}






?>