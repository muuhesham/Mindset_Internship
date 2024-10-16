<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Home.css">
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
        <a href="./Home.php" class="font"><h1><?php echo $store->getName() ?></h1></a>

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
</body>
</html>