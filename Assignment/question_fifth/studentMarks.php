<?php
$percentage = (int)$_POST['num'];
if ($percentage > 60) {
    echo '<h2> You passed with first division</h2>';
} elseif ($percentage < 59 && $percentage > 45) {
    echo "<h2> You passed with second division</h2>";
} elseif ($percentage < 44 && $percentage > 33) {
    echo "<h2>You passed with third division</h2>";
} elseif ($percentage < 33) {
    echo "<h2>student fail</h2>";
} else {
    echo "<h2>invalid input</h2>";
}
?>