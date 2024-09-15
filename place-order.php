<?php
session_start();
$order_code = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyz"), 0, 8);
$order_details = "Order Code: $order_code\n";
$order_details .= "Date: " . date("Y-m-d H:i:s") . "\nItems:\n";

$total = 0;
foreach ($_SESSION['cart'] as $item) {
    $order_details .= $item['name'] . " - " . $item['price'] . " PHP\n";
    $total += $item['price'];
}
$order_details .= "Total: $total PHP\n";
file_put_contents("orders-$order_code.txt", $order_details);

$_SESSION['cart'] = [];
?>
<!DOCTYPE html>
<html>
<body>
    <h1>Order Confirmation</h1>
    <p>Thank you for your order! Your order code is <?php echo $order_code; ?>.</p>
    <a href="index.php">Back to Products</a>
</body>
</html>
