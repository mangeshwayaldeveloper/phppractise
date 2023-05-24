<?php
$num=(int)$_POST['number'];
$reverse=0;
while($num>0){
    $rem=$num%10;
    $reverse=($reverse*10)+$rem;
    $num=(int)($num/10);
}
echo "The reverse number is ".$reverse;
?>
