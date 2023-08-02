<!DOCTYPE html>
<html>
<head>
 <title>Login Form</title>
</head>
<body>
 <?php
 session_start();
 if (isset($_POST['username']) && isset($_POST['password'])) {

 $username = $_POST['username'];
 $password = $_POST['password'];
 if ($username == 'admin' && $password == 'admin') {

 $_SESSION['username'] = $username;
 $_SESSION['start_time'] = time();
 header("Location: user.php");
 } else {
 
 echo "<p>Invalid username or password</p>";
 }
 }
 ?>
 <h1>Login Form</h1>
 <form method="post">
 <label>Username:</label>
 <input type="text" name="username" required><br><br>
 <label>Password:</label>
 <input type="password" name="password" required><br><br>
 <input type="submit" value="Login">
 </form>
</body>
</html>