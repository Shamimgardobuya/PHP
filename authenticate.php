<?php
//functions of superglobal can be accessed anywhere, no need to refer it with global
//
$credentials = [];
   if(!empty($_POST["remember"])){
    setcookie("username",$_POST["username"],time()+3600);
    setcookie("password",$_POST["username"],time()+3600);
    echo "Cookies set successfully";
    //we cannot have duplicate keys in a.array
    $credentials["username"] = $_POST["username"];
    $credentials["password"] = $_POST["password"];
    if($checked_credetials = array_search( $_POST["username"],$credentials)==true && $checked_credetials = array_search( $_POST["password"],$credentials)){
      echo 'login accepted as user ' . $credentials["username"];

    }


   }
   else{
    setcookie("username","");
    setcookie("password","");
    echo "Cookies not set";
   }


//missnig gis trying aagain with same credentials
//create a database, check cookies credentials if there is match
//if credentials exost in database, say user exists.




?>
