<?php
session_start();
require 'db.php'; // agar database connection use karna ho

// Initialize cart if not set
if(!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    $_SESSION['cart'] = [
        ['id'=>1, 'name'=>'Medical Mask', 'price'=>20, 'quantity'=>1],
        ['id'=>2, 'name'=>'Antiseptics', 'price'=>25, 'quantity'=>1],
        ['id'=>3, 'name'=>'Medical Gloves', 'price'=>11, 'quantity'=>1],
        ['id'=>4, 'name'=>'Drugs', 'price'=>50, 'quantity'=>1],
    ];
}

// Add item to cart
if(isset($_POST['add_to_cart'])) {
    $product_id   = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = floatval($_POST['product_price']);
    $quantity     = intval($_POST['quantity']);

    $found = false;
    foreach($_SESSION['cart'] as &$item) {
        if($item['id'] == $product_id) {
            $item['quantity'] += $quantity;
            $found = true;
            break;
        }
    }
    if(!$found) {
        $_SESSION['cart'][] = [
            'id' => $product_id,
            'name' => $product_name,
            'price' => $product_price,
            'quantity' => $quantity
        ];
    }
    header("Location: cart.php");
    exit;
}

// Remove item
if(isset($_GET['remove'])) {
    $remove_id = $_GET['remove'];
    foreach($_SESSION['cart'] as $key => $item) {
        if($item['id'] == $remove_id) {
            unset($_SESSION['cart'][$key]);
        }
    }
    $_SESSION['cart'] = array_values($_SESSION['cart']);
    header("Location: cart.php");
    exit;
}

// Update quantities
if(isset($_POST['update_cart'])) {
    foreach($_POST['quantities'] as $id => $qty) {
        foreach($_SESSION['cart'] as &$item) {
            if($item['id'] == $id) {
                $item['quantity'] = intval($qty);
            }
        }
    }
    header("Location: cart.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets/css/boxicons.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <title>Cognizance - Cart</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>
<body>

<?php require 'header.php'; ?>

<section class="cart-area ptb-100">
    <div class="container">
        <form method="POST" action="cart.php">
            <div class="cart-table table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Name</th>
                            <th scope="col">Unit Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $grand_total = 0;
                    if(!empty($_SESSION['cart'])):
                        foreach($_SESSION['cart'] as $item):
                            $subtotal = $item['price'] * $item['quantity'];
                            $grand_total += $subtotal;
                    ?>
                        <tr>
                            <td class="product-thumbnail">
                                <a href="#"><img src="assets/img/products/img<?= $item['id'] ?>.jpg" alt="item"></a>
                            </td>
                            <td class="product-name"><a href="#"><?= $item['name'] ?></a></td>
                            <td class="product-price"><span class="unit-amount">$<?= number_format($item['price'],2) ?></span></td>
                            <td class="product-quantity">
                                <input type="number" name="quantities[<?= $item['id'] ?>]" value="<?= $item['quantity'] ?>" min="1">
                            </td>
                            <td class="product-subtotal">
                                $<?= number_format($subtotal,2) ?>
                                <a href="cart.php?remove=<?= $item['id'] ?>" class="remove"><i class='bx bx-trash'></i></a>
                            </td>
                        </tr>
                    <?php endforeach; endif; ?>
                    </tbody>
                </table>
            </div>

            <div class="cart-buttons">
                <div class="row justify-content-between">
                    <div class="col-lg-6">
                        <button type="submit" name="update_cart" class="default-btn">Update Cart</button>
                    </div>
                    <div class="col-lg-6 text-end">
                        <a href="checkout.php" class="default-btn">Proceed to Checkout</a>
                    </div>
                </div>
            </div>

            <div class="cart-totals mt-4">
                <h3>Cart Totals</h3>
                <ul>
                    <li>Subtotal <span>$<?= number_format($grand_total,2) ?></span></li>
                    <li>Shipping <span>$4.00</span></li>
                    <li>Total <span>$<?= number_format($grand_total+4,2) ?></span></li>
                </ul>
            </div>
        </form>
    </div>
</section>

<?php require 'footer.php'; ?>

<!-- Links of JS files -->
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/parallax.min.js"></script>
        <script src="assets/js/mixitup.min.js"></script>
        <script src="assets/js/datatables.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/magnific-popup.min.js"></script>
        <script src="assets/js/appear.min.js"></script>
        <script src="assets/js/odometer.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/meanmenu.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/nice-select.min.js"></script>
        <script src="assets/js/form-validator.min.js"></script>
        <script src="assets/js/contact-form-script.js"></script>
        <script src="assets/js/ajaxchimp.min.js"></script>
        <script src="assets/js/main.js"></script>
</body>
</html>