<?php
  $questions = array(

     'When was Google founded?',
     'Google is a misspelling of which word?',
     'Who were the founders of Google',
     'Whose the CEO of google?'

  );
foreach($questions as $question){
    $answer = readline('Answer here');
    if($question == 'When was Google founded?' && $answer==1998){
        echo 'yaay you got the answer!';
    }
    else if($question == 'Google is a misspelling of which word?' && $answer=='Googol'){
        echo 'yaay you got the answer!';
    }
    else if($question == 'Who were the founders of Google?' && $answer=='Larry Page and Sergey Brin'){
        echo 'yaay you got the answer!';
    }
    else if($question == 'Whose the CEO of google?' && $answer=='Sundar Pichai'){
        echo 'yaay you got the answer!';
    }
}


  


?>