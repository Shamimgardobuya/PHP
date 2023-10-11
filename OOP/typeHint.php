<?php
// stric;
declare(strict_types=1);

function learningTypeHint(string $words)

{
  return $words;
}

print_r(learningTypeHint(2));  //without strict mode, php will implicitly convert the values to the target data type

//include function that loads a file that has the strict function won't affect the strictness of files where it has been called.



?>

