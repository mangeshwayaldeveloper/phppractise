<!DOCTYPE html>
<html>
<body>
<form id='myForm' action="electricity_bill.php" method="post">
    <label>Enter Numbers of unit</label>
    <input type="number" name="unit">
    <input type="submit" name="subt" onsubmit="hideForm()">

</form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $units = (int)$_POST['unit'];
    if ($units <= 50) {
        $bill = $units * 3.50;
        echo "Your Electricity bill is " . $bill;
    } elseif ($units <= 150) {
        $bill = (50 * 3.50) + (($units - 50) * 4.00);
        echo "Your Electricity bill is " . $bill;
    } elseif ($units < 250) {
        $bill = (50 * 3.50) + (100 * 4.00) + (($units - 150) * 5.20);
        echo "Your Electricity bill is " . $bill;
    } elseif ($units >= 250) {
        $bill = (50 * 3.50) + (100 * 4.00) + (100 * 5.20) + ($units - 250) * 6.50;
        echo "Your Electricity bill is " . $bill;
    }
}
?>
