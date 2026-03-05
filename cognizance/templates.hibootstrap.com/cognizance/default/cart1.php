<?php
session_start();

if(!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if(isset($_POST['add_to_cart'])) {
    $id    = $_POST['product_id'];
    $name  = $_POST['product_name'];
    $price = floatval($_POST['product_price']);
    $qty   = intval($_POST['quantity']);

    // Check if already in cart
    $found = false;
    foreach($_SESSION['cart'] as &$item) {
        if($item['id'] == $id) {
            $item['quantity'] += $qty;
            $found = true;
            break;
        }
    }
    if(!$found) {
        $_SESSION['cart'][] = [
            'id' => $id,
            'name' => $name,
            'price' => $price,
            'quantity' => $qty
        ];
    }
    header("Location: cart.php"); // redirect to cart
    exit;
}
?>