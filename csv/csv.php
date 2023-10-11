<html>
<head>
    <meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<form class="md-form"  action='#' method="post" enctype="multipartform/data" >
  <div class="file-field">
    <div class="btn btn-primary btn-sm float-left">
      <span>Choose file</span>
      <input size="50" type="file" name="detail.csv">
    </div>
    </div><br/><br/>
    <div class="form-group">
      <input type="submit" class="btn btn-primary" value="Upload Products"/>
    </div>
</form>
</body>
</html>

<?php
include('db_connection.php');
if(isset($_POST["submit"])){
  $handle= fopen($_FILES['detail.csv']['tmp_name'],"r");
  $n = 1;
  $headers = fgetcsv($handle, 1000, ",");
  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) 
{
  // $data[0];
  // $data[1];
  $db->query('INSERT INTO csv 
  VALUES ("'.$row[0].'","'.$row[1].'",
  "'.$row[2].'")');

  if($n>1) {
  ?>
  <tr>
      <td>
              <?php echo $row[0];?>
      </td>
      <td>
          <!-- <center> -->
              <?php echo $row[1];?>
          <!-- </center> -->
      </td>
      <td>
          <!-- <center> -->
              <?php echo $row[2];?>
          <!-- </center> -->
      </td>
  </tr>
      <?php
  }

  // Increment records
  $n++;
}

}
fclose($handle);






?>