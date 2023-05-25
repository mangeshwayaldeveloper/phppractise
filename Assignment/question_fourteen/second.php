<!DOCTYPE html>
<html>
<head>
    <title>User Details</title>
    <script>
        // Redirect to login page after specified time
        setTimeout(function () {
            window.location.href = 'logout.php';
        }, 300000); // 5 minutes (300,000 milliseconds)
    </script>
</head>
<body>
<?php
session_start();

// Check if user is not logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: index.php');
    exit;
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $city = $_POST['city'];
    $phoneNo = $_POST['phoneNo'];

    // Process the submitted user details (you can modify this part as per your requirements)

    // Clear the session timeout since the user submitted the form within the time limit
    $_SESSION['start_time'] = time();
}
?>

<h2>User Details</h2>
<form method="POST" action="">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required><br>

    <label for="city">City:</label>
    <input type="text" name="city" id="city" required><br>

    <label for="phoneNo">Phone Number:</label>
    <input type="text" name="phoneNo" id="phoneNo" required><br>

    <input type="submit" value="Submit">
</form>

<p>Please enter your details within 5 minutes, otherwise your session will expire.</p>
</body>
</html>
