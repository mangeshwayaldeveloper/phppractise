<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["class"] = $_POST["class"];
    $_SESSION["address"] = $_POST["add"];
}
?>
<html>
<head>
    <title>Student Mark Sheet Form</title>
</head>
<body>
<h2>Student Mark Sheet Form</h2>
<form method="post" action="result.php">
    <label for="phy">Physics:</label>
    <input type="number" name="phy" required><br>
    <label for="bio">Biology:</label>
    <input type="number" name="bio" required><br>
    <label for="chem">Chemistry:</label>
    <input type="number" name="chem" required><br>
    <label for="maths">Mathematics:</label>
    <input type="number" name="maths" required><br>
    <label for="marathi">Marathi:</label>
    <input type="number" name="marathi" required><br>
    <label for="english">English:</label>
    <input type="number" name="english" required><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>
