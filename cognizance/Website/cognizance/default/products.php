<?php
session_start();
require 'db.php';

if(isset($_POST['add_to_cart'])){

$id = $_POST['product_id'];
$name = $_POST['product_name'];
$price = $_POST['product_price'];

    $found = false;

    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = [];
    }

    foreach($_SESSION['cart'] as &$item){
        if($item['id'] == $id){
            $item['quantity'] += 1;
            $found = true;
            break;
        }
    }

    if(!$found){
        $_SESSION['cart'][] = [
            "id" => $id,
            "name" => $name,
            "price" => $price,
            "quantity" => 1
        ];
    }

    header("Location: cart.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="zxx">
    
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Links of CSS files -->
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

        <title>Cognizance - Medical Health & Corona Treatment Template</title>

        <link rel="icon" type="image/png" href="assets/img/favicon.png">
    </head>
    <body>

  <!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="shadow"></div>
                <div class="box"></div>
            </div>
        </div>
        <!-- End Preloader -->

                

             <?php
        require 'db.php';
        require 'header.php';
        ?>

        <!-- Start Search Overlay -->
        <div class="search-overlay">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="search-overlay-layer"></div>
                    <div class="search-overlay-layer"></div>
                    <div class="search-overlay-layer"></div>
                    
                    <div class="search-overlay-close">
                        <span class="search-overlay-close-line"></span>
                        <span class="search-overlay-close-line"></span>
                    </div>

                    <div class="search-overlay-form">
                        <form>
                            <input type="text" class="input-search" placeholder="Search here...">
                            <button type="submit"><i class='bx bx-search-alt'></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Overlay -->

        <!-- Start Page Title Area -->
        <section class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>Products</h2>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Products</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title Area -->

        <!-- Start Products Area -->
        <section class="products-area ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-products-box">
                            <div class="products-image">
                                <a href="single-products.html">
                                    <img src="assets/img/products/img1.jpg" alt="image">
                                </a>
                            </div>

                            <div class="products-content">
                                <h3><a href="single-products.php">Medical Mask</a></h3>
                                <div class="price">
                                    <span class="new">$18</span>
                                </div>
<form method="POST" action="cart.php">
    <input type="hidden" name="product_id" value="1">
    <input type="hidden" name="product_name" value="Medical Mask">
    <input type="hidden" name="product_price" value="18">
    <input type="hidden" name="quantity" value="1">

    <button type="submit" name="add_to_cart" class="add-to-cart-btn">
        <i class="flaticon-shopping-cart"></i> Add to cart
    </button>
</form>                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-products-box">
                            <div class="products-image">
                                <a href="single-products.html">
                                    <img src="assets/img/products/img2.jpg" alt="image">
                                </a>
                            </div>

                            <div class="products-content">
                                <h3><a href="single-products.html">>Antiseptics</a></h3>
                                <div class="price">
                                    <span class="new">$20</span>
                                </div>
<form method="POST" action="cart.php">
    <input type="hidden" name="product_id" value="2">
    <input type="hidden" name="product_name" value="Antiseptics">
    <input type="hidden" name="product_price" value="18">
    <input type="hidden" name="quantity" value="1">

    <button type="submit" name="add_to_cart" class="add-to-cart-btn">
        <i class="flaticon-shopping-cart"></i> Add to cart
    </button>
</form>                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-products-box">
                            <div class="products-image">
                                <a href="single-products.html">
                                    <img src="assets/img/products/img3.jpg" alt="image">
                                </a>
                            </div>

                            <div class="products-content">
                                <h3><a href="single-products.html">>Medical Gloves</a></h3>
                                <div class="price">
                                    <span class="new">$15</span>
                                    <span class="old">$20</span>
                                </div>
<form method="POST" action="cart.php">
    <input type="hidden" name="product_id" value="3">
    <input type="hidden" name="product_name" value="Medical Gloves">
    <input type="hidden" name="product_price" value="18">
    <input type="hidden" name="quantity" value="1">

    <button type="submit" name="add_to_cart" class="add-to-cart-btn">
        <i class="flaticon-shopping-cart"></i> Add to cart
    </button>
</form>                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-products-box">
                            <div class="products-image">
                                <a href="single-products.html">
                                    <img src="assets/img/products/img4.jpg" alt="image">
                                </a>
                            </div>

                            <div class="products-content">
                                <h3><a href="single-products.html">>Drugs</a></h3>
                                <div class="price">
                                    <span class="new">$10</span>
                                </div>
<form method="POST" action="cart.php">
    <input type="hidden" name="product_id" value="4">
    <input type="hidden" name="product_name" value="Drugs">
    <input type="hidden" name="product_price" value="18">
    <input type="hidden" name="quantity" value="1">

    <button type="submit" name="add_to_cart" class="add-to-cart-btn">
        <i class="flaticon-shopping-cart"></i> Add to cart
    </button>
</form>                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-products-box">
                            <div class="products-image">
                                <a href="single-products.html">
                                    <img src="assets/img/products/img5.jpg" alt="image">
                                </a>
                            </div>

                            <div class="products-content">
                                <h3><a href="single-products.html">>Asprin</a></h3>
                                <div class="price">
                                    <span class="new">$18</span>
                                </div>
                                <form method="POST" action="cart.php">
                                <input type="hidden" name="product_id" value="5">
                                <input type="hidden" name="product_name" value="Asprin">
                                <input type="hidden" name="product_price" value="18">
                                <input type="hidden" name="quantity" value="1">
                                <button type="submit" name="add_to_cart" class="add-to-cart-btn">
                                <i class="flaticon-shopping-cart"></i> Add to cart
                            </button>

</form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-products-box">
                            <div class="products-image">
                                <a href="single-products.html">
                                    <img src="assets/img/products/img6.jpg" alt="image">
                                </a>
                            </div>

                            <div class="products-content">
                                <h3><a href="single-products.html">>Sanitizer</a></h3>
                                <div class="price">
                                    <span class="new">$18</span>
                                    <span class="old">$20</span>
                                </div>
<form method="POST" action="cart.php">

    <input type="hidden" name="product_id" value="6">
    <input type="hidden" name="product_name" value="Sanitizer">
    <input type="hidden" name="product_price" value="20">
    <input type="hidden" name="quantity" value="1">

    <button type="submit" name="add_to_cart" class="add-to-cart-btn">
        <i class="flaticon-shopping-cart"></i> Add to cart
    </button>

</form>                     </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-products-box">
                            <div class="products-image">
                                <a href="single-products.html">
                                    <img src="assets/img/products/img7.jpg" alt="image">
                                </a>
                            </div>

                            <div class="products-content">
                                <h3><a href="single-products.html">>Black Mask</a></h3>
                                <div class="price">
                                    <span class="new">$25</span>
                                </div>
<form method="POST" action="cart.php">
    <input type="hidden" name="product_id" value="7">
    <input type="hidden" name="product_name" value="Black Mask">
    <input type="hidden" name="product_price" value="18">
    <input type="hidden" name="quantity" value="1">

    <button type="submit" name="add_to_cart" class="add-to-cart-btn">
        <i class="flaticon-shopping-cart"></i> Add to cart
    </button>
</form>                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-products-box">
                            <div class="products-image">
                                <a href="single-products.html">
                                    <img src="assets/img/products/img8.jpg" alt="image">
                                </a>
                            </div>

                            <div class="products-content">
                                <h3><a href="single-products.html">>Hand Sanitizer</a></h3>
                                <div class="price">
                                    <span class="new">$8</span>
                                </div>
<form method="POST" action="cart.php">
    <input type="hidden" name="product_id" value="8">
    <input type="hidden" name="product_name" value="Hand Sanitizer">
    <input type="hidden" name="product_price" value="18">
    <input type="hidden" name="quantity" value="1">

    <button type="submit" name="add_to_cart" class="add-to-cart-btn">
        <i class="flaticon-shopping-cart"></i> Add to cart
    </button>
</form>                            </div>
                        </div>
                    </div>

        </section>
        <!-- End Products Area -->

        <?php
        require 'footer.php';
        ?>

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
        <script>
(function(){if(!window.chatbase||window.chatbase("getState")!=="initialized"){window.chatbase=(...arguments)=>{if(!window.chatbase.q){window.chatbase.q=[]}window.chatbase.q.push(arguments)};window.chatbase=new Proxy(window.chatbase,{get(target,prop){if(prop==="q"){return target.q}return(...args)=>target(prop,...args)}})}const onLoad=function(){const script=document.createElement("script");script.src="https://www.chatbase.co/embed.min.js";script.id="gDGeWkkHUJdf3-sN41oxv";script.domain="www.chatbase.co";document.body.appendChild(script)};if(document.readyState==="complete"){onLoad()}else{window.addEventListener("load",onLoad)}})();
</script>
    </body>

</html>