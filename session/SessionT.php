
<?php
session_unset();
$_SESSION["username"]="i am mangesh";
$_SESSION["userid"]="1";
?>
<?php
//get the session variable values
$username=$_SESSION["username"];
echo "Username is:".$username;
?>
<a href="index.html">go to the index html</a>
<!DOCTYPE html>
<html lang="en">
<body>
<?php
echo "session variable is set";
?>
</body>
</html>
