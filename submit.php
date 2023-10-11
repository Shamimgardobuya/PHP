<?php
//start session
session_start();
if($_POST && !empty($_POST('username'))){
    //set session variable
    $_SESSION['username'] = $_POST['username'];
}
?>
<html>
<head>
  
</head>
<body>
    <?php
    if(isset($_SESSION['username']))
    {
        echo "Hi " . $_SESSION['username'];
        echo "Welcome to this page";
    }
    else{
        //show login page
        echo "Please <a href='sessions.php'>Login</a>";
    }

    ?>
</body>
</html>