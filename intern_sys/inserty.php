<html>
<body>
<?php
$con = mysql_connect("localhost","root","","db_issm");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("db_issm", $con);

 
$sql="INSERT INTO fill_details (company_name, first_name, last_name,email,gender,file)
VALUES
( '$_POST[company_name]','$_POST[first_name]','$_POST[last_name]','$_POST[email]','$_POST[gender]','$_POST[file]')";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
header('location:file_uploading/index.php');
 
mysql_close($con)
?>
</body>
</html>
 