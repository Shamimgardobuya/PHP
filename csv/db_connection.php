<?php
$db = new mysqli('http://127.0.0.53/', 'shamim', 'encryption', 'csv_learning');
if($db->connect_errno){
  echo "Failed" . $db->connect_error;
}

exit();

?>