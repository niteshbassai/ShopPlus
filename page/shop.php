<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopPlus - Shop Our Products</title>
    <link rel="stylesheet" href="../style.css"> <!-- Direct link to the CSS file -->
</head>
<body>

<!-- Include Header for Navigation -->
<?php include '../include/header.php'; ?>

<main>
    <section class="shop-section">
        <h1>Shop Our Products</h1>
        <p>Explore our range of products and find exactly what you're looking for.</p>

        <div class="product-grid">
            <!-- Product 1: Smartphone -->
            <div class="product-item">
                <img src="../assets/image/placeholder-product1.jpg" alt="Smartphone">
                <h3>Smartphone</h3>
                <p>$499.99</p>
                <a href="page/product-detail.php?product=1" class="view-product">View Product</a>
            </div>

            <!-- Product 2: Wireless Headphones -->
            <div class="product-item">
                <img src="../assets/image/placeholder-product2.jpg" alt="Wireless Headphones">
                <h3>Wireless Headphones</h3>
                <p>$89.99</p>
                <a href="page/product-detail.php?product=2" class="view-product">View Product</a>
            </div>

            <!-- Product 3: Smartwatch -->
            <div class="product-item">
                <img src="../assets/image/placeholder-product3.jpg" alt="Smartwatch">
                <h3>Smartwatch</h3>
                <p>$199.99</p>
                <a href="page/product-detail.php?product=3" class="view-product">View Product</a>
            </div>

            <!-- Product 4: Laptop -->
            <div class="product-item">
                <img src="../assets/image/placeholder-product4.jpg" alt="Laptop">
                <h3>Laptop</h3>
                <p>$899.99</p>
                <a href="page/product-detail.php?product=4" class="view-product">View Product</a>
            </div>

            <!-- Product 5: Bluetooth Speaker -->
            <div class="product-item">
                <img src="../assets/image/placeholder-product5.jpg" alt="Bluetooth Speaker">
                <h3>Bluetooth Speaker</h3>
                <p>$59.99</p>
                <a href="page/product-detail.php?product=5" class="view-product">View Product</a>
            </div>

            <!-- Product 6: Tablet -->
            <div class="product-item">
                <img src="../assets/image/placeholder-product6.jpg" alt="Tablet">
                <h3>Tablet</h3>
                <p>$349.99</p>
                <a href="page/product-detail.php?product=6" class="view-product">View Product</a>
            </div>
        </div>
    </section>
</main>

<!-- Footer Section -->
<?php include '../include/footer.php'; ?>

</body>
</html>
