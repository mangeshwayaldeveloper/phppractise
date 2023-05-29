<?php
session_start();

// Initialize session variables
if (!isset($_SESSION['page1_total'])) {
    $_SESSION['page1_total'] = 0;
}
if (!isset($_SESSION['page2_total'])) {
    $_SESSION['page2_total'] = 0;
}

// Process page 1 form submission
if (isset($_POST['page1_submit'])) {
    $item_name = $_POST['item_name'];
    $item_price = $_POST['item_price'];
    $item_quantity = $_POST['item_quantity'];
    $item_total = $item_price * $item_quantity;
    $_SESSION['page1_total'] += $item_total;
}

// Process page 2 form submission
if (isset($_POST['page2_submit'])) {
    $item_name = $_POST['item_name'];
    $item_price = $_POST['item_price'];
    $item_quantity = $_POST['item_quantity'];
    $item_total = $item_price * $item_quantity;
    $_SESSION['page2_total'] += $item_total;
}

// Display bill
if (isset($_POST['bill_submit'])) {
    $total = $_SESSION['page1_total'] + $_SESSION['page2_total'];
    echo "Total: $total";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shopping Mall</title>
</head>
<body>

<h1>Page 1</h1>
<form method="post" action="second.php">
    <label>Item name:</label>
    <input type="text" name="item_name"><br>
    <label>Item price:</label>
    <input type="number" name="item_price"><br>
    <label>Item quantity:</label>
    <input type="number" name="item_quantity"><br>
    <input type="submit" name="page1_submit" value="Add to cart">
    <p>Page total: <?php echo $_SESSION['page1_total']; ?></p>
</form>

</body>
</html>
