<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login_form.php");
    exit();
}

if (isset($_SESSION['login_time']) && time() - $_SESSION['login_time'] >
    30) {
    session_destroy();
    header("Location: login_form.php");
    exit();
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $city = $_POST['city'];
    $phoneNo = $_POST['phoneNo'];
    $success = "User details saved successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Details Form</title>
</head>
<body>
<h2>User Details</h2>
<?php if (isset($success)) { ?>
    <p><?php echo $success; ?></p>
<?php } ?>
<form method="POST" action="">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>
    <label for="city">City:</label>
    <input type="text" id="city" name="city" required><br><br>
    <label for="phoneNo">Phone Number:</label>
    <input type="text" id="phoneNo" name="phoneNo" required><br><br>
    <input type="submit" value="Save">
</form>
</body>
</html>
