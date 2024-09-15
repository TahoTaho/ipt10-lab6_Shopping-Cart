<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
    <h1>Your Cart</h1>
    <ul>
        <?php if (!empty($_SESSION['cart'])): ?>
            <?php foreach ($_SESSION['cart'] as $item): ?>
                <li><?php echo $item['name'] . " - " . $item['price'] . " PHP"; ?></li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>Your cart is empty.</li>
        <?php endif; ?>
    </ul>
    <a href="reset-cart.php">Clear Cart</a>
    <a href="place-order.php">Place Order</a>
</body>
</html>
