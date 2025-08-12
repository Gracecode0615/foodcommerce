<?php
$pagetitle = "Food items";
$cartshow = "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale, maximum-scale=1, shrink-to-fit=no">

    <title>explore food</title>

    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/style-mobile.css">
    <link rel="stylesheet" href="css/viewpage.css" type="text/css">

    <!--    bootstrap icon cdn-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!--    Jquery-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
    
    <?php include 'exe/heading.php'; ?>
    
    <main>

        <div class="food-category">
            <span> Rice</span>
            <span>Protein</span>
            <span>Buger</span>
            <span>Pizza</span>
            <span>Seafood</span>
            <span>Swallows & Soups</span>
            <span>Fast Food</span>
            <span>Breakfast Meals</span>
            <span>Soups Only</span>
            <span>Snacks</span>
            <span>Local Delicacies</span>
        </div>

        <section>
            
            <div class="preview-wrap">
                
                <div class="col">
                    <h2>Jollof Rice</h2>

                    <span>Delicous Party Jolly</span>

                    <p>NGN 500</p>
                </div>

                <div class="col">

                    <img src="https://i.pinimg.com/736x/cf/32/2a/cf322a6005e6dbdc2cb9722b35b094f9.jpg">
                    <span class="add">Add to cart</span>


                </div>

            </div>

            <div class="preview-wrap">
                <div class="col">
                    <h2>Jollof Rice and Prepared Turkey</h2>

                    <span>Delicous Party Jolly</span>

                    <p>NGN 500</p>

                </div>

                <div class="col">

                    <img src="https://i.pinimg.com/736x/cf/32/2a/cf322a6005e6dbdc2cb9722b35b094f9.jpg">
                    <span class="add">Add to cart</span>


                </div>

            </div>

            <div class="preview-wrap">
                <div class="col">
                    <h2>Jollof Rice and Prepared Turkey</h2>

                    <span>Delicous Party Jolly</span>

                    <p>NGN 500</p>

                </div>

                <div class="col">

                    <img src="https://i.pinimg.com/736x/cf/32/2a/cf322a6005e6dbdc2cb9722b35b094f9.jpg">
                    <span class="add">Add to cart</span>

                </div>

            </div>

            <div class="preview-wrap">
                <div class="col">
                    <h2>Jollof Rice and Prepared Turkey</h2>

                    <span>Delicous Party Jolly</span>

                    <p>NGN 500</p>
                </div>

                <div class="col">

                    <img src="https://i.pinimg.com/736x/cf/32/2a/cf322a6005e6dbdc2cb9722b35b094f9.jpg">
                    <span class="add">Add to cart</span>


                </div>

            </div>
            
        </section>
        <!--        ///////////////////////////-->
        <!--        ///////////////////////////-->

        <div class="food-detail" id="food-detail">
            
            <div class="overlay close-popup"></div>
            
            <div class="container">
                
                <img src="https://media.istockphoto.com/id/1383962772/photo/nigerian-food.jpg?s=612x612&w=0&k=20&c=u-_1qwHBoY9Yh3alnsRbix6hxgl3_TXhT9lpEvlhH10=" alt="a plate of rice" alt="food image">

                <h2>Fried Rice platter</h2>

                <span class="text">How many Quality of product do you want?</span>

                <span class="price">NGN 500</span>

                <div class="action">
                    <div class="control">
                        <span class="decrease">-</span>
                        <span class="count-display">1</span>
                        <span class="increase">+</span>
                    </div>

                    <button id="btn">Add NGN 500</button>
                </div>
                
            </div>
            
        </div>

    </main>


    <script src="js/script.js">

    </script>
</body>

</html>
