<!-- recursion to print 10 to 1 numbres -->
<!-- base case number is 1 or less 1 return number -->
<?php

function printBack($number){
       if($number == 1 or $number  == 0){
        return $number;
       }
       else{
        printBack($number-1); 
        return $number;
        //repeated action whereby number - 1 decreament
        // decreament is number - 1 
        //decreament is number - 1
        //
        //repeated action is number decreasing 
       }
}
for($start = 10; $start>0;$start--){  //post decreamnent, returns start then decreamnets start by 1
    echo printBack($start) ."\r\n";
}

?>