<?php
require 'db.php';
session_start();

// Ensure cart exists to avoid warnings
if(!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(empty($_SESSION['cart'])) {
        echo "<p style='color:red;text-align:center'>Your cart is empty!</p>";
        exit;
    }

    $customer_name  = $_POST['first_name'] . ' ' . $_POST['last_name'];
    $customer_email = $_POST['email'];
    $customer_phone = $_POST['phone'];
    $customer_address = $_POST['address'] . ', ' . $_POST['city'] . ', ' . $_POST['state'] . ' - ' . $_POST['zip'];

    // Calculate total
    $total_amount = 0;
    foreach ($_SESSION['cart'] as $item) {
        $total_amount += $item['price'] * $item['quantity'];
    }

    // Insert into orders
    $stmt = $conn->prepare("INSERT INTO orders (customer_name, customer_email, customer_phone, customer_address, total_amount) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssd", $customer_name, $customer_email, $customer_phone, $customer_address, $total_amount);
    $stmt->execute();
    $order_id = $stmt->insert_id;

    // Insert order items
    foreach ($_SESSION['cart'] as $item) {
        $stmt_item = $conn->prepare("INSERT INTO order_items (order_id, product_name, price, quantity) VALUES (?, ?, ?, ?)");
        $stmt_item->bind_param("isdi", $order_id, $item['name'], $item['price'], $item['quantity']);
        $stmt_item->execute();
    }

    // Clear cart
    unset($_SESSION['cart']);

    $stmt->close();
    $conn->close();

    // Redirect to Thank You page
    header("Location: thank-you.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS Files (unchanged) -->
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

    <title>Cognizance - Checkout</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>
<body>
<?php require 'header.php'; ?>

<section class="checkout-area ptb-100">
    <div class="container">
        <form method="POST" action="checkout.php">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-12">
                    <div class="billing-details">
                        <h3 class="title">Billing Details</h3>

                        <div class="row justify-content-center">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>First Name <span class="required">*</span></label>
                                    <input type="text" name="first_name" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Last Name <span class="required">*</span></label>
                                    <input type="text" name="last_name" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Email Address <span class="required">*</span></label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Phone <span class="required">*</span></label>
                                    <input type="text" name="phone" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Address <span class="required">*</span></label>
                                    <input type="text" name="address" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Town / City <span class="required">*</span></label>
                                    <input type="text" name="city" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>State / County <span class="required">*</span></label>
                                    <input type="text" name="state" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label style="position:auto;">Postcode / Zip <span class="required">*</span></label>
                                    <input type="text" name="zip" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="notes" class="form-control" placeholder="Order Notes" rows="6"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="order-details">
                        <h3 class="title">Your Order</h3>

                        <div class="order-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $total = 0;
                                    if(!empty($_SESSION['cart'])):
                                        foreach($_SESSION['cart'] as $item):
                                            $subtotal = $item['price'] * $item['quantity'];
                                            $total += $subtotal;
                                    ?>
                                    <tr>
                                        <td><?= $item['name'] ?></td>
                                        <td>$<?= number_format($subtotal,2) ?></td>
                                    </tr>
                                    <?php endforeach; endif; ?>
                                    <tr>
                                        <td>Cart Subtotal</td>
                                        <td>$<?= number_format($total,2) ?></td>
                                    </tr>
                                    <tr>
                                        <td>Shipping</td>
                                        <td>$4.00</td>
                                    </tr>
                                    <tr>
                                        <td>Order Total</td>
                                        <td>$<?= number_format($total+4,2) ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="payment-box">
                            <div class="payment-method">
                                <p>
                                    <input type="radio" id="direct-bank-transfer" name="payment_method" value="bank" checked>
                                    <label for="direct-bank-transfer">Direct Bank Transfer</label>
                                </p>
                                <p>
                                    <input type="radio" id="paypal" name="payment_method" value="paypal">
                                    <label for="paypal">PayPal</label>
                                </p>
                                <p>
                                    <input type="radio" id="cash-on-delivery" name="payment_method" value="cod">
                                    <label for="cash-on-delivery">Cash on Delivery</label>
                                </p>
                            </div>

                            <button type="submit" class="default-btn">Place Order</button>
                        </div>
                    </div>
                </div>
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