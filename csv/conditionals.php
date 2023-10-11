<?php
//in range function all values are inclusive;
function grading($grade)
{

     $firstDivision = range(60,100); 
     $secondDivision = range(45,59); 
     $thirdDivision = range(33,44); 
     $fail = range(0,33); 
     if(in_array($grade,$firstDivision,TRUE)){
        echo 'grade '.$grade .' is first division grade';}
     else if(in_array($grade,$secondDivision,TRUE)){
        echo 'grade '.$grade .' is second division grade';
     }
     else if(in_array($grade,$thirdDivision,TRUE)){
        echo 'grade '.$grade .' is third division grade';
     }else{echo 'failed';};
}
echo grading(90);

//Write a program to show day of the week
// (for example: Monday) based on numbers using 
//switch/case statements.
//pseudocode
//input 
//numbers up to 7
//output//cosrresponding day 
//
//process
//create array and make it combination for the  numbers and days
//have one variable as you compare using switch
//use readline function
//compare instances of the cases if number is 1 let it be Monday as the day
// $number = readline("Enter a number between 1 to 7 ");
// switch ($number){
//     case $number == '1' :
//         echo $number . " represents  Monday";
//         break;
//     case $number == '2' :
//         echo $number . " represents  Tuesday";
//         break;
//     case $number == '3' :
//         echo $number . " represents  Wednesday";
//         break;
//     case $number == '4' :
//         echo $number . " represents  Thursday";
//         break;
//     case $number == '5' :
//         echo $number . " represents  Friday";
//         break;
//     case $number == '6' :
//         echo $number . " represents  Saturday";
//         break;
//     case $number == '7' :
//         echo $number . " represents  Sunday";
//         break;
// }
//

// $myArray = array_combine(range('Monday','Sunday'),range(1,7));//outputs per letter not per day
// print_r(array_keys($myArray));






?>

