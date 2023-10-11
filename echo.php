<?php
// Write a Program to 
// create following pattern using for loops or while:
// for($start = 1;$start < 11;$start++){
//     echo ''.str_repeat('*',$start).PHP_EOL;

// }

// str_repeat - allows a string to be multiplied as php does 
// not allow multiplication of  different data types. str_repeat takes in string
// and number of times string needs to be multiplied
//nested array to produce, 8 by 8  //print order of ROOK,BISHOP,,kNIGHT,QUEEN KING BISHOP KNIGHT ROOK
//box ROOK,BISHOP,,kNIGHT,QUEEN KING BISHOP KNIGHT ROOK
//box pawn,pawn,pawn,pawn,pawn,pawn,pawn,pawn
//concatenate with 8row of stars and another 8 row of stars
//2d array, row and column
//make a 2 dimesional array and inside it mention 
//output chess board, input - create a 2d array with items then another 2d array then join with stars to represe
// for($start = 0;$start < 8 ;$start ++){
    
//     for($start = 0;$start < 8;$start ++){
//          echo 'Bishop Queen King Bi'
//          echo 'pawn ';
//     }
// }
global $chessBoard;
$chessBoard = array(
    array('ROOK','BISHOP','KNIGHT','QUEEN' ,'KING', 'BISHOP','KNIGHT','ROOK' ),
    array('pawn','pawn','pawn','pawn' ,'pawn', 'pawn','pawn', 'pawn'),
    
    array('box','box','box','box' ,'box', 'box','box', 'box'),
    array('box','box','box','box' ,'box', 'box','box', 'box'),

    array('pawn','pawn','pawn','pawn' ,'pawn', 'pawn','pawn', 'pawn'),
    array('ROOK','BISHOP','KNIGHT','QUEEN' ,'KING', 'BISHOP','KNIGHT' ,'ROOK'),


);
$item = 'item';
for($piece = 0;$piece < count($chessBoard) ; $piece++)
{
    foreach($chessBoard[$piece] as $pieces){
            // if($piece > 4 && $piece < 8){
             print_r($pieces.PHP_EOL);

       
;
    }
}
//array methods
$arrayNumbers = array(90,9,4);
print_r(array_shift($arrayNumbers));  //removes the first element and returns it
print_r($arrayNumbers);

//check indexes of the new array after deletion
print_r($arrayNumbers[0])


?>