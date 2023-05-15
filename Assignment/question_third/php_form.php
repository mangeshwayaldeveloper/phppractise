<!DOCTYPE html>
<htmL lang="en">
<head>
    <title>Exam Form</title>
    <style>
        form{
            text-align: center;
        }

    </style>
</head>
<body>
<h1 style="text-align:center">Exam Form </h1>
<form action="view_form.php" method="POST" class="align">
    <label for="First_name">Name:</label><br>
    <input type="text" name="fname"><br><br>
    <label for="last_name">Last Name: </label><br>
    <input type="text" name="lname"><br><br>
    <label for="course">Course:</label><br>
    <input type="text" name="course"><br><br>
    <label for="collegename">College Name:</label><br>
    <input type="text" name="clname"><br><br>
    <input type="submit" name="sb">
    <h6>Each Field Is Mandatory</h6>
</form>
</body>
</htmL>
<?php
?>

