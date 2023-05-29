<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: user_details.php");
    exit();
}

function authenticate($username, $password)
{
    return ($username === 'admin' && $password === 'password');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (authenticate($username, $password)) {
        $_SESSION['username'] = $username;
        $_SESSION['login_time'] = time();
        header("Location: user_details.php");
        exit();
    } else {

        $error = "Invalid username or password";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
<h2>Login</h2>
<?php if (isset($error)) { ?>
    <p><?php echo $error; ?></p>
<?php } ?>
<form method="POST" action="">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"
           required><br><br>
    <input type="submit" value="Login">
</form>
</body>
</html>
