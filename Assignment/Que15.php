<?php
$phy=$_POST["phy"];
$che=$_POST["chem"];
$bio=$_POST["bio"];
$math=$_POST["maths"];
$mara=$_POST["mara"];
$sum=(int)$phy+(int)$che+(int)$bio+(int)$mara+(int)$math;
$per=$sum/5;
echo "The total of the marks=".$sum."<br>";
echo "Your Percentage is=".$per."%";

?>



