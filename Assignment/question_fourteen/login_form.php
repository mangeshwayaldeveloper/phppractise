<?php
session_start();

// Check if user is already logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header('Location: login_form.php');
    exit;
}

// Check if login form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform login authentication (you can modify this part as per your authentication logic)
    if ($username === 'm@gmail.com' && $password === 'pass') {
        $_SESSION['loggedin'] = true;
        $_SESSION['start_time'] = time(); // Store the session start time
        header('Location:login_form.php');
        exit;
    } else {
        echo 'Invalid username or password';
    }
}
?>
<!DOCTYEPE html>
<html>
<body>
<h2>Login</h2>
<form method="POST" action="second.php">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br>

    <input type="submit" value="Login">
</form>
</body>
</html>
