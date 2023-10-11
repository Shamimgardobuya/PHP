<!-- Write a program to store the 
username in cookie and check 
whether the user have successfully login or not. -->

<!-- input users credentials using cookie
output - successful login
pseudocode
//create database that stores credentials pf username and password using cookies
//crete function that takes in the password and username
//compare if value is in db.
//if yes echo login successful else
//not yet


-->
<?php



// )

?>
<form action="authenticate.php"    method="post">
Username<input type="text" name="username" placeholder="Enter username" value="<?php

if(isset($_COOKIE["username"])){
    echo $_COOKIE["username"];
}


?>"/>
Password<input type="text" placeholder="Enter password" value="<?php

if(isset($_COOKIE["password"])){
    echo $_COOKIE["password"];
}


?>"/>
   <input type="checkbox" name="remember">Remember Me</input>
       <button type="submit">  </button>

   
   
   
   
   <form/>