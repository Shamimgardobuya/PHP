<?php


class TextInput
{   
    // public $text;
    // public $sum;
    public function add($text)
    {
        //second coming in $text is new
        //
        $sum = '';
        $array_text = [];
        array_push($array_text,$text);
        foreach($array_text as $item)
        {
            $sum .=$item;
        }
       print_r($sum).PHP_EOL;
        
    }

   
}
class NumberInput extends TextInput{
    public function add($text)
    {
        $sum = 0;
        $array_text = [];
        if(is_int($text))
        {
        array_push($array_text,$text);
        foreach($array_text as $item)
        {
            $sum +=$item;
            print_r($sum).PHP_EOL;

        }}
        else{
         print_r('please use numbers not letters');
        }
    }
}
// $obj = new TextInput();
// $obj->add('1');
// $obj->add('0');
// $obj->add('a');
$objTwo = new NumberInput();
$objTwo->add(0);
$objTwo->add(1);
$objTwo->add(9);



// print_r($obj);


?>