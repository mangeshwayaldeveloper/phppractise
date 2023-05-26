<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
<h1>Login Form</h1>
<form action="userDetails.php" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username">
    <label for="password">Password:</label>
    <input type="password" name="password" id="password">
    <input type="submit" value="Login">
</form>
</body>
</html>
<?php
session_start();
if(isset($_SESSION['name'])>300){
if((time()-$_SESSION['loginTime'])>300){
    header('location:logout.php');
}
}else{
    header('location:login_form.php');
}
?>