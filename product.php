<?php
$productId = $_GET['id'];

$products = [
    1 => [
        'name' => 'Ashwagandha',
        'description' => 'Natural stress relief and energy booster.',
        'image' => 'images/ashwagandha.jpg',
        'reviews' => [
            'Great for reducing stress!',
            'Helped me sleep better at night.',
        ],
        'payment_button_id' => 'pl_PBnoor1Qijgaql' // Razorpay payment button ID
    ],
    2 => [
        'name' => 'Triphala',
        'description' => 'Effective detox and digestive aid.',
        'image' => 'images/triphala.jpg',
        'reviews' => [
            'A fantastic herbal supplement!',
            'Very helpful for digestion.',
        ],
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
    <header>
        <h1><?php echo $product['name']; ?></h1>
    </header>
    <div class="product-detail">
        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
        <p><?php echo $product['description']; ?></p>
        <h3>Reviews:</h3>
        <ul>
            <?php foreach ($product['reviews'] as $review): ?>
                <li><?php echo $review; ?></li>
            <?php endforeach; ?>
        </ul>
        
        <!-- Buy Now Button -->
        <form>  
            <script src="https://checkout.razorpay.com/v1/payment-button.js" 
                data-payment_button_id="<?php echo $product['payment_button_id']; ?>" 
                async>
            </script>
        </form>
    </div>
</body>
</html>
