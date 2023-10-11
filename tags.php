<!-- Write a program in php 
to remove all html tags 
except paragraph and italics tags -->
<?php

$htmlTags = 
    '<h1>Day 4 code</h1>
   <h2>Practising</h2>
   <p>Html with php</p>
   <i>27th August</i>

';
echo strip_tags($htmlTags,['<h1>,<i>'])

//can use strip_tags(first_argument for tags wanting to remove,second_argument is for the ones to be left);
//get query selector of all the values then 
//it will be an array
//using the elements, check if there's a p and I
//call unset method to remove the other elements from the array

?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 class="home">Day 4 code</h1>
   <h2 class="home">Practising</h2>
   <p>Html with php</p>
   <i>27th August</i>
</body>
<script>
    const node = document.querySelectorAll(".home")
    <?php 
    
    ?>
</script>
</html> -->