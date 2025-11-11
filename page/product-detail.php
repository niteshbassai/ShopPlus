<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopPlus - Product Detail</title>
    <link rel="stylesheet" href="style.css"> <!-- Direct link to the CSS file -->
</head>
<body>

<!-- Include Header for Navigation -->
<?php include '../include/header.php'; ?>

<?php

$products = [
    1 => [
        'name' => 'Smartphone',
        'description' => 'A powerful smartphone with a large screen, great camera, and long battery life.',
        'price' => '$499.99',
        'image' => 'placeholder-product1.jpg'
    ],
    2 => [
        'name' => 'Wireless Headphones',
        'description' => 'Bluetooth wireless headphones with noise-canceling technology for the best sound experience.',
        'price' => '$89.99',
        'image' => 'placeholder-product2.jpg'
    ],
    3 => [
        'name' => 'Smartwatch',
        'description' => 'A smart device that tracks your fitness, provides notifications, and keeps you connected on the go.',
        'price' => '$199.99',
        'image' => 'placeholder-product3.jpg'
    ],
    4 => [
        'name' => 'Laptop',
        'description' => 'High-performance laptop with an Intel i7 processor, 16GB RAM, and 512GB SSD.',
        'price' => '$899.99',
        'image' => 'placeholder-product4.jpg'
    ],
    5 => [
        'name' => 'Bluetooth Speaker',
        'description' => 'Portable Bluetooth speaker with deep bass, water resistance, and 12 hours of playtime.',
        'price' => '$59.99',
        'image' => 'placeholder-product5.jpg'
    ],
    6 => [
        'name' => 'Tablet',
        'description' => 'A 10-inch tablet with a stunning display and fast performance, ideal for both entertainment and productivity.',
        'price' => '$349.99',
        'image' => 'placeholder-product6.jpg'
    ]
];

// Retrieve the product ID from the URL
$product_id = isset($_GET['product']) ? (int)$_GET['product'] : 0;

if ($product_id > 0 && isset($products[$product_id])) {
    $product = $products[$product_id];
} else {
    // Redirect to the shop page if product not found
    header('Location: shop.php');
    exit;
}
?>

<main>
    <section class="product-detail-section">
        <h1><?php echo $product['name']; ?></h1>
        <div class="product-detail">
            <img src="assets/image/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
            <div class="product-info">
                <p><strong>Price:</strong> <?php echo $product['price']; ?></p>
                <p><strong>Description:</strong> <?php echo $product['description']; ?></p>
                <button>Add to Cart</button>
            </div>
        </div>
    </section>
</main>

<!-- Footer Section -->
<?php include '../include/footer.php'; ?>

</body>
</html>
