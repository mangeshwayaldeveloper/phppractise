<!DOCTYPE html>
<html>
<head>
 <title>User Details Form</title>
</head>
<body>
 <?php
 session_start();
 if (isset($_SESSION['username'])) {
 // Check if the session has expired
 $session_life = time() - $_SESSION['start_time'];
 $timeout = 30; // Set a timeout of 30 seconds
 if ($session_life > $timeout) {
 session_destroy(); // Session expired, destroy the session
 echo "<p>Your session has expired.</p>";
 } else {
 // Display the user details form
 echo "<h1>User Details Form</h1>";
 echo "<form method='post'>";
 echo "<label>Name:</label>";
 echo "<input type='text' name='name' required><br><br>";
 echo "<label>City:</label>";
 echo "<input type='text' name='city' required><br><br>";
 echo "<label>Phone No:</label>";
 echo "<input type='text' name='phone' required><br><br>";
 echo "<input type='submit' value='Submit'>";
 echo "</form>";
 }
 } else {
 // Session not found, redirect to login form
 header("Location: login.php");
 }
 if (isset($_POST['name']) && isset($_POST['city']) && isset($_POST['phone'])) {
 // Save the user details
 $name = $_POST['name'];
 $city = $_POST['city'];
 $phone = $_POST['phone'];
 echo "<p>User details saved successfully.</p>";
 }
 ?>
</body>
</html>