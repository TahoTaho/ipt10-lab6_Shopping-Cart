<?php
session_start();
require "products.php";

if (isset($_POST['product_id'])) {
    foreach ($products as $product) {
        if ($product['id'] == $_POST['product_id']) {
            $_SESSION['cart'][] = $product;
            break;
        }
    }
}
header("Location: cart.php");
