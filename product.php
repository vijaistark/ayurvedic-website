<?php
// Get the product ID from the URL
$productId = $_GET['id'];

// Define the products array
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
        'payment_button_id' => 'pl_PBnoor1Qijgaql' // Razorpay payment button ID
    ],
    3 => [
        'name' => 'Neem Oil',
        'description' => 'Anti-inflammatory and skin care solution.',
        'image' => 'images/neem_oil.jpg',
        'reviews' => [
            'Works wonders for my skin!',
            'Very effective against acne.',
        ],
        'payment_button_id' => 'pl_PBnoor1Qijgaql' // Razorpay payment button ID
    ],
    4 => [
        'name' => 'Tulsi',
        'description' => 'Immunity booster and respiratory support.',
        'image' => 'images/tulsi.jpg',
        'reviews' => [
            'Great for improving immunity!',
            'Helps with respiratory issues.',
        ],
        'payment_button_id' => 'pl_PBnoor1Qijgaql' // Razorpay payment button ID
    ],
    5 => [
        'name' => 'Brahmi',
        'description' => 'Improves brain function and reduces anxiety.',
        'image' => 'images/brahmi.jpg',
        'reviews' => [
            'Amazing for focus and memory!',
            'Reduced my anxiety levels significantly.',
        ],
        'payment_button_id' => 'pl_PBnoor1Qijgaql' // Razorpay payment button ID
    ],
];

// Get the product details based on the product ID
$product = $products[$productId];

// Define Razorpay key ID here or fetch it from an environment variable for better security
$keyId = 'rzp_live_wqPZCNnh7ArGUx'; // Replace with your actual Razorpay Key ID
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $product['name']; ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="product-style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <header>
        <h1><?php echo $product['name']; ?></h1>
    </header>
    <div class="product-detail">
        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
        <p><strong>Description:</strong> <?php echo $product['description']; ?></p>
        
        <h3>Reviews:</h3>
        <ul>
            <?php foreach ($product['reviews'] as $review): ?>
                <li><?php echo $review; ?></li>
            <?php endforeach; ?>
        </ul>

        <!-- Buy Now Button -->
        <form id="razorpay-form" style="display: none;">
            <script src="https://checkout.razorpay.com/v1/payment-button.js"
                    data-payment_button_id="<?php echo $product['payment_button_id']; ?>"
                    async>
            </script>
        </form>

        <button id="pay-button" class="buy-button">Buy Now</button>
    </div>

    <script>
        $(document).ready(function() {
            $("#pay-button").click(function() {
                // Show the Razorpay payment button when the Buy Now button is clicked
                $("#razorpay-form").toggle();
            });
        });
    </script>
</body>
</html>
