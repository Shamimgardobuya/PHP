<?php
//passwords
// $day28 = 'day28';
// //import ascii for algorithm
// $salt = 'WEYCRSXDXEXDXDX';
// // echo ''.crypt($day28,$salt).''.PHP_EOL;
// // echo ''.hash('sha256', $day28).'';
// // $passes = hash('sha256', $day28);
// // print_r(md5($day28)).PHP_EOL;
// //read more on hashing algorithms
// $passes = password_hash($day28,PASSWORD_ARGON2I);
// // print_r($passes);
// // print_r(hash_algos());
// print_r($passes);
// if(password_verify($day28,'$passes'))
// {
//     echo 'true';

// }else{
//     echo 'false';
// }

// $$home = 'encrypt';
// echo $$home;
session_start();
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'shamim';
$DATABASE_PASS = 'encryption';
$DATABASE_NAME  = 'db_password';

// $conection = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if(mysqli_connect_errno()){
  echo 'Failed to connect' . mysqli_connect_error();
}
class DB
{
  private static $instance;
  private $conn;
  private $hostname = 'localhost';
  private $username = "shamim";
  private $password = "encryption";
  private $name ="db_password";
  private function __construct()
  {
    try{
        
    $this->conn = mysqli_connect($this->hostname,$this->username ,$this->password,  $this->name, );
    // $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "";    
    }
    catch(PDOException $e)
    {
        echo 'Failed to connect' . mysqli_connect_error();

    }
  }
  public  static function getInstance()
  {
      if(is_null(static::$instance))
      {
            static::$instance = new DB();
           
      }
      return static::$instance;
  }
  public function getConnection()
  {
      return $this->conn;
  }

  private function __clone()
  {
  }

}
$connection = DB::getInstance();
$connectionGet = $connection->getConnection();

//without sessions we cacn't associate client with servers
// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	exit('Please fill both the username and password fields!');


}
if($seqstmt=$connectionGet->prepare('SELECT id, password from accounts where username = ?')){
    //bind parameters
    $seqstmt->bind_param('s',$_POST['username']);
    $seqstmt->execute();
    $seqstmt->store_result();
    if($seqstmt->num_rows > 0){
        $seqstmt->bind_result($id,$password);
        $seqstmt->fetch();

        if(password_verify($_POST['password'],$password)){
           session_regenerate_id();
           $_SESSION['loggedin'] = true;
           $_SESSION['name'] = $_POST['username'];
           $_SESSION['id'] =$id;
           echo 'Welcome' . $_SESSION['name'];

        }
        else{
            echo "Incorrect username or password";

        }

    }
    else{
        echo 'incorrect username or password';
    }
    $seqstmt->close();



}


?>