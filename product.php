<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}

// Logout functionality
if (isset($_GET['logout'])) {
    session_destroy(); // Destroy the session
    header("Location: login.php"); // Redirect to login page
    exit;
}

// Product data
$products = [
    1 => [
        'name' => 'Ashwagandha',
        'description' => 'Natural stress relief and energy booster.',
        'image' => 'images/ashwagandha.jpg',
    ],
    2 => [
        'name' => 'Triphala',
        'description' => 'Effective detox and digestive aid.',
        'image' => 'images/triphala.jpg',
    ],
    3 => [
        'name' => 'Neem Oil',
        'description' => 'Anti-inflammatory and skin care solution.',
        'image' => 'images/neem_oil.jpg',
    ],
    4 => [
        'name' => 'Tulsi',
        'description' => 'Immunity booster and respiratory support.',
        'image' => 'images/tulsi.jpg',
    ],
    5 => [
        'name' => 'Brahmi',
        'description' => 'Improves brain function and reduces anxiety.',
        'image' => 'images/brahmi.jpg',
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></h1>
        <nav>
            <a href="products.php?logout=true">Logout</a> <!-- Logout link -->
        </nav>
    </header>

    <div class="product-container">
        <?php foreach ($products as $productId => $product): ?>
            <div class="product">
                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                <h2><?php echo $product['name']; ?></h2>
                <p><?php echo $product['description']; ?></p>
                <a href="product.php?id=<?php echo $productId; ?>" class="buy-button">View Product</a>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
