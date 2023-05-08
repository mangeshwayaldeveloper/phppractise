<?php
function static_php(){
static $num1=3;
$num1++;
$num2=7;
$num2++;
echo "static number:".$num1."<br>";
echo "number:".$num2;
}
static_php();
?>