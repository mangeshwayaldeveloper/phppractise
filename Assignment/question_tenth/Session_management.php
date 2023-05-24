<?php
session_start();
$_SESSION['username']="i am mangesh";
$_SESSION['userID']='007';
?>
<?php
$username=$_SESSION['username'];
echo "The username is: ".$username."<br>";
?>
<a href="index.html">Go to the index file</a><br>
<!DOCTYPE html>
<html lang="en">
<body>
<?php
echo "Session variable is set";
?>
</body>
</html>
