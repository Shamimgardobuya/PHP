<?php
// PHP function to in place reverse a string 
// without using library functions
  

// Write a PHP program to print fibonacci series.
//base case if number is 1 or less 1 return numbber
//repeated n-1 +n-2
function fibonacci($number){
    if($number == 1 || $number < 2){
        return $number;

    }
    else{ 
        return fibonacci($number-1) + fibonacci($number-2);
    }
}
echo fibonacci(8);
//print series without for loop
?>