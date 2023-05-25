<?php
if (!isset($_COOKIE['hit_count'])) {
    setcookie('hit_count', 1, time() + 86400);
    $count = 1;
} else {
    $count = $_COOKIE['hit_count'] + 1;
    setcookie('hit_count', $count, time() + 86400);
}

echo "The count is $count";
?>
