<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store : Buy Online Products</title>
    <link rel="stylesheet" href="./Products.css">
    <link rel="icon" type="x-icon" href="./Images/ico.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <?php
        include "./navbar.php";
        include "./Data/ProductClass.php";
        $product = new product();
    ?>
    <div class="container">
        <div class="ph1">
            <?php
                echo $product->products_Phase1();
            ?>
        </div>
        <div class="ph1">
                <?php
                echo $product->products_phase2();
                ?>
        </div>
        <div class="ph1">
                <?php
                echo $product->products_phase3();
                ?>
        </div>
        <div class="ph1">
                <h3>Others</h3>
                <div><img src="./Images/product 3.jpg" width="250" height="350"></div>
                <div><img src="./Images/product 4.jpg" width="250" height="350"></div>
                <div><img src="./Images/product 5.jpg" width="250" height="350"></div>
        </div>
    </div>
    <footer>
        <p> &copy; All rights reserved to BRASERB</p>
    </footer>
    <script>
        let icons = document.querySelectorAll(".heart img");
        icons.forEach(icon=>{
            icon.addEventListener("click", function(){
                if (icon.src.includes("wheart.png")) {
                    icon.src = "./Images/bheart.png";
                    alert("THIS ITEM MOVED TO YOUR CART");
                }
                else {
                    icon.src = "./Images/wheart.png";
                    alert("THIS ITEM DELETED FROM YOUR CART");
                }
            });
        });
    </script>
</body>
</html>