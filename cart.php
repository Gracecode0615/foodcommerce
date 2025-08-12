<?php
$pagetitle = "My Cart";
$cartshow = "none";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale, maximum-scale=1, shrink-to-fit=no">
    <title>Food commerce</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <link rel="stylesheet" href="css/cart.css" type="text/css">

    <!--    bootstarp icon cdn-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!--    Jquery-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>

    <?php include 'exe/heading.php'; ?>

    <div class="cart-container">
        
        <div class="cart-item">
            <img src="https://i.pinimg.com/736x/cf/32/2a/cf322a6005e6dbdc2cb9722b35b094f9.jpg" alt="Food">
            <div class="item-info">
                <h4>Jollof Rice & Turkey</h4>
                <p>NGN 500</p>
                <div class="quantity-controls">
                    <button>-</button>
                    <span>2</span>
                    <button>+</button>
                </div>
            </div>
        </div>

        <div class="cart-item">
            <img src="https://media.istockphoto.com/id/1383962772/photo/nigerian-food.jpg?s=612x612&w=0&k=20&c=u-_1qwHBoY9Yh3alnsRbix6hxgl3_TXhT9lpEvlhH10=" alt="Pizza">
            <div class="item-info">
                <h4>Chicken Pizza</h4>
                <p>NGN 1200</p>
                <div class="quantity-controls">
                    <button>-</button>
                    <span>1</span>
                    <button>+</button>
                </div>
            </div>
        </div>

        <div class="cart-summary">
            <div class="row">
                <span>Subtotal</span>
                <strong>NGN 2,200</strong>
            </div>
            <div class="row">
                <span>Delivery fee</span>
                <strong>NGN 300</strong>
            </div>
            <div class="row" style="border-top: 1px solid #ddd; padding-top: 10px;">
                <span>Total</span>
                <strong>NGN 2,500</strong>
            </div>
        </div>

        <button class="checkout-btn">Checkout Securely</button>
        
    </div>

</body>

</html>
