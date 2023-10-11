<!-- reverse a string and print the new string -->

 <?php

function palindrome($initial){
   $original = $initial;
for($end = strlen($initial)-1,$first=0;$first<$end;$end--,$first++){
   $newWord = $initial[$end];
   $initial[$end] = $initial[$first];
   $initial[$first] = $newWord;
}
if($original[0] === $initial[0] && strlen($initial)=== strlen($original)){
return $initial . ' is palindrome';
}
else{
   return $initial . '  is not palindrome';
}
}
$initial = "dad";
 echo palindrome($initial);
?> 