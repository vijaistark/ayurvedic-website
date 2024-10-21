<?php
$productId = $_GET['id'];

$products = [
    1 => [
        'name' => 'Ashwagandha',
        'description' => 'Natural stress relief and energy booster.',
        'reviews' => [
            'Great for reducing stress!',
            'Helped me sleep better at night.',
        ]
    ],
    2 => [
        'name' => 'Triphala',
        'description' => 'Effective detox and digestive aid.',
        'reviews' => [
            'A fantastic herbal supplement!',
            'Very helpful for digestion.',
        ]
    ],
];

$product = $products[$productId];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $product['name']; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><?php echo $product['name']; ?></h1>
    <p><?php echo $product['description']; ?></p>
    <h3>Reviews:</h3>
    <ul>
        <?php foreach ($product['reviews'] as $review): ?>
            <li><?php echo $review; ?></li>
        <?php endforeach; ?>
    </ul>
    <a href="#" class="buy-button">Buy Now</a>
</body>
</html>
