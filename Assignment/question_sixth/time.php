<?php
$time = $_POST['t'];
list($hour,$minute)=explode(':',$time);
if ($hour==12 && $minute== 00) {
    echo "Good Noon";
} elseif ($hour>5 &&  $hour< 12) {
    echo "Good Morning";
} elseif ($hour >=12 && $hour<18) {
    echo "Good Afternoon";
} else {
    echo "Good Night";
}
?>