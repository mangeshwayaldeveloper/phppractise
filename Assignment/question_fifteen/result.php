<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["phy"] = $_POST["phy"];
    $_SESSION["bio"] = $_POST["bio"];
    $_SESSION["chem"] = $_POST["chem"];
    $_SESSION["maths"] = $_POST["maths"];
    $_SESSION["marathi"] = $_POST["marathi"];
    $_SESSION["english"] = $_POST["english"];

}
$name = $_SESSION["name"];
$class = $_SESSION["class"];
$phy = $_SESSION["phy"];
$bio = $_SESSION["bio"];
$chem = $_SESSION["chem"];
$maths = $_SESSION["maths"];
$marathi = $_SESSION["marathi"];
$english = $_SESSION["english"];
$total = $phy + $bio + $chem + $maths + $marathi + $english;
$percentage = $total / 6;
?>
<html>
<head>
    <title>Student Mark Sheet</title>
</head>
<body>
<h3> Student details </h3><br><hr>
Name : <?php echo" ".$name; ?><br>
Class : <?php echo" ".$class; ?><br>
<hr><br>
<h2> Subject Mark Details </h2> <br>
Physics : <?php echo" ".$phy; ?><br>
biology :  <?php echo" ".$bio; ?><br>
chemistry :  <?php echo" ".$chem; ?><br>
mathematics :  <?php echo" ".$maths; ?><br>
marathi :  <?php echo" ".$marathi; ?><br>
English :  <?php echo" ".$english; ?><br><hr>
Total Marks : <?php echo" ".$total; ?><br><hr>
Percentage : <?php echo " ".$percentage; ?> <br> <hr>

</body>
</html>
