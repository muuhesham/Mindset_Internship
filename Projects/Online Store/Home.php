<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store</title>
    <link rel="stylesheet" href="./Home.css">
    <link rel="icon" type="x-cion" href="./Images/ico.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Notable&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>

    <?php 

        include "./Data/StoreClass.php";
        $store = new store();
    ?>
    
    <header class="main">
        <a href="./Home.php" ><h1 class="font"><?php echo $store->getName() ?></h1></a>

        <div class="search-container">
        <input type="text" placeholder="Search for Products...">
        <button>
            <img src="https://img.icons8.com/ios-filled/50/000000/search.png" alt="Search Icon">
        </button>
        </div>

        <nav>
            <a href="./Products.php" class="button">SHOW PRODUCTS</a>
            <a href="#">SALES</a>
            <a href="#">ABOUT</a>
            <a href="#">Concat Us</a>
            <a href="#"><i class="fa-solid fa-cart-shopping" title="YOUR CART"></i></a>
        </nav>
    </header>
    <!-- <header class="second">
        <a href="./Products.php">SHOW PRODUCTS</a>
    </header> -->
    <section>

        <article>
            <div id="qoute">LOOK GOOD! FEEL GOOD! DO GOOD!</div>
            <br>
            <div class="desc">
                <?php
                    echo $store->getDescription();
                ?>
                <!-- Dive into the world of fashion that speaks your language. At Fashion Store, we're all about fresh, bold, and trendsetting styles that capture the essence of Gen-Z. Our collections are curated to keep you ahead of the curve, blending streetwear vibes with chic aesthetics, perfect for expressing your unique identity.
                <br><br>
                Whether you're looking for the latest must-have pieces, sustainable fashion, or that one statement item to complete your look, we've got it all. Our store is your go-to for everything from casual cool to party-ready, making it easy to find what fits your vibe. -->
            </div>
        </article>

        <aside>
            <figcaption>
                <?php
                    echo $store->getImages();
                ?>
            </figcaption>
        </aside>

    </section>

    <footer>
        <p> &copy; All rights reserved to BRASERB</p>
    </footer>
    <script></script>

</body>
</html>


