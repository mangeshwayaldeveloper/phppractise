<?php
$a=12;
$b=20;
echo "The value of a is->".$a."\n";
echo "The value of b is->".$b."\n";
$b=$a+$b;
$a=$b-$a;
$b=$b-$a;
echo "The value of a is->".$a."\n";
echo "The value of b is->".$b;
?>