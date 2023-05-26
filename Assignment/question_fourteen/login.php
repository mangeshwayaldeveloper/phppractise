<?php
session_start();

// Set the time limit for the session
$time_limit = 300; // 5 minutes

// Check if the user has exceeded the time limit
if (time() - $_SESSION['start_time'] > $time_limit) {
    // The user has exceeded the time limit, so expire the session
    session_destroy();
    // Warn the user
    echo '<p>Your session has expired. Please login again.</p>';
    // Redirect the user to the login page
    header('Location: login.php');
} else {
    // The user is logged in, so display the second form
    echo '<form action="submit.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <label for="city">City:</label>
        <input type="text" name="city" id="city">
        <label for="phoneno">Phone Number:</label>
        <input type="text" name="phoneno" id="phoneno">
        <input type="submit" value="Submit">
    </form>';
}
?>
