<?php
interface EndWar{
   public function reason();
   public function how();
   public function embraceUnity();
}

class Israel implements EndWar{
    public function reason(){
        echo "we are leaders, we have to build tomorrows society not destroy it".PHP_EOL;
    }
    public function how(){
        echo "Call of the strikes on Gaza".PHP_EOL;
    }
    public function embraceUnity()
    {
        echo "we are one people".PHP_EOL;
    }
    
} 
$isl = new Israel();
// print_r($isl->reason());
// print_r($isl->how());
// print_r($isl->embraceUnity());
//practising regex, is a pattern that exists in a particular string '/delimeter 'pattern' i- case  sensitive'
//useful functions such as preg_match() and preg_match_all() take in the pattern and the string to 
//compare against, returns 

$word = "helloWorld mitchell is like a bell in a shell so don't tell Mell ";
$pattern = "/ell/i";
echo (preg_match($pattern,$word)).PHP_EOL;//outputs 1 to show true match is found
echo (preg_match_all($pattern,$word));//counts all mathces found and returns an integer
// $phone = /^([0-9\s\-\+\(\)]*)$/;
"/ - finds match for the pattern stated. Finds a match as the beginning of a string here has to start 0 up to 9 s- finds whitespace character
'$ finds match at end of string'
"
//Quantifiers
//answer the question how many times a pattern should be matched







?>